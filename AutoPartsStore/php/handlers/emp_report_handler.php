<?php

session_start();
if($_SERVER['REQUEST_METHOD'] == "GET" && $_SESSION['auth'] == 1 && $_SESSION['role'] == "employee")
{
    $report_type = $_GET['emp_order_select'];

    switch ($report_type)
    {
        case "daily": $where_clause .= " WHERE datetime(date_time, 'unixepoch') > datetime('now', '-1 day');";
            break;
        case "weekly": $where_clause .= " WHERE datetime(date_time, 'unixepoch') > datetime('now', '-7 day');";
            break;
        case "monthly": $where_clause .= " WHERE datetime(date_time, 'unixepoch') > datetime('now', '-1 month');";
            break;
        default: $where_clause .= ";";
    }
    $db = new SQLite3('../autopartsstore.db');
    $statement = $db->prepare("SELECT * FROM orders" . $where_clause);
    $queryResults = $statement->execute();
    $orders = [];

    while ($row = $queryResults->fetchArray(SQLITE3_ASSOC)) {
        $orders[] = $row;
    }

    date_default_timezone_set("America/Chicago");

    foreach($orders as $item)
    {   echo "<div class='order_item'>";
        echo "<div class='date_time'>Time: " . date("l, F jS, Y - g:ia", $item['date_time']) . "</div>";
        echo "<div class='payment'>Payment: {$item['payment']}</div>";
        echo "<div class='parts'>Parts: {$item['parts']}</div>";
        echo "<div class='total_price'>Total Price: {$item['total_price']}</div>";
        echo "</div>";
    }
}
else {
    echo "No Report Type Selected!!";
}