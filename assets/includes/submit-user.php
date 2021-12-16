<?php
$fileName = "../../json/user.json";
$fileContent = file_get_contents($fileName);
$user = json_decode($fileContent, true);

$newPwdCheck = !empty($_POST["newPwd"]);
$confirmPwdCheck = !empty($_POST["confirmPwd"]);
$currentPwdCheck = !empty($_POST["currentPwd"]);
$usernameCheck = !empty($_POST["username"]);

$newPwd = $newPwdCheck ? $_POST["newPwd"]: '';
$confirmPwd = $confirmPwdCheck ? $_POST["confirmPwd"]: '';
$currentPwd = $currentPwdCheck ? $_POST["currentPwd"]: '';

if (!$usernameCheck && !$currentPwdCheck) {
    header("Location: ../../settings/index.php?error=allfieldsempty");
    exit();
}
if (!$usernameCheck) {
    header("Location: ../../settings/index.php?error=usernameempty");
    exit();
}
if ($currentPwdCheck) {
    if ($currentPwd == $user["password"]) {
        if ($newPwdCheck) {
            if ($confirmPwdCheck) {
                if ($newPwd == $confirmPwd) {
                    echo var_dump($newPwd);
                    echo var_dump($confirmPwd);
                    $user["password"] = $newPwd;
                } else {
                    echo 'Confirm password does not match';
                    header("Location: ../../settings/index.php?error=newpwdmatch");
                    exit();
                }
            } else {
                echo 'Confirm password empty';
                header("Location: ../../settings/index.php?error=confirmpwdempty");
                exit();
            }
        }
        $username = $_POST["username"];
        $fName = $_POST["fName"];
        $lName = $_POST["lName"];

        echo var_dump($currentPwd);
        echo var_dump($username);
        echo var_dump($fName);
        echo var_dump($lName);

        $user["username"] = $username;
        $user["fName"] = $fName;
        $user["lName"] = $lName;

        $file = fopen($fileName, 'w');
        fwrite($file, json_encode($user, JSON_PRETTY_PRINT));
        fclose($file);
        header("Location: ../../settings/");
        exit();
    } else {
        echo 'Current password does not match';
        header("Location: ../../settings/index.php?error=currentpwdmatch");
        exit();
    }
} else {
    echo 'Current password empty';
    header("Location: ../../settings/index.php?error=currentpwdempty");
    exit();
}


?>