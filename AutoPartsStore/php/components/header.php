<?php
/**
 * User: Jeff Watson
 * Date: 11/12/13
 * Time: 1:26 PM
 */

?>

<div class="bs-example">
    <nav class="navbar navbar-inverse" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex8-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="AutoPartsStore.php">Auto Parts Store</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex8-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="AutoPartsStore.php">Home</a></li>
            </ul>

            <div id="login_container">
                <?php
                    include('login.php');
                ?>
            </div>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</div><!-- /example -->