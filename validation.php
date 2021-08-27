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
$a = $_POST['email'];
$p = $_POST['pass'];
$result = "select * from users";
$x = $conn->query($result);
$f = 0;
$uu = 0;
while($row = $x->fetch_assoc()) {
	$us = $row["email"];
	if($a==$us){
		$uu = 1;
		$psw=$row["password"];
    $unam = $row["username"];
    $pn = $row["phone_number"];
	  if($psw==$p){
		$f=1;
		} 
		else if($x!=$p){
		$f=0;
		}                
	  else{
		$f=0;
		}
		session_start();
		$_SESSION["una"] = $unam;
		$_SESSION["mail"] = $us;
		$_SESSION["mnum"] = $pn;
		if($f==1){
			header("Location:mp.html");
			exit();
		}
		if($f==0){
			header("Location:Login_page.html");
			exit();
		} 
	}  
}
if($uu==0){
	header("Location:Login_page.html");
	exit();
}
?>
<!-- <!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<script>
			function db()
			{
			var usrname=<?php echo $unam?>;                 
			// document.getElementById("Tuition Fee").value

			var ema=
			<?php echo $us?>
			;
// document.getElementById("Hostal Fee").value
			var phonum=<?php echo $pn?>;
// parseInt(document.getElementById("CRT Fee").value)
			// var messfee=parseInt(document.getElementById("Mess Fee").value);

			// var iden=parseInt(document.getElementById("ID").value);

			// var total=tuifee+hstlfee+crtfee+messfee+iden;

			var usname,emai,pho;
			// window.alert('Hello');

			sessionStorage.setItem('usname',usrname);
			sessionStorage.setItem('emai',ema);
			sessionStorage.setItem('pho',phonum); 
			}
			</script>
	</head>
	<body>
	
	</body>
	</html> -->