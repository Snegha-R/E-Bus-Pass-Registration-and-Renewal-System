<?php
include('config.php');
if(isset($_POST['submit']))
{
    $regid = $_POST['regid'];
    $dept = $_POST['dept'];
    $year = $_POST['year'];
    $sec = $_POST['sec'];
    $address = $_POST['address'];
    $boarding = $_POST['boarding'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    if(!empty($address)){
        $sql = "update reg set address = '$address' where regid = '$regid'";
        mysqli_query($conn,$sql);
    }

    if(!empty($dept)){
        $sql = "update reg set dept = '$dept' where regid = '$regid'";
        mysqli_query($conn,$sql);
    }

    if(!empty($year)){
        $sql = "update reg set year = '$year' where regid = '$regid'";
        mysqli_query($conn,$sql);
    }

    if(!empty($sec)){
        $sql = "update reg set sec = '$sec' where regid = '$regid'";
        mysqli_query($conn,$sql);
    }

    if(!empty($mobile)){
        $sql = "update reg set mobile = '$mobile' where regid = '$regid'";
        mysqli_query($conn,$sql);
    }

    if(!empty($password)){
        $sql = "update reg set password = '$password' where regid = '$regid'";
        mysqli_query($conn,$sql);
    }

    if(!empty($boarding)){
        $sql = "update reg set boarding = '$boarding' where regid = '$regid'";
        mysqli_query($conn,$sql);
    }

    header('Location: studenthome.html');
}
else{
$conn->close();
}
?>