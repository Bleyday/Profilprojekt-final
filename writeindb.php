<?php
$username = $_POST["benutzername"];
$password = $_POST["passwort"];

/* Passwort Verschlüsselung */
$hash_opts = array("cost" => 15, "salt"=> "this is my salt, that I use for salting");
$hash = password_hash($password, PASSWORD_BCRYPT, $hash_opts);

$dbhost = 'localhost';
$dbuser = "root";
$dbpass = "";
$dbname = "Kokonattu";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

if(! $conn ) {
    die('Could not connect: '.mysqli_error());
}
else{
    $sql = "INSERT INTO anmeldedaten (Benutzername, Passwort)
    values ('$username','$password')";
}
if ($conn->query($sql)){
    echo "Anmeldedaten wurden erfolgreich gespeichert!";
}
else
    echo"Anmeldedaten konnten nicht gespeichert werden, versuchen Sie es nochmal";
 
        
    