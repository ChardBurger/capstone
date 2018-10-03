<?php
$connection = mysqli_connect('localhost','', '') or die(mysql_error());
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'test');
?>
