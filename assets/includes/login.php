<?php
$fileName = "../../json/user.json";
$fileContent = file_get_contents($fileName);
$user = json_decode($fileContent, true);

$setupFile = "../../json/setup.json";
$setupContent = file_get_contents($setupFile);
$setup = json_decode($setupContent, true);

if (!empty($_POST["username"])) {
    $inputUsername = strtolower($_POST["username"]);
    if ($inputUsername == $user["username"]) {
        if (!empty($_POST["password"])) {
            $inputPassword = $_POST["password"];
            if ($inputPassword == $user["password"]) {
                $setup["loginCheck"] = true;
                $user["isLoggedIn"] = true;
                
                $file = fopen($fileName, 'w');
                fwrite($file, json_encode($user, JSON_PRETTY_PRINT));
                fclose($file);

                $file = fopen($setupFile, 'w');
                fwrite($file, json_encode($setup, JSON_PRETTY_PRINT));
                fclose($file);
                header("Location: ../../dashboard/");
                exit();
            } else {
                echo 'invalid password';
                header("Location: ../../log-in/index.php?error=invalidpwd&usr=".$inputUsername);
                exit();
            }
        } else {
            echo 'empty field: password';
            header("Location: ../../log-in/index.php?error=emptyfieldpwd&usr=".$inputUsername);
            exit();
        }
    } else {
        echo 'invalid username';
        header("Location: ../../log-in/index.php?error=invalidusr");
        exit();
    }
} else {
    echo 'empty field: username';
    header("Location: ../../log-in/index.php?error=emptyfieldusr");
    exit();
}
?>