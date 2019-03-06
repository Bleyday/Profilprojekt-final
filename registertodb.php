<?php 
$user = $_POST["benutzername"];
$pass = $_POST["passwort"];

$host = 'localhost';

$hash_opts = array("cost" => 15, "salt"=> "this is my salt, that I use for salting");
$hashpw = password_hash($pass, PASSWORD_DEFAULT);

$createU = "INSERT INTO data (username,password) VALUES ('{$user}','{$hashpw}')"; //In einer Variable gespeicherter                                                                           MYSQL Befehl
$createDB = "CREATE DATABASE $user";
$createTB = "CREATE TABLE $user.anmeldedaten(Benutzername VARCHAR(255), Passwort VARCHAR(255))";

$dbuser = "root";
$dbpass = "";
$dbhost ="localhost";
$dbname ="accounts";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); // Verbindung zur datenbank

if(mysqli_query($conn, $createDB)){
    echo "Datenbank für $user erstellt<br>";
}
else{
    echo " DB Konnte nicht erstelt werden<br>";
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
<form action="login.html">
    <input id = "submit" type="submit" value="Login">
</form> 
  </body>
    </html>
