<?php
error_reporting(E_ALL);

ini_set("display_errors", 1);

/**
 * Created by PhpStorm.
 * User: donghyunkim
 * Date: 2017. 12. 28.
 * Time: PM 6:12
 */
    session_start();
    echo $_SESSION['email'];
?>