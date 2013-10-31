<!--
/**
 * Created by IntelliJ IDEA.
 * User: Jeff Watson
 * Date: 10/29/13
 * Time: 1:06 PM
 * To change this template use File | Settings | File Templates.
 */
 -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Auto Parts Store</title>

    <link href="../css/main.css" rel="stylesheet"/>
    <script src="../js/jQuery-v2-0-3.js" type="text/javascript"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<?php
echo file_get_contents('header.php');
?>
<div class="container span12">
    <span id="content">
        <?php
        include('shop.php');
        ?>
    </span>
    <?php
    include('side-nav.php');
    ?>
</div>
</body>
</html>