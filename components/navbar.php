<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    
    <!-- Navbar Header -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <i class="fa fa-lg fa-bars"></i>
        </button>
        <a class="navbar-brand" href="index.php">Byeah Dashboard</a>
    </div>
    <!-- End Navbar Header -->
    
    <!-- Navbar Top Links -->
    <ul class="nav navbar-top-links navbar-right">

        <!-- Dashboard - Messages -->
        <li class="dropdown">
            
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>

            <ul class="dropdown-menu dropdown-messages">

                <li>
                    <a href="#">
                        <div>
                            <strong>User full name</strong>
                            <span class="pull-right text-muted">
                                <em>Yesterday</em>
                            </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                    </a>
                </li>

                <li class="divider"></li>

                <li>
                    <a class="text-center" href="#">
                        <strong>Read All Messages</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>

        </li>
        <!-- End Dashboard - Messages -->
        
        <!-- Dashboard - User Settings -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>
                User Full name 
                <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        </li>
        <!-- End Dashboard - User Settings -->

    </ul>
    <!-- End Navbar Top Links -->
    
    <!-- Navbar - Sidebar -->
    <?php include_once 'sidebar.php'; ?>
    <!-- End Navbar - Sidebar -->
</nav>