	<div class="container" style="width:500px; margin-left: 810px; margin-top:-460px; position:absolute;">
		<div class="row" >
			<div class="panel panel-primary" style="height:auto; background-color:rgba(228, 231, 236, 0.60); border:0px">
				<div class="panel-body">
					<form method="POST" role="form" >
					 <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
					<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
						<div class="form-group" style="margin-top:-20px;">
							<h2>Create account</h2><label style="margin-left:210px; font-style: italic; margin-top:-35px;position:absolute;">(All fields are required)</label>
						</div>
						<div class="form-group">
							<label class="control-label" for="signupName">Name</label>
							<input id="signupName" type="text" name="full_name"maxlength="50" class="form-control" placeholder="name" required >
						</div>
						<div class="form-group">
							<label class="control-label" for="signupEmail">Email</label>
							<input id="signupEmail" type="email" name="email" maxlength="50" class="form-control" placeholder="email" required s>
						</div>
						<div class="form-group">
							<label class="control-label" for="username">Username</label>
							<input  name="username" type="text" maxlength="50" class="form-control" placeholder="username" required >
						</div>
						<div class="form-group">
							<label class="control-label" for="signupPassword">Password<label>(Minimum of 7 characters)</label></label>
							<input id="signupPassword" type="password" name="password" maxlength="25" class="form-control" placeholder="must contain an uppercase, lowercase, and a number" length="40" required >
						</div>
						<div class="form-group">
							<label class="control-label" for="signupPasswordagain">Confirm Password</label>
							<input id="signupPasswordagain" type="password" name="password2" maxlength="25" class="form-control" placeholder="confirm password" required >
						</div>


						<div class="form-group">
							<button id="signupSubmit" type="submit" style="color:white; background-color:#3D577A;" name="register_button"class="btn btn-block">Create your account</button>
					</form>
				</div>
			</div>
		</div>
	</div>
