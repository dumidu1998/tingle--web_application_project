<?php require_once('connect.php');
	session_start();
	include('navbar.php');
	if($_SESSION['loggedin']!=1){
		header('Location: login.php');}
?>

<html>
	<head>
		<title>Report3.php</title>
		<link rel="stylesheet" type="text/css" href="../css/report.css"">
		
	</head>
	<body>
	<a href="reportmenu.php"><button class="homebutton">Home</button></a>
	<h1>User details according to the orders.</h1>
		<form method="post" action="report5.php">
		<table align="center">
			<tr>
				<td>Select the Order Id or the Date</td>
				<td>
					<select name='orders'>
									<?php
									$sql1="SELECT * FROM orders";
									$valu=$connection->query($sql1);
									while($data=$valu->fetch_assoc()){
										echo "<option value='".$data['OrderID']."'>".$data['OrderID']." - ".$data['OrderDate']."</option>";}
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
				<td>CId</td>
				<td>fname</td>
				<td>lname</td>
				<td>payment</td>
			</tr>
			<?php
			if (isset($_POST['find'])){
			//$x=$_POST['SID'];
			//$sql2="select iName,iPrice,sFname from item i, supplier s where i.".$_POST['supplier']."= s.".$_POST['supplier'];
			//$sql1="select iName,iPrice from item  where SID=".$_POST['supplier']."";
			$sql1="select CId,fname,lname,payment from orders  where OrderID=".$_POST['orders']."";
			//echo $sql1;
			$result2=$connection->query($sql1);
			
			//echo "\n select iName,iPrice,sFname from item i, supplier s where i.SID=s.SID;";/*
			while($row=$result2->fetch_assoc()){
			
		
				echo "<tr>";
				echo "<td>".$row['CId']."</td>"; 
				echo "<td>".$row['fname']."</td>";
				echo "<td>".$row['lname']."</td>";
				echo "<td>".$row['payment']."</td>";
			echo "</tr>";
			}
		}
		?>
	</table>
	</div>
	</body>
</html>