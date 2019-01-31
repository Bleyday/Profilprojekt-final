<?php
$dbuser = "root";
$dbpass = "";
$dbhost ="localhost";
$dbname ="accounts";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$user = $_POST["benutzername"];
$pass = $_POST["passwort"];

//Passwort und Benutzername aus der Datenbank auslesen
$userRead = mysqli_query($conn,"SELECT username,password FROM data WHERE username='{$user}' AND
password ='{$pass}'");
$pwRead = mysqli_query($conn, "SELECT password FROM data WHERE username='{$user}'");

//Verschlüsseltes Passwort aus der DB erst in Array dann in einen String umwandeln
$titles = array();
while($row = mysqli_fetch_array($pwRead))
{
    $titles[] = $row["password"];
}
$titlestring = implode(",", $titles);

//Kontrolle ob der Username bereits existiert
$rownumb = mysqli_num_rows($userRead);
// Login Verification
if ($rownumb == 0 && password_verify($pass, $titlestring)){
    echo"Username KORREKT";
}
else{
    echo "INVALID PASSWORD";
}

