    <div id="navbar-wrapper">
        <header>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="main.php">AUF-IS</a>
                    </div>
                    <div id="navbar-collapse" class="collapse navbar-collapse">
                        <form class="navbar-form navbar-left" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </span>
                            </div>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a id="flag" href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="http://www.country-dialing-codes.net/img/png-country-4x2-fancy-res-1280x960/gb.png" alt="English" width="28px" height="18px">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-flag" role="menu">
                                    <li>
                                        <a href="#">
                                            <img src="http://www.country-dialing-codes.net/img/png-country-4x2-flat-res-640x480/gf.png" alt="Français" width="28px" height="18px">
                                            <span>Français</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a id="user-profile" href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/dp.jpg" class="img-responsive img-thumbnail img-circle"> Username</a>
                                <ul class="dropdown-menu dropdown-block" role="menu">
                                    <li><a href="#">Profil edition</a></li>
                                    <li><a href="#">Admin</a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <aside id="sidebar">
                <ul id="sidemenu" class="sidebar-nav">
                    <li>
                        <a href="main.php">
                            <span class="sidebar-icon"><i class="fa fa-dashboard"></i></span>
                            <span class="sidebar-title">Home</span>
                        </a>
                    </li>
                    <li>
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-2">
                            <span class="sidebar-icon"><i class="fa fa-users"></i></span>
                            <span class="sidebar-title">Management</span>
                            <b class="caret"></b>
                        </a>
                        <ul id="submenu-2" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a href="main3.php"><i class="fa fa-caret-right"></i>Users</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i>Roles</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-3">
                            <span class="sidebar-icon"><i class="fa fa-newspaper-o"></i></span>
                            <span class="sidebar-title">Blog</span>
                            <b class="caret"></b>
                        </a>
                        <ul id="submenu-3" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a href="#"><i class="fa fa-caret-right"></i>Posts</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i>Comments</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-database"></i></span>
                            <span class="sidebar-title">Data</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-terminal"></i></span>
                            <span class="sidebar-title">Console</span>
                        </a>
                    </li>
                </ul>
            </aside>            
        </div>
        <main id="page-content-wrapper" role="main">
        </main>
    </div> 
	
	
	
<!-- -->

<head>
	<title>Customer Feedback Form</title>
	<?php include "inc_bootstrap.html" ?>

</head>
<body>
    <FORM METHOD="post" ACTION="">

	<!-- container -->
	<div class="container" style="margin-left:230px; width:75%">
		<div class="page-header">
			<h1>Bootstrap Sample Page with Form</h1>
		</div>
		<div class="alert alert-info">
			<strong>Heads up!</strong> Please fill-in the form</a>!
		</div>
		<form action='#' method='post'>
			<table class='table table-hover table-responsive table-bordered'>
				<tr>
					<td>Name</td>
					<td><input type='text' name='name' class='form-control' required></td>
				</tr>
				
				<tr>
					<td>Contact Number</td>
					<td><input type='text' name='contact_number' class='form-control' required></td>
				</tr>
				
				<tr>
					<td>Address</td>
					<td><textarea name='address' class='form-control'></textarea></td>
				</tr>
				<tr>
					<td>Birthday</td>
					<td><input type='date' select name='birthday' class='form-control' required></td>
				</tr>
				
				<tr>
					<td>List</td>
					<td>
						<select name='list_id' class='form-control'>
							<option value='1'>List One</option>
							<option value='2'>List Two</option>
							<option value='3'>List Three</option>
						</select>
					</td>
				</tr>
				
				<tr>
					<td>Total Bill</td>
						<td><input type='text' name='total_bill' class='form-control'></td>
				</tr>
				<tr>
					<td>Amount Paid</td>
						<td><input type='text' name='amount_paid' class='form-control'></td>
				</tr>	
				<tr>
					<td></td>
					<td>
						<button type="submit" name="Create" class="btn btn-primary">
							<span class="glyphicon glyphicon-plus"></span> Create New Record
						</button>
						
					</td>
				</tr>			
			</table>
		</form>
			
	</div>
	<!-- /container -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </FORM>	
</body>
</html>

</body>