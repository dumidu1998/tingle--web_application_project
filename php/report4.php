<?php require_once('connect.php');
	session_start();
	include('navbar.php');
	if($_SESSION['loggedin']!=1){
		header('Location: login.php');}
?>

<html>
	<head>
		<title>Report4.php</title>
		<link rel="stylesheet" type="text/css" href="../css/report.css">
	</head>
	<body>
	<a href="reportmenu.php"><button class="homebutton">Home</button></a>
	<h1>Deatails about the total cost for a user.</h1>
	<table border=1 padding=00px class="tab" align="center">
			<tr bgcolor=#4CAF50 font color= white>
				<td>CId</td>
				<td>total_amount</td>
			</tr>
			<?php
			//if (isset($_POST['find'])){
			//$x=$_POST['SID'];
			//$sql2="select iName,iPrice,sFname from item i, supplier s where i.".$_POST['supplier']."= s.".$_POST['supplier'];
			//$sql1="select iName,iPrice from item  where SID=".$_POST['supplier']."";
			$sql1="select CId,sum(price) as total_amount from orderdetail od, orders o where o.orderId=od.orderId group by CId";
			//echo $sql1;
			$result2=$connection->query($sql1);
			
			//echo "\n select iName,iPrice,sFname from item i, supplier s where i.SID=s.SID;";
			while($row=$result2->fetch_assoc()){
			
		
				echo "<tr>";
				echo "<td>".$row['CId']."</td>"; 
				echo "<td>".$row['total_amount']."</td>";
				//echo "<td>".$row['sFname']."</td>";
				
				echo "</tr>";
			}
			?>
		</table>
		
		<table class="tab" align="center">
			<tr bgcolor=#4CAF50 font color= white>
				<td>CId</td>
				<td>User Name</td>
			</tr>
		<?php
			echo "<h1>Best User</h1>";
			//$sql2="select CId , max(sum(price)) as Maximum from orderdetail od, orders o where o.orderId=od.orderId group by CId";
			//$sql2=" select max(price) from orders";
			
			$sql3="select o.CId, u.username from orderdetail od, orders o, user u where o.orderId=od.orderId and o.CId=u.CId group by CId order BY sum(price) DESC limit 1";
			$result3=$connection->query($sql3);
			while($row=$result3->fetch_assoc()){
				echo "<tr>";	
				echo "<td>".$row['CId']."</td>";
				echo "<td>".$row['username']."</td>";
				echo "</tr>";
			}
		?>
	
	</table>

	</body>
</html>