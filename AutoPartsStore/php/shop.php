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
<div class="row row-offcanvas row-offcanvas-right">
    <div class="col-xs-12 col-sm-9">
        <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
        </p>
        <div class="jumbotron">
            <h1>Shopping Page!</h1>

            <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some
                responsive-range viewport sizes to see it in action.</p>
        </div>
        <div class="row">
            <?php
            $db = new SQLite3('autopartsstore.db');
            $statement = $db->prepare('SELECT * FROM part;');

            $queryResults = $statement->execute();
            // TODO write a function to format these properly...
            while ($row = $queryResults->fetchArray(SQLITE3_ASSOC)) {
                ?>
                <div class="col-6 col-sm-6 col-lg-4">
                    <?php
                    foreach ($row as $key => $value) {
                        if ($key == "name") {
                            ?>
                            <h2><?php echo $value; ?></h2>
                            <p>

                        <?php
                        } else if ($key == "price") {
                            echo $value;

                        } else if ($key == "details") {
                            echo $value;

                        } else if ($key == "quantity") {
                            echo $value;?> </p><?php
                        }
                    }
                    ?>
                    <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
                </div>
            <?php
            }
            ?>
            <!--/span-->
        </div>
        <!--/row-->
    </div>
    <!--/span-->