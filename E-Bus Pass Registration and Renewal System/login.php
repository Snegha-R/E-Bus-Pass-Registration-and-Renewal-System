<?php
include('agconfig.php');
if(isset($_POST['submit']))
{
    $name = $_POST['Uname'];
    $mail = $_POST['mail'];
    $mobnum = $_POST['mobnum'];
    $Addr = $_POST['Addr'];
    $pass = $_POST['Pass'];
   
   
	$sql = "INSERT INTO `agreg` (Uname,mail,mobnum,Addr,Pass) VALUES ('$name','$mail','$mobnum','$Addr','$pass')";

    

if ($conn->query($sql) === TRUE) {
    header("Location: aglog.html");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>