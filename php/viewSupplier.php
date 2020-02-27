<?php require_once('connect.php'); 
	session_start();
	include('navbar.php');
	if($_SESSION['loggedin']!=1){
		header('Location: login.php');
	}	
?>

<!DOCTYPE html>
<html>
	<?php
		$sql = "SELECT * FROM supplier ORDER bY SID";
		mysqli_query($connection, $sql);
		$result = mysqli_query($connection,$sql);

		if($result){
			//echo "Sucessfull";
		}else{
			echo"failed";	
		}
	?>
	<head>
		<title>View Supplier</title>
		<link rel="stylesheet" type="text/css" href="../css/viewsupplier.css">
	</head>
	<body>
		<br><a href="addSupplier.php"><button type="button" class="addbutton">Add</button></a>		
		<div class="loginbox">
			<div class="center">
			<p><h1>List of Suppliers</h1></p>
				<table border=1  >
					<tr bgcolor=aqua >
						<td>SID</td>
						<td>First name</td>
						<td>Last name</td>
						<td>Address</td>
						<td>Email</td>
						<td>Tel Number</td>
						<td>Update</td>
						<td>Delete</td>
					</tr>
					<?php
						while($row=mysqli_fetch_assoc($result)){
					?>					
						<tr>
							<td><?php echo $row['SID'] ?></td>
							<td><?php echo $row['sFname'] ?></td>
							<td><?php echo $row['sLname'] ?></td>
							<td><?php echo $row['sAddress'] ?></td>
							<td><?php echo $row['sEmail'] ?></td>
							<td><?php echo $row['sTele'] ?></td>
							<?php echo "<td><a href ='updateSupplier.php?SID=".$row['SID']."' > update </a> </td>" ?>
							<?php echo "<td><a href ='deleteSupplier.php?SID=".$row['SID']."' > delete </a> </td>" ?>
						</tr>	
					<?php
						}
					?>
				</table>			
			</div>
		</div>
	</body>
</html>

