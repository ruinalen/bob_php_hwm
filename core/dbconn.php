<?php
/**
 * Created by PhpStorm.
 * User: donghyunkim
 * Date: 2017. 12. 28.
 * Time: PM 6:08
 */

$host = 'localhost';
$user = 'root';
$pw = 'dlrauddmlfhfltm!';
$dbName = 'hwm';
$mysqli = new mysqli($host, $user, $pw, $dbName);
$email = $_POST['inputemail'];
$password = $_POST['inputpassword'];

?>