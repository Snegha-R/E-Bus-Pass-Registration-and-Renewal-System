<html>
<head>
	<title>Requests</title>
	<style type="text/css">
		body{
			
 margin: 0;
padding: 0;
background: url("A17.jpg");
background-size: cover;
background-position: center;
 font-family: sans-serif;
		}
		table{
			border-collapse: collapse;
			width: 1250px;
			color: black;
			font-family:sans-serif;
			font-size: 25px;
			text-align: left;
			margin: auto;
			table-layout: fixed;
			text-align: center;
			margin-top: 45px;

		}
		table,td,th{
			background-color: white;
			color: black;
			border-collapse: collapse;
			border: 1px dotted black;
			padding: 15px;
			font-size: 13px;

		}
		.header {
  padding: 20px;
  text-align: center;
  background: green;
  color: black;
}

/* Increase the font size of the h1 element */
.header h1 {
  font-size: 30px;
}
		th{
			color: white;
			background: green;
			padding: 30px;
			text-transform: uppercase;
		}
		
	</style>
</head>
<body>
	<form action="r.php" method="post" style="align-content: center">
    <div class="header">
    <h1><h1 style="text-align: center;color: white;font-weight: bold;"> REGISTERED STUDENTS </h1></h1>
     </div>
	<table>
		<tr>
			<th>Name</th>
			<th>Register Number</th>
			<th>Department</th>
			<th>Year</th>
			<th>Section</th>
			<th>Gender</th>
<th>Address</th>
			<th>Boarding Point </th>
			<th>Mail Id</th>
			<th>Mobile</th>
			
		</tr>
        <?php
		$conn =mysqli_connect("localhost","root","","user");
		if($conn-> connect_error){
		die("Connection failed:".$conn-> connect_error);
	}
	$sql ="SELECT name,regid,dept,year,sec,gender,address,boarding,mail,mobile,password from reg";
	$result =$conn-> query($sql);
	if($result-> num_rows > 0){
	while($row =$result-> fetch_assoc()){
	echo "<tr><td>". $row["name"] ."</td><td>". $row["regid"] ."</td><td>". $row["dept"] ."</td><td>". $row["year"] ."</td><td>". $row["sec"] ."</td><td>". $row["gender"] ."</td><td>". $row["address"] ."</td><td>". $row["boarding"] ."</td><td>". $row["mail"] ."</td><td>". $row["mobile"] ."</td></tr>";
}
echo "</table>";
	}
	else{
	echo "0 result";
}
$conn-> close();

	?>
	</table>
</body>
</html>