<?php
session_start();

if (isset($_SESSION["check"])) {
    $uName = $_GET["uName"] ?? "未提供";
    $uPwd = $_GET["uPwd"] ?? "未提供";
    $uEmail = $_GET["uEmail"] ?? "未提供";
    $uColor = $_GET["uColor"] ?? "未提供";
    $uAge = $_GET["uAge"] ?? "未提供";
    $uBirth = $_GET["uBirth"] ?? "未提供";
    $uLike = $_GET["uLike"] ?? "未提供";
    $uSecret = $_GET["uSecret"] ?? "未提供";
    $uGender = $_GET["uGender"] ?? "未提供";
    $uInterest = $_GET["uInterest"] ?? []; 
    $uCity = $_GET["uCity"] ?? "未提供";
    $uComment = $_GET["uComment"] ?? "未提供";

    echo "Your name is: " . htmlentities($uName) . "<br>";
    echo "Your password is: " . htmlentities($uPwd) . "<br>";
    echo "Your Email is: " . htmlentities($uEmail) . "<br>";
    echo "Your Color is: " . htmlentities($uColor) . "<br>";
    echo "Your Birthday is: " . htmlentities($uBirth) . "<br>";
    echo "Your Age is: " . htmlentities($uAge) . "<br>";
    echo "Your like is: " . htmlentities($uLike) . "<br>";
    echo "Your Secret is: " . htmlentities($uSecret) . "<br>";
    echo "Your Gender is: " . htmlentities($uGender) . "<br>";
    echo "Your City is: " . htmlentities($uCity) . "<br>";

    if (is_array($uInterest) && count($uInterest) > 0) {
        echo "Your Interests are: " . htmlentities(implode(", ", $uInterest)) . "<br>";
    } else {
        echo "Your Interests are: 未提供<br>";
    }

    echo "Your comments: " . nl2br(htmlentities($uComment));
} else {
    echo "Illegal user!";
    header("Refresh:2;url=login.php");
    exit(); 
}
?>
