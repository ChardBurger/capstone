
<html>

<body>
    <FORM METHOD="post" ACTION="">
	<!-- navbar -->
	
	<!-- /navbar -->
		
	<!-- container -->
	<div class="container" style="margin-left:100px">
		<div class="page-header">
			<h1 style="color:white">Bootstrap Sample Page with Form</h1>
		</div>
		<div class="alert alert-info">
			<strong>Heads up!</strong> Please fill-in the form</a>!
		</div>
		<form action='#' method='post'>
			<table class='table table-hover table-responsive table-bordered'>
				<tr>
					<td style="color:red; position:absolute ;margin-top:5px; border:none">Name</td>
					<td><input type='text' name='name' class='form-control' required></td>
				</tr>
				
				<tr>
					<td style="color:red;">Contact Number</td>
					<td><input type='text' name='contact_number' class='form-control' required></td>
				</tr>
				
				<tr>
					<td style="color:red">Address</td>
					<td><textarea name='address' class='form-control'></textarea></td>
				</tr>
			
				
				
				<tr>
					<td style="color:red">Total Bill</td>
						<td><input type='text' name='total_bill' class='form-control'></td>
				</tr>
				<tr>
					<td style="color:red">Amount Paid</td>
						<td><input type='text' name='amount_paid' class='form-control'></td>
				</tr>	
				<tr>
					<td></td>
						<td>
						<button type="submit" name="Create" class="btn btn-primary">
							<span class="glyphicon glyphicon-plus"></span> <a style="color:yellow">Create New Record</a>
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