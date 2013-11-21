<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $employee_id = $_POST['employee_id'];
    $name = $_POST['name'];
    $dept = $_POST['dept'];
    $branch = $_POST['branch'];
    $id = $_POST['admin_cust_id'];
    $salary = $_POST['salary'];

    $db = new SQLite3('../autopartsstore.db');
    $statement = $db->prepare("UPDATE login SET role='employee' WHERE id=" . $id . ";");
    $statement->execute();
    $statement->close();

    echo "$id" . $id;
    echo "updated login " . $db->lastInsertRowID();

    $statement = $db->prepare("INSERT INTO employee VALUES(NULL, '" . $employee_id . "','" . $name . "','" .$dept  ."','" . $branch . "','" . $id . "','" . $salary ."');");
    $statement->execute();

    echo "Added Employee #" . $db->lastInsertRowID();
}