<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $make = $_POST['make'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $color = $_POST['color'];


    $db = new SQLite3('../autopartsstore.db');

    $statement = $db->prepare("INSERT INTO car VALUES (NULL,'" . $make . "', '" . $model . "', '" . $year . "', '" . $color . "');");
    $statement->execute();
    $statement->close();

    $statement = $db->prepare("UPDATE customer SET owned_car= " . $db->lastInsertRowID() . ";");
    $statement->execute();
    $statement->close();

    echo "Updated listing for ". $year . " " . $make . " " . $model;
}