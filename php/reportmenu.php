<?php require_once('connect.php');
	
	session_start();
	include('navbar.php');
	if($_SESSION['loggedin']!=1){
		header('Location: login.php');}
?>

<html>
	<head>
		<title>Reports.php</title>
		<link rel="stylesheet" type="text/css" href="../css/report.css"">
		
	</head>
	<body>
	<h1>Reports</h1>
	<table align="center"  class="reportmenutable">
		<tr>
			<td>Products and Prices according to the Suppliers</td>
			<td><a href="reportt.php"><Button class="reportgobutton">Go</Button></a></td>
		</tr>

		<tr>
			<td>Orders which are done by User</td>
			<td><a href="report2.php"><Button class="reportgobutton">Go</Button></a></td>
		</tr>

		<tr>
			<td>Deatails about the total cost for a user</td>
			<td><a href="report4.php"><Button class="reportgobutton">Go</Button></a></td>
		</tr>

		<tr>
			<td>User details according to the orders</td>
			<td><a href="report5.php"><Button class="reportgobutton">Go</Button></a></td>
		</tr>

		<tr>
			<td>Item details according to the category</td>
			<td><a href="report6.php"><Button class="reportgobutton">Go</Button></a></td>
		</tr>
	</table>
		
	
	<br> <br>
	</body>
</html>