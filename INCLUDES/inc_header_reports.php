<?php
require('inc_bootstrap.html');
$db=mysqli_connect("localhost","","","test")
or die('Error connecting to MySQL server.');
?>
<html>
<head>
</head>
<body>
<?php

	
if ($result = mysqli_query($db, "SELECT id FROM customers ORDER BY id")) {

  
    $row_cnt = mysqli_num_rows($result);

    printf(" %d customer/s.\n", $row_cnt);


    mysqli_free_result($result);
}

	
	
	
	
	?>

<?php
$query="SELECT * FROM customers";
mysqli_query($db,$query) or die ("Error querying database");

$result= mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
?>
<table class ="table table-hover " id='printTable'>
<tr class = "danger">
<th>ID</th>
<th>CUSTOMER NAMES</th>
<th>CONTACT</th>
<th>ADDRESS</th>

<th>TOTAL BILL</th>
<th>AMOUNT PAID</th>

<th>BALANCE</th>
</tr>

<?php
$total_amtpd=0;
$total_balance=0;
?>

<?php do {
	echo "<tr>";
	echo "<td>". $row['id'] . "</td>";

	echo "<td>". $row['full_name'] . "</td>";

	echo "<td>". $row['contact_number'] . "</td>";

	echo "<td>". $row['address'] . "</td>";



	echo "<td>". $row['total_bill'] . "</td>";

	echo "<td>". $row['amount_paid'] . "</td>";

	
	
	$balance=$row['total_bill'] - $row['amount_paid'];
	
	$total_amtpd = $total_amtpd + $row['amount_paid'];
	
	$total_balance = $total_balance+ $balance;
	
	echo "<td>". $balance. "</td>";
	
}  while($row=$result->fetch_assoc())


?>
</table>

<p>Total Amount Paid: <?php echo $total_amtpd; ?>
<p>Total Balances: <?php echo $total_balance; ?>
<p>Prepared by:<?php

echo $users;
?></p>

</br>
<button onclick="javascript:window.print()">Print Report</button>
<button><a href="main.php">Back to Main Page</a></button>


</body>
</html>
