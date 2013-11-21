<?php
/**
 * Project: AutoPartsStore
 * File: shop.php
 * Author: Jeff Watson
 * Date: 10/29/13
 * Time: 2:00 PM
 */
?>
<!-- TODO this needs to have a search function. -->
<div class="col-xs-12 col-sm-9">
    <div class="jumbotron">
        <h1>Shopping Page!</h1>

        <?php
            include("search.php");
            include("cart.php");
        ?>
    </div>
    <div id="shop_container" class="row">
        <?php
        $db = new SQLite3('autopartsstore.db');
        $statement = $db->prepare('SELECT * FROM part;');

        $queryResults = $statement->execute();
        while ($row = $queryResults->fetchArray(SQLITE3_ASSOC)) {
            $id = $row['id'];
            $name = $row['name'];
            $price = $row['price'];
            $details = $row['details'];
            $quantity = $row['quantity'];

            ?>
            <div class="part col-6 col-sm-6 col-lg-4">
                <h2 class="name"><?php echo $name; ?></h2>

                <div class="id" meta="<?php echo $id;?>">Part Id: <?php echo $id;?></div>
                <div class="price" meta="<?php echo $price;?>">Price: $<?php echo $price;?></div>
                <div class="details" meta="<?php echo $details;?>"><?php echo $details;?></div>
                <div class="quantity" meta="<?php echo $quantity;?>">In Stock: <?php echo $quantity;?></div>

                <p><a class="add-to-cart btn btn-default">Add To Cart &raquo;</a></p>
            </div>
        <?php
        }
        ?>
        <!--/span-->
    </div>
    <!--/row-->
</div>
<!--/span-->