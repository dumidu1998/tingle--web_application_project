<?php require_once('connect.php');
	
	session_start();
	include('navbar.php');
	if($_SESSION['loggedin']!=1){
		header('Location: login.php');}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Report2.php</title>
		<link rel="stylesheet" type="text/css" href="../css/report.css">
	</head>
	<body>
		<a href="reportmenu.php"><button class="homebutton">Home</button></a>
		<form method="post" action="report2.php">
		<h1>Orders which are done by User.</h1>
		<table align="center">
			<tr>
				<td>Select the user Id</td>
				<td>
					<select name='user'>
									<?php
									$sql1="SELECT * FROM user";
									echo $sql1;
									$valu=$connection->query($sql1);
									while($data=$valu->fetch_assoc()){
										echo "<option value='".$data['CId']."'>".$data['CId']." - ".$data['username']."</option>";}
									?>
					</select>
				</td>
				<td><input type="submit" value="Find" name="find">
				
				</td> 
			</tr>
		</table>
		</form>

	<table border=1 padding=00px class="tab" align="center">
			<tr bgcolor=#4CAF50 font color= white>
				<td>orderID</td>
				<td>OrderDate</td>
				<td>fname</td>
			</tr>
			<?php
			if (isset($_POST['find'])){
			//$x=$_POST['SID'];
			//$sql2="select iName,iPrice,sFname from item i, supplier s where i.".$_POST['supplier']."= s.".$_POST['supplier'];
			$sql1="select orderID,OrderDate,fname from orders  where CId=".$_POST['user']."";
			//echo $sql1;
			$result2=$connection->query($sql1);
			
			//echo "\n select iName,iPrice,sFname from item i, supplier s where i.SID=s.SID;";/*
			while($row=$result2->fetch_assoc()){
			
		
				echo "<tr>";
				echo "<td>".$row['orderID']."</td>"; 
				echo "<td>".$row['OrderDate']."</td>";
				echo "<td>".$row['fname']."</td>";
				
			echo "</tr>";
			}
		}
		?>
	</table>
</body>
</html>
