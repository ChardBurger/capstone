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

if(isset($_POST['update'])){
require('connect.php');

$fname=$_POST['name'];
$conum=$_POST['contact_number'];
$add=$_POST['address'];
$tbill = $_POST['total_bill'];
$amtpaid=$_POST['amount_paid'];



$sql="UPDATE `customers` SET `contact_number`='$conum',`address`='$add' , `total_bill`='$tbill', `amount_paid`='$amtpaid'  WHERE `full_name`='$fname'";
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
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!--  style="background-image:url(images/background11.jpg); background-size: 100% 700px;background-attachment: fixed"-->
</head>
<body style="background-image:url(images/logoo8.jpg); background-size:100%" >
<?php include 'includes/inc_header_home.php'?>

<?php
$db=mysqli_connect("localhost","root","","test")
or die('Error connecting to MySQL server.');
$query = "SELECT * FROM users where username='$users'";

mysqli_query($db,$query) or die ("Error querying database");
require('connect.php');
$result = mysqli_query($db,$query);
$row = mysqli_fetch_array($result);


mysqli_close($db);
?>
<?php include 'includes/inc_header_edit.php'?>
</body>
</html>
