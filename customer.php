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
if(isset($_POST['Create'])){ //check if form was submitted
 // session_start();
//if (isset($_POST['name']))
$connection = mysqli_connect('localhost','', '') or die(mysql_error());
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'test');

if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}    
if (isset($_POST['name']))
{  
  $cname=$_POST['name'];
  $cnumber=$_POST['contact_number'];
  $caddress=$_POST['address'];
  $cbill=$_POST['total_bill'];
  $cpaid=$_POST['amount_paid'];
 
  
  $query = "INSERT INTO `customers` (id, full_name,contact_number,address, total_bill, amount_paid) VALUES (' ','$cname','$cnumber','$caddress', '$cbill','$cpaid')";
   
  $result = mysqli_query($connection, $query);
  if($result){
  echo "<script type=text/javascript> alert('Record Created Successfully!')</script>";
  }else{
    echo "<script type=text/javascript> alert('Failed to Save!')</script>";
  }
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
	<link rel="stylesheet" href="css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!--  style="background-image:url(images/background11.jpg); background-size: 100% 700px;background-attachment: fixed"-->
</head>
<body style="background-image:url(images/logoo8.jpg); background-size:100%" >
<?php include 'includes/inc_header_home.php'?>

<?php include 'includes/inc_header_addcustomer.php'?>
</body>
</html>
