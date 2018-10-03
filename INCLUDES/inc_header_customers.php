<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #00b8e6">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="main.php">
                <img src="images/ddd.png" style="width:50px; height:50px;margin-left:20px;" alt="LOGO">
            </a>
        </div>
		
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                </a>
				
            </li> 
			
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $users;?> <b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="main2.php"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                    <li><a href="main3.php"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse" >
            <ul class="nav navbar-nav side-nav" style="background-color:rgba(230, 249, 255,0.1)">
                <li  style="margin-left:10px">
                    <a href="main.php" data-toggle="collapse" data-target="#submenu-1" style="color:black" > HOME</a>
                  
                </li>
                <li  style="margin-left:10px">
                    <a href="#" data-toggle="collapse" data-target="#submenu-2"style="color:black"><i class="fa fa-fw fa-star"></i>  MENU 2 <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-2" class="collapse">
                        <li><a href="#"style="color:black"><i class="fa fa-angle-double-right"style="color:black"></i> SUBMENU 2.1</a></li>
                        <li><a href="#"style="color:black"><i class="fa fa-angle-double-right"style="color:black"></i> SUBMENU 2.2</a></li>
                        <li><a href="#"style="color:black"><i class="fa fa-angle-double-right"style="color:black"></i> SUBMENU 2.3</a></li>
                    </ul>
                </li>
                <li  style="margin-left:10px">
                    <a href="main_customers.php" style="color:red"><i class="fa fa-fw fa-user-plus" style="color:black"></i> CUSTOMERS</a>
                </li>
                <li  style="margin-left:10px">
                    <a href="sugerencias"style="color:black"><i class="fa fa-fw fa-paper-plane-o"style="color:black"></i> MENU 4</a>
                </li >
                <li  style="margin-left:10px">
                    <a href="faq"style="color:black"><i class="fa fa-fw fa fa-question-circle"style="color:black"></i> MENU 5</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->






<!-- -->

	<div class="container" style="width:60%; margin-left:420px;margin-top:-20px" >
		<div class="page-header">
			<h1>Bootstrap Sample Page with Form</h1>
		</div>
		<div class="alert alert-info"style="margin-top:-15px">
			<strong>Heads up!</strong> Please fill-in the form</a>!
		</div>
		<form action='#' method='post'>
			<table class='table table-hover table-responsive table-bordered' style="color:#e60000; margin-top:-15px" >
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