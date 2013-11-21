<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    session_start();
    $name = $_POST['name'];
    $address = $_POST['address'];
    $branch_pref = $_POST['branch_pref'];
    $id = $_SESSION['cust_id'];
    $car = $_SESSION['car'];

    $db = new SQLite3('../autopartsstore.db');

    $statement = $db->prepare("INSERT OR REPLACE INTO customer VALUES ('"    . $id . "','" . $name . "', '" . $address . "', '" . $branch_pref . "', '" . $car . "');");
    $statement->execute();
    $statement->close();

    echo "Updated listing for ". $name;
}