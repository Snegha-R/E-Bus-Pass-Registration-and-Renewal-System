<?php
include('config.php');
if(isset($_POST['submit']))
{
    $regid = $_POST['regid'];
     $password = $_POST['password'];

    
    
    

    if(!empty($password)){
        $sql = "update reg set password = '$password' where regid = '$regid'";
        mysqli_query($conn,$sql);
    }

    
    header('Location: index.html');
}
else{
$conn->close();
}
?>