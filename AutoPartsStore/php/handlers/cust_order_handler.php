<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST" && $_SESSION['auth'] == 1) {

    $date_time = $_POST['cf_date_time'];
    $payment = $_POST['cf_payment'];
    $parts = $_POST['cf_parts'];
    $total_price = $_POST['cf_total_price'];

    $customer = $_SESSION['cust_id'];

    $db = new SQLite3('../autopartsstore.db');
    $statement = $db->prepare("INSERT INTO orders VALUES (NULL,'". $date_time . "', '" . $payment . "', '" . $parts . "', '" . $total_price . "');");
    $statement->execute();
    $statement->close();

    echo "Updated order for parts: " . $parts;
}