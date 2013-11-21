<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $employee_id = $_POST['employee_id'];
    $name = $_POST['name'];
    $dept = $_POST['dept'];
    $branch = $_POST['branch'];
    $cust_id = $_POST['cust_id'];
    $salary = $_POST['salary'];

    $db = new SQLite3('../autopartsstore.db');

    $statement = $db->prepare("INSERT OR REPLACE INTO employee VALUES (NULL,'" . $employee_id . "', '" . $name . "', '" . $dept . "', '" . $branch . "', null,'" . $salary . "');");
    $statement->execute();
    $statement->close();

    echo "Updated listing for ". $name;
}