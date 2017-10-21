<?php

$name = $_POST["name"];
$pass = $_POST["pass"];
 $cookie_name =  'login';
 $cookie_value = $name;
 setcookie('login', $_POST["name"], time() + (86400 * 30), "/", "", 0);
 
 header("Location: ../index.php");
?>