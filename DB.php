<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page showing the tables</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
</head>
<style>
	*{
		font-family: 'PT Sans', sans-serif;

	}
	body{
		background-image: url(travel.jpg);
		background-attachment: fixed;
		background-size: cover;
		background-position: center;

	}
	table{
		width: 60%;
		text-align: center;
		padding: 20px 10px;
		margin-left: auto;
		margin-top: 120px;
		margin-right: auto;
		margin-bottom: 80px;
		color:white;
		background-color: black;
    opacity: 0.5;
    font-style: bold;
	}
	table,th,td{
		border: 1px dashed yellow;
	}
	tr:hover {background-color: blue;}
</style>
<body>
	<table align="center">
		<tr style="background-color: red">
			<th>Name</th>
			<th>Fare</th>
			<th>Status</th>
		</tr>
	
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "tours & travels";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);
// Check connection
if (!$conn) {
  die("Connection failed". mysqli_connect_error());
}
$cl = $_POST['cls'];
if($cl=='Resort' || $cl=='Business_hot' || $cl=='Suite' || $cl=='Casino'){
	$brd = $_POST['board'];
	$result = "select * from hotels";
	$resul = "select * from hotel_class";
	$x = $conn->query($result);
	$y = $conn->query($resul);
	$far = 0;
	while($coll = $y->fetch_assoc())  
	{
		if($cl==$coll['class_na']){
			$far = $coll['fare'];
		}
	}
	while($row = $x->fetch_assoc())  
	{
		if($brd==$row['place']){
			echo "<tr> <td>",$row['hotel_na'],"</td><td>",$far,"</td><td><button style='background-color:green; color:black; font-size:1.3em;' value='Book Now'/>Book Now</button></td></tr>";
		}
		// <input type='submit' style='background-color:green; color:black; font-size:1.3em;' value='Book Now'/>
	}
}
if($cl=='First Class' || $cl=='Economy' || $cl=='Business' || $cl=='Premium Economy'){
	$brd = $_POST['board'];
	$des = $_POST['dest'];
	$result = "select * from planes";
	$resul = "select * from class";
	$x = $conn->query($result);
	$y = $conn->query($resul);
	$far = 0;
	while($coll = $y->fetch_assoc())  
	{
		if($cl==$coll['class_na']){
			$far = $coll['fare'];
		}
	}
	while($row = $x->fetch_assoc())  
	{
		if($brd==$row['board'] && $des==$row['destin']){
		 // 	$pnm = $row['plname'];
			// echo $pnm;
			echo "<tr> <td>",$row['plname'],"</td><td>",$far,"</td><td><button style='background-color:green; color:black; font-size:1.3em;' value='Book Now'/>Book Now</button></td></tr>";
		}
		// <input type='submit' style='background-color:green; color:black; font-size:1.3em;' value='Book Now'/>
	}
}
if($cl=='Double Decker' || $cl=='Seater' || $cl=='Sleeper' || $cl=='Coach'){
	$brd = $_POST['board'];
	$des = $_POST['dest'];
	$result = "select * from buses";
	$resul = "select * from bus_class";
	$x = $conn->query($result);
	$y = $conn->query($resul);
	$far = 0;
	while($coll = $y->fetch_assoc())  
	{
		if($cl==$coll['class_na']){
			$far = $coll['fare'];
		}
	}
	while($row = $x->fetch_assoc())  
	{
		if($brd==$row['board'] && $des==$row['destin']){
		 // 	$pnm = $row['plname'];
			// echo $pnm;
			echo "<tr> <td>",$row['bus_na'],"</td><td>",$far,"</td><td><button style='background-color:green; color:black; font-size:1.3em;' value='Book Now'/>Book Now</button></td></tr>";
		}
		// <input type='submit' style='background-color:green; color:black; font-size:1.3em;' value='Book Now'/>
	}
}
if($cl=='Ac Three tier' || $cl=='Pre Eco' || $cl=='Eco' || $cl=='Busi'){
	$brd = $_POST['board'];
	$des = $_POST['dest'];
	$result = "select * from train";
	$resul = "select * from train_class";
	$x = $conn->query($result);
	$y = $conn->query($resul);
	$far = 0;
	while($coll = $y->fetch_assoc())  
	{
		if($cl==$coll['class_na']){
			$far = $coll['fare'];
		}
	}
	while($row = $x->fetch_assoc())  
	{
		if($brd==$row['board'] && $des==$row['destin']){
			echo "<tr> <td>",$row['train_na'],"</td><td>",$far,"</td><td><button style='background-color:green; color:black; font-size:1.3em;' value='Book Now'/>Book Now</button></td></tr>";
		}
		// <input type='submit' style='background-color:green; color:black; font-size:1.3em;' value='Book Now'/>
	}
}
?>

</table>
</body>
</html>