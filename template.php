<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php
include "./core/head.php";
?>

<body>

<?php
include "./core/nav.php";
?>

<div class="container-fluid">
    <div class="row">
        <?php
        include "./core/sidebar.php";
        ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Dashboard</h1>

        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="./assets/lib/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
</body>
</html>