<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    session_start();
    $id = $_POST['order_id'];

    $db = new SQLite3('../autopartsstore.db');

    $statement = $db->prepare("DELETE FROM orders WHERE id='" . $id ."';");
    $statement->execute();
    $statement->close();

    echo "Deleted listing for ". $id;
}