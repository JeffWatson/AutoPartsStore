<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My Account | Auto Parts Store</title>

    <!-- css -->
    <link href="../css/main.css" rel="stylesheet"/>
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>

    <!-- js -->
    <script src="../js/jQuery-v2-0-3.js" type="text/javascript"></script>
    <script src="../js/main.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../js/account.js" type="text/javascript"></script>
</head>
<body>
<?php
session_start();
include('components/header.php');
?>
<div class="container span12">

    <div id="content" class="row row-offcanvas row-offcanvas-right">

        <?php
        if($_SESSION['role'] == "admin") {
            include('components/admin.php');
            include('components/side_nav.php');
        } else {
            include('components/account.php');
            include('components/side_nav.php');
        }



        ?>
    </div>
    <?php
    include('components/register_modal.php');
    ?>

</body>
</html>