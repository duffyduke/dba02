<?php
$db_server = "localhost"; // Host-Name
$db_user = "dba02"; // Benutzername
$db_pass = "XYZ"; // Kennwort
$db_name = "dba02"; // Name der Datenbank

$link  = mysql_connect($db_server, $db_user, $db_pass) or exit ("Es konnte keine Verbindung zum Datenbankserver hergestellt werden");
mysql_select_db($db_name, $link) or exit ("Diese Datenbank existiert nicht.");
$anzahl_datensaetze = ("SELECT * FROM studenten");
$res = mysql_query($anzahl_datensaetze);
$num = mysql_num_rows($res);
echo "$num Datensaetze gefunden <br />";

mysql_close($link);
?>

