<?php
/**
 * Created by PhpStorm.
 * User: donghyunkim
 * Date: 2017. 12. 29.
 * Time: PM 1:17
 */
    session_start();
    if(!isset($_SESSION['eid']) || !isset($_SESSION['oid']) && !isset($_SESSION['name']))
    {
        header("Location: http://125.131.189.38/bob_php_hwm/register.html");
    }
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">BHM</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="./profile.php"><?php echo $_SESSION['name'];?></a></li>
                <li><a href="./core/logout.php">Logout</a></li>
            </ul><!--
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
            </form>-->
        </div>
    </div>
</nav>
