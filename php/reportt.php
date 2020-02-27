<?php require_once('connect.php');
	
	session_start();
	include('navbar.php');
	if($_SESSION['loggedin']!=1){
		header('Location: login.php');}
?>

<html>
	<head>
		<title>Report1.php</title>
		<link rel="stylesheet" type="text/css" href="../css/report.css"">
		
	</head>
	<body>
	<a href="reportmenu.php"><button class="homebutton">Home</button></a>
	<h1>Products and Prices according to the Suppliers.</h1>
		<form method="post" action="reportt.php">
		<table align="center">
			<tr>
				<td>Select the Supplier Id</td>
				<td>
					<select name='supplier'>
									<?php
									$sql1="SELECT * FROM supplier";
									$valu=$connection->query($sql1);
									while($data=$valu->fetch_assoc()){
										echo "<option value='".$data['SID']."'>".$data['SID']." - ".$data['sFname']."</option>";}
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
				<td>iName</td>
				<td>iPrice</td>
			</tr>
			<?php
			if (isset($_POST['find'])){
			//$x=$_POST['SID'];
			//$sql2="select iName,iPrice,sFname from item i, supplier s where i.".$_POST['supplier']."= s.".$_POST['supplier'];
			$sql1="select iName,iPrice from item  where SID=".$_POST['supplier']."";
			//echo $sql1;
			$result2=$connection->query($sql1);
			
			//echo "\n select iName,iPrice,sFname from item i, supplier s where i.SID=s.SID;";/*
			while($row=$result2->fetch_assoc()){
			
		
				echo "<tr>";
				echo "<td>".$row['iName']."</td>"; 
				echo "<td>".$row['iPrice']."</td>";
				//echo "<td>".$row['sFname']."</td>";
				
			echo "</tr>";
			}
		}
		?>
	</table>
	</div>
	<br> <br>
	</body>
</html>