<?php
$username = $_POST["benutzername"];
$password = $_POST["passwort"];

/* Passwort Verschlüsselung */
$hash_opts = array("cost" => 15, "salt"=> "this is my salt, that I use for salting");
$hash = password_hash($password, PASSWORD_BCRYPT, $hash_opts);

$dbhost = 'localhost';
$dbuser = "root";
$dbpass = "Haus2500";
$dbname = "test";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

if(! $conn ) {
    die('Could not connect: '.mysql_error());
}
else{
    $sql = "INSERT INTO anmeldedaten (Loginname, Passwort)
    values ('$username','$$hash')";
}
if ($conn->query($sql)){
    echo "Anmeldedaten wurden erfolgreich gespeichert!";
}
else
    echo"Anmeldedaten konnten nicht gespeichert werden, versuchen Sie es nochmal";
 
        
    