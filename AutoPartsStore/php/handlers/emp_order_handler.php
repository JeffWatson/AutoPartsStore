<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $part_num = $_POST['part_num'];
    $details = $_POST['details'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $db = new SQLite3('../autopartsstore.db');

    $statement = $db->prepare("INSERT INTO part VALUES (NULL,'" . $part_num . "', '" . $name . "', '" . $price . "', '" . $details . "', '" . $quantity . "');");
    $statement->execute();
    $statement->close();

    echo "Ordering ". $quantity . " of part: " . $name;
}