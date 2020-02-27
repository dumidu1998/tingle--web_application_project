<?php require_once('connect.php');		
	session_start();
	include('navbar.php');
	if($_SESSION['loggedin']!=1){
		header('Location: login.php');}
?>

<html>
	<head>
		<title>Report5.php</title>
		<link rel="stylesheet" type="text/css" href="../css/report.css"">
		
	</head>
	<body>
	<a href="reportmenu.php"><button class="homebutton">Home</button></a>
	<h1>Item details according to the category.</h1>
		<form method="post" action="report6.php">
		<table align="center">
			<tr>
				<td>Select the Category</td>
				<td>
					<select name='category'>
									<?php
									$sql1="SELECT * FROM category";
									$valu=$connection->query($sql1);
									while($data=$valu->fetch_assoc()){
										echo "<option value='".$data['catId']."'>".$data['catId']." - ".$data['catName']."</option>";}
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
				<td>itemId</td>
				<td>iName</td>
				<td>iPrice</td>
			</tr>
			<?php
			if (isset($_POST['find'])){
			//$x=$_POST['SID'];
			//$sql2="select iName,iPrice,sFname from item i, supplier s where i.".$_POST['supplier']."= s.".$_POST['supplier'];
			//$sql1="select iName,iPrice from item  where SID=".$_POST['supplier']."";
			$sql1="select itemId, iName, iPrice from item where iCategory=".$_POST['category']."";
			//echo $sql1;
			$result2=$connection->query($sql1);
			
			//echo "\n select iName,iPrice,sFname from item i, supplier s where i.SID=s.SID;";/*
			while($row=$result2->fetch_assoc()){
			
		
				echo "<tr>";
				echo "<td>".$row['itemId']."</td>"; 
				echo "<td>".$row['iName']."</td>";
				echo "<td>".$row['iPrice']."</td>";
			echo "</tr>";
			}
		}
		?>
	</table>
	</div>
	</body>
</html>