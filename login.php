<?php
session_start();
$dbuser = "root";
$dbpass = "";
$dbhost ="localhost";
$dbname ="accounts";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$_SESSION["user"] = $_POST["benutzername"];
$_SESSION["pass"] = $_POST["passwort"];

//Passwort und Benutzername aus der Datenbank auslesen
$userRead = mysqli_query($conn,"SELECT username,password FROM data WHERE username='{$_SESSION["user"]}' AND
password ='{$_SESSION["pass"]}'");
$pwRead = mysqli_query($conn, "SELECT password FROM data WHERE username='{$_SESSION["user"]}'");

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
if ($rownumb == 0 && password_verify($_SESSION["pass"], $titlestring)){
    $_SESSION["login"] = "verified";
    header("Location: welcome.php");
}
else{
    include "login.html";
    }?>
    <p class="anzeige">INVALID PASSWORD OR USERNAME</p>

