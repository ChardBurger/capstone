<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #8F2831">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="main.php">
            <img src="images/ddd.png" style="width:53px; height:53px; margin-left:4px; margin-right:-8px;" alt="LOGO">
            </a>
			      <a class="navbar-brand hvr-grow" href="index.php" style="color:white; margin-top:15px; margin-bottom:-15px; position:static;">HOME</a>
				  <a class="navbar-brand hvr-grow" href="customer.php" style="color:white; margin-top:15px; margin-bottom:-15px; position:static;">ADD-CUSTOMER</a>
            <a class="navbar-brand hvr-grow" href="reports.php" style="color:white; margin-top:15px; margin-bottom:-15px; position:static;">REPORTS</a>
            <a class="navbar-brand hvr-grow" href="edit.php" style="color:white; margin-top:15px; margin-bottom:-15px; position:static;">EDIT</a>
            <a class="navbar-brand hvr-grow" href="update.php" style="color:white; margin-top:15px; margin-bottom:-15px; position:static;">DELETE</a>
	          <a class="navbar-brand hvr-grow" href="home-aboutus.php" style="color:white; margin-top:15px; margin-bottom:-15px; position:static;">ABOUT</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $users;?> <b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu" >
                    <li><a href="main2.php"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                    <li><a href="main3.php"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

        <!-- /.navbar-collapse -->
    </nav>

    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
