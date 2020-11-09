<?php
date_default_timezone_set("Europe/London");
$sqli_connection = mysqli_connect("localhost","root","","projeto3") or die("Error " . mysqli_error($link));
mysqli_set_charset($sqli_connection,"utf8");

?>