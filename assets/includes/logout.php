<?php
$fileName = "../../json/user.json";
$fileContent = file_get_contents($fileName);
$user = json_decode($fileContent, true);
$user["isLoggedIn"] = false;

$setupFile = "../../json/setup.json";
$setupContent = file_get_contents($setupFile);
$setup = json_decode($setupContent, true);
$setup["loginCheck"] = true;

$file = fopen($setupFile, 'w');
fwrite($file, json_encode($setup, JSON_PRETTY_PRINT));
fclose($file);

$file = fopen($fileName, 'w');
fwrite($file, json_encode($user, JSON_PRETTY_PRINT));
fclose($file);
header("Location: ../../");
exit();
?>