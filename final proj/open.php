<?php

$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$conn) {
    die ('Error connecting to mysql');
}

mysql_select_db($dbname, $conn);

?>