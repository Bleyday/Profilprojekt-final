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
echo "<tr><th>Benutzername</th><th>Passwort</th><th>Für Website</th></tr>";

while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
    $pwarray[] = $row["Passwort"];
    $pwclear = implode(",", $pwarray);
    echo "<tr><td>";
    echo $row ['Benutzername'];
    echo "</td><td><input class='pw_field' value='$pwclear' type='password' readonly>";
    echo "</td><td>";
    echo $row ['Website'];
    
}
    echo "</table>";
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
        .pwfield{
            width: 100%;
            box-sizing: border-box;
        }
      </style>
      <script>
      function ShowPW() {
          var x = document.getElementsByClassName("pw_field");
          if (x.type == "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
      </script>
    <title>TAP-Manager</title>
  </head>
<body>
    <input class="showpw" type="checkbox" onclick="ShowPW()">Show Password
</body>
</html>