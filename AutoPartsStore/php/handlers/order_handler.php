<?php
/**
 * Project: AutoPartsStore
 * File: order_handler.php
 * Author: Jeff Watson
 * Date: 11/14/13
 * Time: 5:41 PM
 */

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['username'];
    $pass = $_POST['password'];
    $role = isset($_POST['role']) ? 'employee' : 'customer';

    $db = new SQLite3('../autopartsstore.db');
    $statement = $db->prepare("SELECT * FROM login WHERE username='". $name . "';");
    $queryResults = $statement->execute();

    if($queryResults->fetchArray(SQLITE3_ASSOC))
    {
        die("ERROR: Username is already in use :(");
    }

    $statement->close();

    $statement = $db->prepare("INSERT INTO login VALUES (NULL,'". $name . "', '" . $pass . "', '" . $role . "');");
    $statement->execute();
    $statement->close();

    session_start();

    $_SESSION['auth'] = 1;
    $_SESSION['name'] = $name;
    $_SESSION['role'] = $role;
    $_SESSION['cust_id'] = $db->lastInsertRowID();
}