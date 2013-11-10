<?php
/**
 * Created by IntelliJ IDEA.
 * User: jeff
 * Date: 10/29/13
 * Time: 1:26 PM
 * To change this template use File | Settings | File Templates.
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
            <a class="navbar-brand" href="#">Auto Parts Store</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex8-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
            </ul>

            <!-- form for handling login.-->
            <form class="navbar-form navbar-right" action="login.php" method="post">
                <div class="form-group">
                    <input name="name" type="text" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input name="pwd" type="password" placeholder="Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Sign in</button>
            </form>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</div><!-- /example -->