<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST" && $_SESSION['auth'] == 1) {

    $type = $_POST['type'];
    $card_type = $_POST['card_type'];
    $ccn = $_POST['ccn'];
    $billing_addr = $_POST['billing_addr'];
    $customer = $_SESSION['cust_id'];

    $db = new SQLite3('../autopartsstore.db');
    $statement = $db->prepare("INSERT INTO payment VALUES (NULL,'". $type . "', '" . $card_type . "', '" . $ccn . "', '" . $billing_addr . "', " .$customer .");");
    $statement->execute();
    $statement->close();

    echo "Updated payment info for: " . $customer;
}
