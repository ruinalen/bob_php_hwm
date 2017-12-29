<?php
/**
 * Created by PhpStorm.
 * User: donghyunkim
 * Date: 2017. 12. 28.
 * Time: PM 5:40
 */

error_reporting(E_ALL);
ini_set("display_errors", 1);

include './dbconn.php';
include '../assets/lib/password.php';
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$hashpass = password_hash((string)$password, PASSWORD_BCRYPT);
$name = $_POST['name'];
$gen = $_POST['gen'];
$track = $_POST['track'];


$sql = "SELECT * FROM `mentee` WHERE `email` = '".$email."'";
$res = mysqli_query($mysqli,$sql);
$row = mysqli_fetch_row($res);
if($row>0)
{
    echo "회원가입 오류";
}
else{
    $registersql = "INSERT INTO `hwm`.`mentee` (`eid`, `password`, `name`, `email`, `gen`, `perm`, `track`) VALUES ('', '".$hashpass."', '".$name."', '".$email."', '".$gen."', '0', '".$track."')";
    $res = mysqli_query($mysqli,$registersql);
    header("Location: http://125.131.189.38/bob_php_hwm/register.html");
}
?>