<?php
include("includes/header.php");
?>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Project name</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

    </nav>

    <div id="wrapper">

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Login</h1>
                    </div>
                </div>
                <form name="autentication" action="control.php" method="post">
                <?php
                    error_reporting(E_ALL ^ E_NOTICE);
                    if ($_GET["error"]=="error-login") {
                    }
                    else {
                        echo "";
                    }
                ?>
                <p />
                User: <input type="text" name="user"> <p />
                Password: <input type="password" name="pass"> <p />
                <input type="submit" name="login" value="Login">
                <input type="reset" name="reset" value="Reset">
            </form>
            <p />
            <a href="../db/user_password.txt">¿Forget the password?</a>

            </div>
        </div>

    </div>
</body>
</html>