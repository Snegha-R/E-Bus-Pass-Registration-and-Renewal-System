<?php
include('config.php');
if(isset($_POST['submit']))
{
    $name = $_POST['Name'];
    $regno = $_POST['regno'];
    $year = $_POST['year'];
    $Sem = $_POST['Sem'];
    $billno = $_POST['billno'];
    $bp= $_POST['bp'];
    $busno = $_POST['busno'];
    

	$sql = "INSERT INTO `renewal` (Name,regno,year,Sem,billno,bp,busno) VALUES ('$name','$regno','$year','$Sem','$billno','$bp','$busno')";

if ($conn->query($sql) === TRUE) {
    header("Location: studenthome.html");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>