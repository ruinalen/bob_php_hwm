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
$email = $_POST['inputemail'];
$sql = "SELECT * FROM `member` WHERE `email` = '".$email."'";
$res = mysqli_query($mysqli,$sql);
$row = mysqli_fetch_row($res);
if($row>0)
{
    $sql="SELECT `sid`,`name`,`password` FROM `member` WHERE `email` LIKE '".$email."'";
    $res = mysqli_query($mysqli,$sql);
    $row = mysqli_fetch_array($res);
    $password = $_POST['inputpassword'];
    if (password_verify($password,$row['password'])) {

        session_start();
        $_SESSION['sid'] = $row['sid'];
        $_SESSION['name'] = $row['name'];
        header("Location: http://125.131.189.38/bob_php_hwm/index.php");
    }
    else {
        echo "로그인 실패!";
    }
}
else{
    echo "없어임마돌아가";
}
?>