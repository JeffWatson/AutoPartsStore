<?php
/**
 * Project: AutoPartsStore
 * File: login.php
 * Author: Jeff Watson
 * Date: 11/10/13
 * Time: 2:09 PM
 */
if (isset($_SESSION['name'])) {
    showUsername();
} // If no submission and not logged in, display login form
else {
    ?>
    <button id="register" class="navbar-right btn btn-primary btn-lg" data-toggle="modal" data-target="#registerModal">
        New Here? Register
    </button>

    <!-- form for handling login.-->
    <form id="login_form" class="navbar-form navbar-right" method="post">
        <div class="form-group">
            <input name="name" type="text" placeholder="Email" class="form-control">
        </div>
        <div class="form-group">
            <input name="pwd" type="password" placeholder="Password" class="form-control">
        </div>
        <button id="login_submit" class="btn btn-success">Sign in</button>
    </form>
<?php
}

function showUsername()
{
    ?>
    <form id="logout_form" class="navbar-form navbar-right" action="handlers/logout.php" method="post">
        <span class="username">
            <?php
            echo 'Hello, <a href="MyAccount.php">' . $_SESSION['name'] . '</a>';
            ?>
        </span>
        <input type="submit" name="logout" class="btn-lg btn-danger" value="Logout"/>
    </form>
<?php
}

?>