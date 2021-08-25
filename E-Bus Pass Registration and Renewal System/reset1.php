<?php
	include "agconfig.php";
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit profile</title>
	<style type="text/css">
		.form-control
		{
			width:250px;
			height: 38px;
		}
		.form1
		{
			margin:0 540px;
		}
		label
		{
			color: white;
		}

	</style>
</head>
<body style="background-color: grey;">

	<h2 style="text-align: center;color: #fff;">Edit Information</h2>
	<?php
		session_start();
		
	?>

	<div class="profile_info" style="text-align: center;">
		<span style="color: white;">Welcome,</span>	
		<h4 style="color: white;"><?php echo $_SESSION['Uname']; ?></h4>
	</div><br><br>
	
	<div class="form1">
		<form action="" method="post" enctype="multipart/form-data">

		

		<label><h4><b>Name: </b></h4></label>
		<input class="form-control" type="text" name="Uname" >

		<label><h4><b>Mail</b></h4></label>
		<input class="form-control" type="text" name="mail" >

		<label><h4><b>Mobile Number</b></h4></label>
		<input class="form-control" type="text" name="mobnum" >

		<label><h4><b>Password</b></h4></label>
		<input class="form-control" type="text" name="Pass" >

		<label><h4><b>Address</b></h4></label>
		<input class="form-control" type="text" name="Addr" >

		

		<br>
		<div style="padding-left: 100px;">
			<button class="btn btn-default" type="submit" name="submit">Update</button></div>
	</form>
</div>
	<?php 
		if(isset($_POST['submit']))
		{
			move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);

			$first=$_POST['Uname'];
			$last=$_POST['mail'];
			$username=$_POST['mobnum'];
			$password=$_POST['Pass'];
			$email=$_POST['Addr'];
			$pic=$_FILES['file']['name'];

			$sql1= "UPDATE agreg SET pic='$pic', Uname='$first', mail='$last', mobnum='$username', Pass='$password', Addr='$email'WHERE Uname='".$_SESSION['Uname']."';";

			if(mysqli_query($conn,$sql1))
			{
				?>
					<script type="text/javascript">
						alert("Saved Successfully.");
						window.location="profile.php";
					</script>
				<?php
			}
		}
 	?>
</body>
</html>