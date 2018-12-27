<?php 
$user = $_POST["benutzername"];
$pass = $_POST["passwort"];
$host = 'localhost';
$createQ = "CREATE USER '{$user}'@'{$host}' IDENTIFIED BY '{$pass}'";
$dbuser = "root";
$dbpass = " ";
$dbhost ="localhost";
$dbname ="test";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(mysqli_query($conn, $createQ)){
	echo 'user created<br/>';
	if(mysqli_query("GRANT ALL PRIVILEGES ON test.anmeldedaten to '{$user}'@''{$host}'")){
		echo 'permissions granted';
	}else{
		echo 'permissions query failed';
	}	
}else{
	echo 'user create query failed:';
}
?>