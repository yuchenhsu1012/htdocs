<?php
session_start();

$defaultName = "nuk";
$defaultPwd = "12345";
$userName = $_POST["userName"];
$userPwd = $_POST["userPwd"];

if ($defaultName == $userName && $defaultPwd == $userPwd) {
    $_SESSION["check"] = 1;

    $cookieExpire = time() + 10; 
    setcookie("userName", $defaultName, $cookieExpire, "/");

    header("Location: form.php");
    exit(); 
} else {
    echo "Login failed, will send you back to login again";
    header("Refresh:10; url='login.php'");
}
?>
