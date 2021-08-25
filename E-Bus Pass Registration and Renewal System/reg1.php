<?php
include('config1.php');
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
     $adminid = $_POST['adminid'];
    $des = $_POST['des'];
    $mail = $_POST['mail'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
   

	$sql = "INSERT INTO `reg1` (name,adminid,des,mail,mobile,password) VALUES ('$name','$adminid','$des','$mail','$mobile','$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: n1login.html");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>