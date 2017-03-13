<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="home.php">Project name</a>
    </div>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <!-- Top Navigation: Left Menu -->
    <ul class="nav navbar-nav navbar-left navbar-top-links">
        <li><a href="home.php"><i class="fa fa-home fa-fw"></i> Home</a></li>
    </ul>

    <!-- Top Navigation: Right Menu -->
    <ul class="nav navbar-right navbar-top-links">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>Welcome: <?php echo $_SESSION["user"]; ?> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li class="divider"></li>
                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        </li>
    </ul>

    <!-- Sidebar left -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">

            <ul class="nav" id="side-menu">
                <li>
                    <a href="#"><i class="fa fa-sitemap fa-fw ollapsed"></i> List registers<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="list.php"><i class="glyphicon glyphicon-chevron-right"></i> list</a></li></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-sitemap fa-fw ollapsed"></i> Add register<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="new.php"><i class="glyphicon glyphicon-chevron-right"></i> Add</a></li></a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>