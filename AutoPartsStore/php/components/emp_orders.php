<?php
$db = new SQLite3('autopartsstore.db');
$statement = $db->prepare("SELECT * FROM part;");
$queryResults = $statement->execute();
$parts = [];

while ($row = $queryResults->fetchArray(SQLITE3_ASSOC)) {
    $parts[] = $row;
}
?>

<div class="well">
    <h1>Reorder Parts</h1>

    <form id="emp_reorder_parts">
        <label for="reorder_part">Select Part</label>
        <select id="reorder_part" class="form-control" name="reorder_part">
            <?php
            foreach ($parts as $item) {
                echo "<option value='{$item['id']}'>Part Number: {$item['part_num']} Name: {$item['name']}</option>";
            }
            ?>
        </select>

        <label for="quantity">Quantity</label>
        <input class="input-lg" id="reorder_quantity" type="text" name="reorder_quantity" placeholder="Enter the amount to order."/>

        <p>
            <button class="btn-primary btn-lg" type="button" id="emp_reorder_submit">Reorder This Part!</button>
        </p>
    </form>
</div>

<div class="well">
    <h1>Order New Parts</h1>

    <form id="emp_order_parts">
        <label for="name">Name</label>
        <input class="input-lg" id="name" type="text" name="name" placeholder="Enter a Part Name."/>

        <label for="part_num">Part Number</label>
        <input class="input-lg" id="part_num" type="text" name="part_num" placeholder="Enter a Part Number."/>

        <label for="price">Price</label>
        <input class="input-lg" id="price" type="text" name="price" placeholder="Enter a Price."/>

        <label for="details">Details</label>
        <textarea class="input-lg" id="details" type="text" name="details"
                  placeholder="Enter the part's details."></textarea>

        <label for="quantity">Quantity</label>
        <input class="input-lg" id="quantity" type="text" name="quantity" placeholder="Enter the amount to order."/>

        <p>
            <button class="btn-primary btn-lg" type="button" id="emp_order_submit">Order This Part!</button>
        </p>
    </form>
</div>

<div class="well">
    <h1>Reports</h1>

    <form id="emp_order_reports">
        <select class="form-control" id="emp_order_select" name="emp_order_select">
            <option value="daily">Daily</option>
            <option value="weekly">Weekly</option>
            <option value="monthly">Monthly</option>
        </select>
    </form>
    <div id="order_data">

    </div>
</div>