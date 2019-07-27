<?php
$server = “localhost”;
$database = “mahasiswa”;
$username = “root”;
$password = “”;
$konek = mysql_connect ($server, $username, $password);
$konek_DB = mysql_select_db($konek,$database);
?>
