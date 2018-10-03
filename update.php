<?php
	session_start();
	require('inc_bootstrap.html');
	$db = mysqli_connect("localhost","root","","test") or die('Error connecting to MySQL server.');
?>

<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$query = "SELECT * FROM customers";
		mysqli_query($db,$query)or die('Error querying database.');
		
		$result = mysqli_query($db,$query);
		$row = mysqli_fetch_array($result);
	?>
	
	<?php
		if(isset($_GET['delete_id'])){
			$sql_query="DELETE FROM customers WHERE id=".$_GET['delete_id'];
			@mysqli_query($db,$sql_query);
			header("Location: update2.php");
		}
	?>
	
	<script>
		function delete_id(id){
			if(confirm('Sure to Delete')){
				window.location.href='update2.php?delete_id='+id;
				$_GET['delete_id']=id;
			}
		}
	</script>
	<table	class="table table-hover" id='printTable'>
	
		<tr class="success">
			<th>ID</th>
			<th>FULL NAME</th>
			<th>CONTACT NO</th>
			<th>ADDRESS</th>
			<th>OPERATION</th>
		</tr>
	
		<?php if($result->num_rows > 0){?>
		<?php do{ ;?>	
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['full_name']; ?></td>
			<td><?php echo $row['contact_number']; ?></td>
			<td><?php echo $row['address']; ?></td>
			<td align="left"><a href="javascript:delete_id('<?php echo $row['id'];?>')"><img src="images/remove.png" width="40px" height="40px" align="DELETE"></a></td>
		</tr>
		<?php }while($row = $result->fetch_assoc()); ?>
		<?php }?>
	</table>
	
	<div class="panel-footer text-center">
		<a href="main.php" class="btn btn-default"> Back to Main Page</a>
		
	</div>
	<?php
		$query = "SELECT * FROM customers";
		mysqli_query($db,$query)or die('Error querying database.');
		
		$result = mysqli_query($db,$query);
		$row = mysqli_fetch_array($result);
	?>
	
	
	<?php
	
if ($result = mysqli_query($db, "SELECT id FROM customers ORDER BY id")) {

  
    $row_cnt = mysqli_num_rows($result);

    printf(" %d customers.\n", $row_cnt);


    mysqli_free_result($result);
}

	
	
	
	
	?>
	
	
	
	
	
	
	
	
	
	<?php
		mysqli_close($db);
	?>
</body>
</html>