<?php

if ($_SESSION['auth'] == 1) {
    $db = new SQLite3('autopartsstore.db');
    $statement = $db->prepare("SELECT *, orders.id AS id FROM orders, payment WHERE orders.payment=payment.id AND payment.customer='" . $_SESSION['cust_id'] . "';");
    $queryResults = $statement->execute();
    $orders = [];

    while ($row = $queryResults->fetchArray(SQLITE3_ASSOC)) {
        $orders[] = $row;
    }
}
?>

<div class="well">
    <?php
    date_default_timezone_set("America/Chicago");

    if (sizeof($orders) < 1) {
        echo "You Have No Orders! Buy Something!";
    } else {
        foreach($orders as $item)
        {   echo "<div class='order_item'>";
            ?>
            <form id="cust_remove_order" >
                <input id="order_id" name="order_id" value="<?php echo $item['id']; ?>" style="display:none;"/>
                <input type="button" class="cust_order_remove_submit input-lg btn-danger" value="Cancel Order"/>
            </form>
            <?php
            echo "<div class='date_time'>Time: " . date("l, F jS, Y - g:ia", $item['date_time']) . "</div>";
            echo "<div class='payment'>Payment: {$item['payment']}</div>";
            echo "<div class='parts'>Parts: {$item['parts']}</div>";
            echo "<div class='total_price'>Total Price: {$item['total_price']}</div>";
            echo "<div class='type'>Type: {$item['type']}</div>";
            echo "<div class='card_type'>Card Type: {$item['card_type']}</div>";
            echo "</div>";
        }
    }
    ?>

</div>
