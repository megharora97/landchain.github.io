<?php
$titlename = "LANDCHAIN";
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "landchain";
$prefix = "";
$db = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysqli_select_db($db, $mysql_database) or die("Could not select database");

define("LINK_EXPIRATION_TIME",15);
?>