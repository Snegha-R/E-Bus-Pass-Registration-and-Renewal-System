<?php
include('config1.php');
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $password = $_POST['pass'];

	$sql = "select * from reg1 where adminid = '$name'  and password= '$password'";

    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    if($count == 1){
        header('Location: adlog.html');
        die();
    }
}
else{
$conn->close();
}
?>