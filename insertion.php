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
$em = $_POST['email1'];
$mn = $_POST['phnum'];
$p = $_POST['pass1'];
$un = $_POST['username'];

if($p == 0){
	header("Location:Login_page.html");
  exit();
}
$ins = "insert into users VALUES ('$em', '$mn', '$p', '$un')";
// $result = "select * from user";
if ($conn->query($ins) === TRUE) {
  echo "New record created successfully";
  header("Location:Login_page.html");
  exit();
} else {
  echo "Error: " . $ins . "<br>" . $conn->error;
  echo '<script>alert("Username/ Email already exists")</script>';
  header("Location:Login_page.html");
  exit();
}

$conn->close();
?>