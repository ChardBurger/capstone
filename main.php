<?php
   session_start();
   if($_SESSION['username1']){
  }
   else{
      header("location: index.php");
   }
   $users = $_SESSION['username1']; //assigns user value

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
<body style="background-image:url(images/logoo2.jpg); background-size:100%" >
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
<?php include 'includes/inc_header_profile1.php'?>
<?php
echo "<p style=\"margin-top:20px; margin-left:570px; font-family:verdana; font-size: 40px; color:black\">WELCOME!";

echo "</p>";?>
</body>
</html>
