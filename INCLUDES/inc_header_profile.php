
<br><br><br>
   <div class="container" style="width:500px; margin-left: 450px;margin-top:60px">
		<div class="row">
			<div class="panel panel-primary" >
				<div class="panel-body">
					<form method="POST" role="form" >
					 <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>	      
					<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
						<div class="form-group">
							<h2>Edit Profile</h2><label style="margin-left:210px;margin-top:-35px;position:absolute;"></label>
						</div>
						<div class="form-group">
							<input id="signupName" type="hidden" name="userss" maxlength="50" value="<?php echo $users; ?>" class="form-control" placeholder="name" required >
						</div>
						<div class="form-group">
							<label class="control-label" for="signupName">Name</label>
							<input id="signupName" type="text" name="full_name" maxlength="50" class="form-control" placeholder="name" required >
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
							<button id="signupSubmit" type="submit" name="save_button"class="btn btn-info btn-block">Save changes</button>

		
					</form>
				</div>
			</div>
		</div>
	</div>
