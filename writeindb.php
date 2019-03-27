<?php
session_start();
if (isset($_SESSION["login"]) && $_SESSION["login"] =="verified"){
$username = $_POST["eingabeuser"];
$password = $_POST["eingabepass"];

/* Passwort Verschlüsselung */
$hash_opts = array("cost" => 15, "salt"=> "this is my salt, that I use for salting");
$hash = password_hash($password, PASSWORD_BCRYPT, $hash_opts);

$dbhost = 'localhost';
$dbuser = "root";
$dbpass = "";
$dbname = $_SESSION['user'];
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

if(! $conn ) {
    die('Could not connect: '.mysqli_error());
}
else{
    $sql = "INSERT INTO anmeldedaten (Benutzername, Passwort)
    values ('$username','$password')";
}
if ($conn->query($sql)){
    header ("Location:addData.php");
    ?><p> Anmeldedaten wurden erfolgreich gespeichert</p><?php

}
else
    echo"Anmeldedaten konnten nicht gespeichert werden, versuchen Sie es nochmal";
}
 
?>
    