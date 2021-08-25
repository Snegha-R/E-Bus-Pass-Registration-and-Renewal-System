
<html>
<head>
    <title>Requests</title>
    <link rel="stylesheet" type="text/css" href="bnewhomestyles.css">

    <style type="text/css">
        body{
            
 margin: 0;
padding: 0;
background: url("A17.jpg");
background-size: cover;
background-position: center;
 font-family: sans-serif;
        }
        .midmenu{

width: 100px;  
height: 100px;
border-radius: 50%;
position: absolute;
top: 05px;
left: calc(50% - 50px);
}
.rightmenu ul a
{
font-family: 'Montserrat', sans-serif;
display: inline-block;
list-style: none;
font-size: 22px;

color: white;
font-weight: bold;
line-height: 110px;
margin-left: 400px;
text-decoration-line: none;
}
        table{
            border-collapse: collapse;
            width: 1000px;
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
        t
    </style>
</head>
<body><div class="bgimage">
<div class="menu">  
<div class="leftmenu">
<h4>E-BUS PASS</h4></div>
<div class="midmenu">
<img src="clgbus logo.png" class="midmenu" >
    </div>
<div class="rightmenu">
<ul>

<a href="adlog.html"> BACK </a>
</ul>
</div>
</div>  
    <form action="r.php" method="post" style="align-content: center">
    <h1 style="text-align: center;color: green;font-weight: bold;"> RENEWAL REQUESTS</h1>
     </div>
    <table>
        <tr>
            <th>Name</th>
            <th>Register Number</th>
            <th>Year</th>
            <th>Semester</th>
            <th>Bill No</th>

            <th>Boarding Point </th>
            <th>Bus NO</th>
        </tr>
        <?php
        $conn =mysqli_connect("localhost","root","","user");
        if($conn-> connect_error){
        die("Connection failed:".$conn-> connect_error);
    }
    $sql ="SELECT Name,regno,year,Sem,billno,bp,busno from renewal";
    $result =$conn-> query($sql);
    if($result-> num_rows > 0){
    while($row =$result-> fetch_assoc()){
    echo "<tr><td>". $row["Name"] ."</td><td>". $row["regno"] ."</td><td>". $row["year"] ."</td><td>". $row["Sem"] ."</td><td>". $row["billno"] ."</td><td>". $row["bp"] ."</td><td>". $row["busno"] ."</td></tr>";
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