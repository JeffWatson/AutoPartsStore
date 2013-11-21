<?php

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (!empty($_GET['cf_parts'])) {
        $parts = $_GET['cf_parts'];
        $parts = explode(",", $parts);

        $db = new SQLite3('../autopartsstore.db');

        foreach ($parts as $item) {
            $statement = $db->prepare("SELECT * FROM part WHERE id='" . $item . "';");
            $queryResults = $statement->execute();
            $row = $queryResults->fetchArray(SQLITE3_ASSOC);

            echo "<div class='modal_part'>";
            echo "<span class='part_num modal_piece'>#" . $row['part_num'] . "</span>";
            echo "<span class='name modal_piece'>Name: " . $row['name'] . "</span>";
            echo "<span class='price modal_piece'>Price: " . $row['price'] . "</span>";
            echo "</div>";
        }
    } else {
        echo "You Have Nothing In Your Cart, Dummy!";
    }
}