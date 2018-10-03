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

if(isset($_POST['save_button'])){
require('connect.php');

$full_name=$_POST['full_name'];
$username=$_POST['username'];
$email=$_POST['email'];
$userss = $_POST['userss'];



$sql="UPDATE `users` SET `full_name`='$full_name', `username`='$username',`email`='$email'   WHERE `username`='$userss'";
	mysqli_query($db, $sql);



	$smsg="Profile changed succesful";
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
<?php include 'includes/inc_header_profile.php'?>

</body>
</html>
