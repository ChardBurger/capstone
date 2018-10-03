<?php
   session_start();
   if($_SESSION['username1']){
  }
   else{
      header("location: index.php");
   }
   $users = $_SESSION['username1']; //assigns user value

?>
<?php
$db=mysqli_connect("localhost","root", "","test");
if(isset($_POST['password_button'])){

	 require('connect.php');
$oldpass =$_POST['oldpass'];
$newpass= $_POST['password'];
$newpass2= $_POST['password2'];
$id =$users;


	if($newpass==$newpass2 &&   (strlen($newpass)>6) && (strlen($newpass)<21)  && preg_match('`[A-Z]`',$newpass)  && preg_match('`[a-z]`',$newpass)  && preg_match('`[0-9]`',$newpass ) ){

	$sql="UPDATE `users` SET `password`='$newpass' WHERE `password`='$oldpass'";
	mysqli_query($db, $sql);
	$_SESSION['message']="Changed Successful";


	$smsg="Password changed succesful";

	}else{
		$fmsg="Password failed";
	}



}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Main</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main_home.css">
  <link href="css/hover.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!--  style="background-image:url(images/background11.jpg); background-size: 100% 700px;background-attachment: fixed"-->
</head>
<body style="background-image:url(images/logoo2.jpg); background-size:100%" >
<?php include 'includes/inc_header_home.php'?>
<?php include 'includes/inc_header_changepass.php'?>

</body>
</html>
