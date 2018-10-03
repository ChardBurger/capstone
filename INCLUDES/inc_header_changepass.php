
<br><br><br>
   <div class="container" style="width:500px; margin-left: 450px;margin-top:60px">
		<div class="row">
			<div class="panel panel-primary" >
				<div class="panel-body">
					<form method="POST" role="form" >
					 <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>	      
					<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
						<div class="form-group">
							<h2>Change Password</h2><label style="margin-left:210px;margin-top:-35px;position:absolute;"></label>
						</div>
						<div class="form-group">
							<label class="control-label" for="signupName">Old Password</label>
							<input id="signupName" type="password" name="oldpass" maxlength="50" class="form-control" placeholder="Current Password" required >
						</div>
						<div class="form-group">
							<label class="control-label" for="signupName">Password</label>
							<input id="signupName" type="password" name="password"maxlength="50" class="form-control" placeholder="Password" required >
						</div>
						<div class="form-group">
							<label class="control-label" for="signupEmail">Confirm Password</label>
							<input id="signupEmail" type="password" name="password2" maxlength="50" class="form-control" placeholder="Confirm Password" required s>
						</div>
						

						<div class="form-group">
							<button id="signupSubmit" type="submit" name="password_button"class="btn btn-info btn-block">Save changes</button>

		
					</form>
				</div>
			</div>
		</div>
	</div>
