<?php
$fileName = "../../json/user.json";
$fileContent = file_get_contents($fileName);
$user = json_decode($fileContent, true);

$password = $_POST["password"];
$username = $_POST["username"];
$fName = $_POST["fName"];
$lName = $_POST["lName"];

echo var_dump($password);
echo var_dump($username);
echo var_dump($fName);
echo var_dump($lName);

$user["password"] = $password;
$user["username"] = $username;
$user["fName"] = $fName;
$user["lName"] = $lName;

$file = fopen($fileName, 'w');
fwrite($file, json_encode($user, JSON_PRETTY_PRINT));
fclose($file);
header("Location: ../../settings/index.php");
?>