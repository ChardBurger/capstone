<nav class="navbar navbar-inverse bg-primary navbar navbar-fixed-top" style="background-color: #3D577A" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <a class="navbar-brand" href="index.php"><img src="IMAGES/ddd.png" width="44px" height="44px" style="margin-top: -12px;" ></a>
    <a class="navbar-brand hvr-grow" href="index.php" style="color:677C97;">HOME</a>
	  <a class="navbar-brand hvr-grow" href="aboutus.php"style="color:white; position:static;">ABOUT</a>
	  <div style="position:absolute; margin-left:570px" ><?php if(isset($fmsg1)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg1; ?> </div><?php } ?></div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav navbar-right">


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <form id="signin" class="navbar-form navbar-right" role="form"style="margin-right:10px" method="post" >

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="email" type="text" class="form-control" name="username1" value="" placeholder="Username">
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password1" value="" placeholder="Password">
                  </div>


                        <button type="submit" style="color:white; background-color:#8F2831 ;" class="btn" name="login_button">Login</button>
                   </form>

    </div>
      </ul>
    </div>
  </div>
</nav>
