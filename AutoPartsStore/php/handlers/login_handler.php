<?php
/**
 * Project: AutoPartsStore
 * File: login_handler.php
 * Author: Jeff Watson
 * Date: 11/14/13
 * Time: 4:46 PM
 */

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $pass = $_POST['pwd'];
}

if (isset($name) || isset($pass)) {
    if (empty($name)) {
        die ("ERROR: Please enter username!");
    }
    if (empty($pass)) {
        die ("ERROR: Please enter password!");
    }

    $db = new SQLite3('../autopartsstore.db');
    $statement = $db->prepare("SELECT * FROM login WHERE username='". $name . "';");
    $queryResults = $statement->execute();
    $dbPass = null;
    $role = 'customer';
    $id = 0;
    $car = 0;
    $payments = [];

    while ($row = $queryResults->fetchArray(SQLITE3_ASSOC)) {
        $dbPass = $row['password'];
        $role = $row['role'];
        $id = $row['id'];
    }

    if($id != 0)
    {
        $statement = $db->prepare("SELECT * FROM car WHERE id=" .$id . ";");
        $queryResults = $statement->execute();
        while ($row = $queryResults->fetchArray(SQLITE3_ASSOC)) {
            $car = $row['id'];
        }

        $statement = $db->prepare("SELECT * FROM payment WHERE customer=" . $id . ";");
        $queryResults = $statement->execute();
        while($row = $queryResults->fetchArray(SQLITE3_ASSOC))
        {
            $payments[] = $row;
        }
    }

    if ($pass == $dbPass) {
        session_start();
        $_SESSION['auth'] = 1;
        $_SESSION['name'] = $name;
        $_SESSION['role'] = $role;
        $_SESSION['cust_id'] = $id;
        $_SESSION['cart'] = [];
        $_SESSION['car'] = $car;
        $_SESSION['payments'] = $payments;
    } else {
        die("ERROR: Incorrect username or password!");
    }
}