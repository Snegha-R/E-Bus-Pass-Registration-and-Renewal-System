<?php
include('config.php');
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $password = $_POST['pass'];

	$sql = "select * from reg where regid = '$name'  and password= '$password'";

    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    if($count == 1){
        header('Location: studenthome.html');
        die();
    }
}
else{
	echo "Username Or Password is Wrong";
$conn->close();
}
?>