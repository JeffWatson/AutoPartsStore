<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['reorder_part'];
    $quantity = $_POST['reorder_quantity'];

    $db = new SQLite3('../autopartsstore.db');

    $statement = $db->prepare("UPDATE part SET quantity = quantity + " . $quantity ." WHERE id='" . $id ."';");
    $statement->execute();
    $statement->close();

    echo "Ordered quantity ". $quantity . " of " . $id;
}