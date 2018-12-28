<?php 
$user = $_POST["benutzername"];
$pass = $_POST["passwort"];

$host = 'localhost';
$createQ = "CREATE USER '{$user}'@'{$host}' IDENTIFIED BY '{$pass}'";

$dbuser = "root";
$dbpass = "";
$dbhost ="localhost";
$db ="test";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

if(mysqli_query($conn, $createQ)){
    echo "yes";
}
else{
    echo "no";
}
mysqli_query($conn, "GRANT ALL PRIVILEGES ON test.anmeldedaten to '{$user}'@''{$host}'");


?>