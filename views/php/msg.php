<?php
$subject = $_POST["subject"];
$msg = $_POST["msg"];
$user = $_POST["user"];

$location = "../db/" . $user . ".txt";

echo $location;

$f = get_file_contents($location);
$json = json_decode($f);
echo $f;
echo $json;
foreach ($json as $js{
    echo $js->msg;
})
?>