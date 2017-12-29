<?php
/**
 * Created by PhpStorm.
 * User: dbdns
 * Date: 2017-12-28
 * Time: 오후 9:41
 */
session_start();
include './dbconn.php';
include '../assets/lib/password.php';

$password = $_POST['inputpassword'];
$hashpass = password_hash((string)$password, PASSWORD_BCRYPT);

if($_SESSION['perm']==1)
{
    $oid = $_SESSION['oid'];
    $sql = "UPDATE `hwm`.`mentor` SET `password` = '".$hashpass."' WHERE `mentor`.`oid` = ".$oid;
}
else {
    $eid = $_SESSION['eid'];
    $sql = "UPDATE `hwm`.`mentee` SET `password` = '".$hashpass."' WHERE `mentee`.`eid` = ".$eid;
}

$res = mysqli_query($mysqli,$sql);
$row = mysqli_fetch_row($res);

header("Location: http://125.131.189.38/bob_php_hwm/profile.php");

?>
