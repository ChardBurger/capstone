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
  <title>ABOUT US</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main_home.css">
  <link href="css/round-about.css" rel="stylesheet">
  <link href="css/hover.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body style="background-image:url(images/background7.jpg); background-size: 100% 700px;background-attachment: fixed">

<?php include 'includes/inc_header_home.php' ?>
<?php include  'includes/inc_header_about.php'?>




</body>
</html>
