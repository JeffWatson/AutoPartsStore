<?php
        ?>
<div class="col-xs-12 col-sm-9">

    <?php
            if ($_SESSION['role'] == "employee")
            {
                include("components/emp_orders.php");
            }
            elseif ($_SESSION['role'] == "customer"){
                echo "This is the CUSTOMER orders page!!!";
                include("components/cust_orders.php");
            }
    ?>
</div>
