<?php   
    // Read the file.
    //$users = array();
    $f = fopen("../db/password.txt", 'a');
    
    fwrite($f, $_POST["name"] . ':' . $_POST["pass"] . "." .  PHP_EOL);
    fclose($f);
    header("Location:login.php");
    die();
?>