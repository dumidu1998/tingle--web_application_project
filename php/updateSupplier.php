<?php require_once('connect.php');
session_start();
include('navbar.php');
if($_SESSION['loggedin']!=1){
    header('Location: login.php');
}
?>
<?php
if(isset($_GET['SID'])){
$sql1 = "SELECT * FROM supplier WHERE SID =".$_GET['SID'];
$result = mysqli_query($connection,$sql1);
$row=mysqli_fetch_assoc($result);
if($result){


}
//echo "Sucessfull";
else{
echo "failed";	
}

}

if(isset($_POST['updateB'])){
	$sql2 = "UPDATE supplier SET sFname ='".$_POST['sFname']."', sLname ='".$_POST['sLname']."', sAddress='".$_POST['sAddress']."', sEmail='".$_POST['sEmail']."', sTele='".$_POST['sTele']."' WHERE SID ='".$_POST['sid']."'";   
$result2 = mysqli_query($connection,$sql2);

$sql3 = "SELECT * FROM supplier WHERE SID ='".$_POST['sid']."'";
$result3 = mysqli_query($connection,$sql3);
$row=mysqli_fetch_assoc($result3);
echo "<script> alert('Updated Sucessfully') </script>";
header("Location: viewSupplier.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/viewsupplier.css">
	<title>updateSupplier</title>
</head>
<body>
	<div class="center"><p><h1>Update Supplier Details</h1></p><br /></div>
	<table align="center">
		<tr>
			<td>SID</td>
			<td>First name</td>
			<td>Last name</td>
			<td>Address</td>
			<td>Email</td>
			<td>Tel</td>

		</tr>
		<form action='updateSupplier.php' method ='POST'>
			<tr>
				<?php echo "<td><input type = 'text' name='sid' required value =".$row['SID']." readonly></td>";
				echo "<td><input type = 'text' name='sFname' required value =".$row['sFname']."></td>";
				echo "<td><input type = 'text' name='sLname' required value =".$row['sLname']."></td>";
				echo "<td><input type = 'text' name='sAddress' required value =".$row['sAddress']." ></td>";
				echo "<td><input type = 'text' name='sEmail' required value =".$row['sEmail']."></td>";
				echo "<td><input type = 'text' name='sTele' required value =".$row['sTele']."></td>";
				?>
			</tr>
			
			<tr>
				<td colspan =1><a href="viewSupplier.php"><button type="button" class="viewbutton">Back</button></a></td>
				<td colspan =3><input type='submit' value="Update" name='updateB' class="viewbutton"></td>
			</tr>
		</form>
	</table>
	
</body>
</html>