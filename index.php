<?php  //Start the Session
session_start();
require('connect.php');

if (isset($_POST['username1']) and isset($_POST['password1'])){

$username = $_POST['username1'];
$password = $_POST['password1'];

$query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){
$_SESSION['username1'] = $username;
//set the username in a session. This serves as a global variable

}else{

$fmsg1 = "Invalid Login Credentials.";
}
}


if (isset($_SESSION['username1'])){
header('Location: main.php');

}


?>
<?php

$db=mysqli_connect("localhost","root", "","test");

if(isset($_POST['register_button'])){

	 require('connect.php');
	$full_name=mysql_real_escape_string($_POST['full_name']);
	$username=mysql_real_escape_string($_POST['username']);
	$email=mysql_real_escape_string($_POST['email']);
	$password=mysql_real_escape_string($_POST['password']);
	$password2=mysql_real_escape_string($_POST['password2']);


	if(($password==$password2) &&   (strlen($password)>6) && (strlen($password)<21)  && preg_match('`[A-Z]`',$password)  && preg_match('`[a-z]`',$password)  && preg_match('`[0-9]`',$password )  )

	{

	$sql="INSERT INTO users(id, full_name, username,email, password) VALUES('','$full_name', '$username','$email','$password')";
	mysqli_query($db, $sql);
	$_SESSION['message']="You are now logged in";
	$_SESSION['username']=$username;

	$smsg="User Registration Success";
	}else{$fmsg ="User Registration Failed";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>MASARAP PANG KAMOT NG BAYAG ANG SUKLAY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href="css/hover.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'includes/inc_header_nav.php' ?>
<?php include 'includes/inc_header_background.php';?>
<?php include 'includes/inc_header_register.php' ?>
</body>
</html>
