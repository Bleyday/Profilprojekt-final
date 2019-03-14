<?php
if (isset($_SESSION["login"]) && $_SESSION["login"] =="verified"){
$dbuser = "root";
$dbpass = "";
$dbhost ="localhost";
$dbname = $_SESSION["user"];
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$sqlget = "SELECT * FROM anmeldedaten";
$sqldata = mysqli_query($conn, $sqlget);

echo "<table>";
echo "<tr><th>Benutzername</th><th>Passwort</th></tr>";

while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
    echo "<tr><td>";
    echo $row ['Benutzername'];
    echo "</td><td>";
    echo $row ['Passwort'];
    echo "</td></tr>";
}
}
echo "</table>";

?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        table{
            border: 2px solid red;
            text-align: center;
            margin: 0 auto;
            margin-top: 100px;
        }
        body{
            font-size: 11pt;
            font-family: 'Karla', sans-serif;
            padding: 0;
            margin: 0;
            background-image: url("img/colorfade.png");
            color: white;
        }
      </style>
    <title>TAP-Manager</title>
  </head>
<body>
</body>
</html>