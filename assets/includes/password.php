<?php
$fileName = "../../json/setup.json";
$fileContent = file_get_contents($fileName);
$setup = json_decode($fileContent, true);
$setup["loginCheck"] = false;

$file = fopen($fileName, 'w');
fwrite($file, json_encode($setup, JSON_PRETTY_PRINT));
fclose($file);
header("Location: ../../dashboard/");
exit();
?>