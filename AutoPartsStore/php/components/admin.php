<?php

if ($_SESSION['auth'] == 1 && $_SESSION['role'] == "admin") {

    $db = new SQLite3('autopartsstore.db');
    $statement = $db->prepare("SELECT * FROM login;");
    $queryResults = $statement->execute();
    $accounts = [];

    while ($row = $queryResults->fetchArray(SQLITE3_ASSOC)) {
        $accounts[] = $row;
    }
}
?>

<div class="col-xs-12 col-sm-9">

    <div class="well">
        <?php
        if (sizeof($accounts) < 1) {
            echo "You Have No Accounts! Create Customer Accounts First!";
        } else {
            foreach ($accounts as $item) {
                echo "<div class='admin_login_item'>";
                ?>
                <form id="admin_escalate_login">
                    <input id="cust_id" name="cust_id" value="<?php echo $item['id']; ?>" class="hidden"/>
                    <input id="admin_show_modal" type="button" class="admin_show_modal input-lg btn-danger"
                           value="Hire Employee" data-toggle="modal" data-target="#adminModal"/>
                </form>
                <?php
                echo "<div class='id'>Id: {$item['id']}</div>";
                echo "<div class='username'>Username: {$item['username']}</div>";
                echo "<div class='role'>Role: {$item['role']}</div>";
                echo "</div>";
            }
        }
        include("admin_modal.php");
        ?>


    </div>
</div>