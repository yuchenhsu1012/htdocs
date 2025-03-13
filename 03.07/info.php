

<?php

$uName=$_POST["uName"];
$uPwd=$_POST["uPwd"];
$uEmail=$_POST["uEmail"];
$uColor=$_POST["uColor"];
$uAge=$_POST["uAge"];
$uBirth=$_POST["uBirth"];
$uLike=$_POST["uLike"];
$uSecret=$_POST["uSecret"];
$uGender=$_POST["uGender"];
$uInterest=$_POST["uInterest"];
$uCity=$_POST["uCity"];
$uComments=$_POST["uComments"];

echo "Your name is:".$uName."<br>";
echo "Your password is:".$uPwd."<br>";
echo "Your email is:".$uEmail."<br>";
echo "Your color is:".$uColor."<br>";
echo "Your age is:".$uAge."<br>";
echo "Your birthday is:".$uBirth."<br>";
echo "Your like is:".$uLike."<br>";
echo "Your secret is:".$uSecret."<br>";
echo "Your gender is:".$uGender."<br>";
//echo "Your interest is:".$uInterest."<br>";

$j="";
foreach($uInterest as $i){
    $j=$j.$i.",";
}
echo "Your interest are:".$j."<br>";

echo "Your city is:".$uCity."<br>";
echo "Your comments".nl2br($uComments);

?>