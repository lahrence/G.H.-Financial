<?php
$fileName = "../../json/user.json";
$fileContent = file_get_contents($fileName);
$user = json_decode($fileContent, true);
$user["isLoggedIn"] = true;

$file = fopen($fileName, 'w');
fwrite($file, json_encode($user, JSON_PRETTY_PRINT));
fclose($file);
?>