<?php 
$user = $_POST["benutzername"];
$pass = $_POST["passwort"];

$host = 'localhost';
$createQ = "CREATE USER '{$user}'@'{$host}' IDENTIFIED BY '{$pass}'"; //In einer Variable gespeichertes                                                                           MYSQL Befehl
$dbuser = "root";
$dbpass = "Haus2500";
$dbhost ="localhost";
$dbname ="test";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); // Verbindung zur datenbank
if(mysqli_query($conn, $createQ)){
	echo 'user created<br/>';
	if(mysqli_query("GRANT ALL PRIVILEGES ON test.anmeldedaten to '{$user}'@''{$host}'")){ //Rechte für                                                                                            den neuen                                                                                               Benutzer
		echo 'permissions granted';
	}else{
		echo 'permissions query failed';
	}	
}else{
	echo 'user create query failed:';
}