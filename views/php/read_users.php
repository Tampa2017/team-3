<?php

$name = $_POST["name"];
$pass = $_POST["pass"];
 $f = fopen("../db/password.txt", "r") or die("Failed.");
 $r = fread($f, filesize("../db/password.txt"));
 $cookie_name =  "login";
 $cookie_value = $name;
 setcookie($cookie_name, $cookie_value, time() + (86400 * 30)
die();

?>