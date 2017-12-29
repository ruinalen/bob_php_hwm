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
        <div class="col-sm-9 col-sm-offset-3 col-md-7 col-md-offset-2 main">
            <h1 class="page-header">Dashboard</h1>
            <form class="form-horizontal" role="form" method="post" action="index.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">NAME</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">EMAIL</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">TITLE</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="1" name="title"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="col-sm-2 control-label">CONTENTS</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="4" name="message"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="file01" class="col-sm-2 control-label">UPLOAD FILE 01</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="file01" name="file01"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="file02" class="col-sm-2 control-label">UPLOAD FILE 02</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="file02" name="file02"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="file03" class="col-sm-2 control-label">UPLOAD FILE 03</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="file03" name="file03"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="file04" class="col-sm-2 control-label">UPLOAD FILE 04</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="file04" name="file04"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="file05" class="col-sm-2 control-label">UPLOAD FILE 05</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="file05" name="file05"></textarea>
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input id="submit" name="submit" type="submit" value="UPLOAD HW" class="btn btn-primary">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <! Will be used to display an alert to the user>
                    </div>
                </div>
            </form>
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