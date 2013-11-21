<?php
// TODO these need to pull from the database is there's any entry :)
?>

<div class="col-xs-12 col-sm-9">
    <?php
    if ($_SESSION['role'] == "employee") {
        include("components/emp_account.php");
    } elseif ($_SESSION['role'] == "customer") {
        include("components/cust_account.php");
        include("components/payments.php");
        include("components/cust_car.php");
    }
    ?>
</div>