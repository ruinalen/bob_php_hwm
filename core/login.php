<?php
/**
 * Created by PhpStorm.
 * User: donghyunkim
 * Date: 2017. 12. 28.
 * Time: PM 5:40
 */
include './dbconn.php';

$sql = "SELECT * FROM `member` WHERE `email` = '".$email."'";
$res = mysqli_query($mysqli,$sql);
$row = mysqli_fetch_row($res);
if($row>0)
{
    $sql="SELECT `password` FROM `member` WHERE `email` LIKE '".$email."'";
    $res = mysqli_query($mysqli,$sql);
    $row = mysqli_fetch_array($res);
    if($row[0]==$password = $_POST['inputpassword']){
        echo "로그인성공";
        session_start();
        $_SESSION['email'] = $row[0];
    }
    else{
        echo "패스워드틀렸어";
    }
}
else{
    echo "없어임마돌아가";
}
?>