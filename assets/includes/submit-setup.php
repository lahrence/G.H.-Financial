<?php
$fileName = "../../json/setup.json";
$fileContent = file_get_contents($fileName);
$setup = json_decode($fileContent, true);

$currency = $_POST["currency"];
$currencySymbol = $_POST["currencySymbol"];
$title = $_POST["title"];
$footerText = $_POST["footerText"];
$borderRadius = $_POST["borderRadius"];
$loginCheck = isset($_POST["loginCheck"]) ? true : false;
$darkMode = isset($_POST["darkMode"]) ? true : false;

echo var_dump($currency);
echo var_dump($currencySymbol);
echo var_dump($title);
echo var_dump($footerText);
echo var_dump($borderRadius);
echo var_dump($loginCheck);
echo var_dump($darkMode);

$setup["currency"] = $currency;
$setup["currencySymbol"] = $currencySymbol;
$setup["title"] = $title;
$setup["footerText"] = $footerText;
$setup["borderRadius"] = $borderRadius;
$setup["loginCheck"] = $loginCheck;
$setup["darkMode"] = $darkMode;

$file = fopen($fileName, 'w');
fwrite($file, json_encode($setup, JSON_PRETTY_PRINT));
fclose($file);
header("Location: ../../settings/index.php");
?>