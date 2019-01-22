<?php 
$user = $_POST["benutzername"];
$pass = $_POST["passwort"];

$host = 'localhost';
$createU = "CREATE USER '{$user}'@'{$host}' IDENTIFIED BY '{$pass}'"; //In einer Variable gespeicherter                                                                           MYSQL Befehl
$createDB = "CREATE DATABASE $user";
$createTB = "CREATE TABLE $user.anmeldedaten(Benutzername VARCHAR(255), Passwort VARCHAR(255))";

$dbuser = "root";
$dbpass = "Haus2500";
$dbhost ="localhost";
$dbname ="test";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); // Verbindung zur datenbank

if(mysqli_query($conn, $createDB)){
    echo "Datenbank für $user erstellt<br>";
    $dbname = $user;
}
mysqli_query($conn,$createTB);
if(mysqli_query($conn, $createU)){
	echo 'Benutzer wurde erstellt';
    // Rechte für den neuen Benutzer  
    mysqli_query($conn,"GRANT ALL PRIVILEGES ON $user.anmeldedaten to '$user'@''$host'");
}
else{
	echo "Benutzer konnte nicht erstellt werden<br>" ;
    }
//Hier endet der PHP Teil
?>

<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <title>TAP-Manager</title>
  </head>
  <body>

<h1 id="sitetitle">TAP-Manager</h1>

<form action="index.html">
    <input id = "submit" type="submit" value="Back">
</form>   
  </body>
    </html>
