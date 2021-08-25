<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['name']))
{
	echo "works";
	$sql = "INSERT INTO `signup` (uname, password) VALUES ('".$_POST['name']."', '".$_POST["pass"]."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>