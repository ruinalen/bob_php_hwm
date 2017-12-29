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
            <form enctype="multipart/form-data" action="./core/upload.php" method="POST">
                <!-- MAX_FILE_SIZE는 file 입력 필드보다 먼저 나와야 합니다 -->
                <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                <!-- input의 name은 $_FILES 배열의 name을 결정합니다 -->
                이 파일을 전송합니다: <input name="userfile" type="file" />
                <input type="submit" value="파일 전송" />
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