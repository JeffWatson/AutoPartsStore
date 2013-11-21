<!-- TODO

role         cust    |   employee
----------------------------------
Login      <- DONE       <- employee mgmt done
(username, <- DONE
password)  <- DONE

Order Parts   <- DONE    need to set up reorder and cancel order
(Part number, <- DONE
part name,    <- DONE
price)        <- DONE

Payment       <- DONE    <- DONE
(option
(card,
cash),
card_type,
ccn,
billing_addr)

Input Customer <- DONE
(name,
address,
branch pref,
owned car,
username,
password)

Search (Part number, name) <- DONE, all around

Employee Management    <- N/A               <-DONE
(Employee Id,                               <-
name,                                       <-
dept)                                       <-

Order MGMT
(order new parts,    <- DONE            <- DONE
reorder parts,       N/A                <- DONE
stop order)          <- DONE            N/A


Report MGMT (daily, weekly, monthly) <- DONE


MISC TODO: componentize all js...
           load all data in account pages.
           be able to have multiple cars.
           order needs to remove/add to/from inventory!
           hash & salt
           get parts in customer orders page.
           update session vars on ajax submit
           sanitize all forms... :(
-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Auto Parts Store</title>

    <!-- css -->
    <link href="../css/main.css" rel="stylesheet"/>
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>

    <!-- js -->
    <script src="../js/jQuery-v2-0-3.js" type="text/javascript"></script>
    <script src="../js/main.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../js/shop.js" type="text/javascript"></script>
    <script src="../js/search.js" type="text/javascript"></script>

</head>
<body>
<?php
session_start();
include('components/header.php');
?>
<div class="container span12">

    <div id="content" class="row row-offcanvas row-offcanvas-right">

        <?php
        include('components/shop.php');
        include('components/side_nav.php');
        ?>
    </div>

    <?php
    include('components/register_modal.php');
    ?>

</body>
</html>