<?php
if (isset($_SESSION["login"]) && $_SESSION["login"] =="verified"){
$dbuser = "root";
$dbpass = "";
$dbhost ="localhost";
$dbname = $_SESSION["user"];
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$sqlget = "SELECT * FROM anmeldedaten";
$sqldata = mysqli_query($conn, $sqlget);

}
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        table{
            text-align: center;
            margin: 0 auto;
            margin-top: 100px;
            height: 50px;
            font-size: 18pt;
            border-collapse: collapse;
            table-layout: fixed;
        }
        th, td{
            border: 1px solid #ddd;
            padding: 8px;
        }
        body{
            font-size: 11pt;
            font-family: 'Karla', sans-serif;
            padding: 0;
            margin: 0;
            background-image: url("img/colorfade.png");
            color: white;
        }
        #password_field{
            width: 100%;
            box-sizing: border-box;
        }
        #showpw{
            margin-left: 50%;
        }
        .standarttext{
            text-align: center;
        }
      </style>
      
    <title>TAP-Manager</title>
  </head>
<body>
    
<?php 
echo "<table>";
echo "<tr><th>Benutzername</th><th>Passwort</th><th>Für Website</th></tr>";
    
while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
    $pwarray[] = $row["Passwort"];// Holt die Passwörter aus der Datenbank in eine Liste
    $pwclear = implode(",", $pwarray); //Array in String Konvertierung
    echo "<tr><td>";
    echo $row ['Benutzername'];
    echo "</td><td><input class='password_field' value='$pwclear' type='password' readonly>";
    $trashcan = array_shift($pwarray); //Wirft den letzten Wert aus der Passwort-Liste heraus, damit nicht in der nächsten Zeile nicht das Passwort von der Zeile darüber steht
    echo "</td><td>";
    echo $row ['Website'];
    
}
    echo "</table>";?>
    
    <script language="javascript" src="jvs.js">
        
    
</script>
    <input id='showpw' type='checkbox' onclick='Show_Password()'>Passwörter anzeigen
        <p class="standarttext"><b>Hinweis</b><br>Wir empfehlen Ihnen, sich nach jedem Besuch oben Rechts wieder auszuloggen, damit ihre Daten nicht vom nächsten Benutzer wieder eingesehen werden können.</p>
</body>
</html>