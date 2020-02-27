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
		$sql = "SELECT * FROM item";
		mysqli_query($connection, $sql);
		$result = mysqli_query($connection,$sql);

		if($result){
			//echo "Sucessfull";
		}else{	
			echo"failed";	
			}
		?>
	<head>	
		<title>viewproduct</title>
		<link rel="stylesheet" type="text/css" href="../css/viewproduct.css">
	</head>
	<body>
		<a href="addproduct.php"><button type="button" class="addbutton">Add</button></a>
		<div class="loginbox">
			<div class="center">
				<h1>Products</h1>
				<table border=1 padding=00px>
					<tr bgcolor=aqua font color= white>
						<td>itemId</td>
						<td>Name</td>
						<td>Supplier ID</td>
						<td>Category</td>
						<td>Subcategory</td>
						<td>Description</td>
						<td>Price</td>
						<td>Update</td>
						<td>Delete</td>
					</tr>
					<?php
					while($row=mysqli_fetch_assoc($result)){
						?>
						<tr>
						<td><?php echo $row['itemId'] ?></td>
						<td><?php echo $row['iName'] ?></td>
						<td><?php echo $row['SID'] ?></td>
						<td><?php echo $row['iCategory'] ?></td>
						<td><?php echo $row['iSubcategory'] ?></td>
						<td><?php echo $row['description'] ?></td>
						<td><?php echo $row['iPrice'] ?></td>
						<?php echo "<td><a href =updateproduct.php?itemId=".$row['itemId']."> update </a> </td>"?>
						<?php echo "<td><a href =deleteproduct.php?itemId=".$row['itemId']."> delete </a> </td>"?>
					</tr>
					<?php
					}
					?>	
				</table>
				<div class="center">
					<br />
				</div>
			</div>
		<div>
	</body>
</html>

