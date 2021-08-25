<html>
<head>
<title>Upload Image</title>
<style>
body{
  background-color:LavenderBlush;
}
input{
  width:50%;
  height:5%;
  border:1px;
  background-color:maroon;
  
  border-radius:05px;
  padding: 8px 15px 8px 15px;
  margin:10px 0px 15px 0px;
  box-shadow:1px 1px 2px 1px grey;
  font-weight:bold;
}

</style>
</head>
<body>
<center>
  <h1>Upload Image </h1>
  <form action="" method="POST" enctype="multipart/form-data">
  <label> Choose art</label><br>
  <input type="file" name="image" style="font-weight:bold; color:white"id="image"/><br>

  <label> Choose category</label><br>
  <input type="text" name="category" style="font-weight:bold; color:white"placeholder="Enter Category"/><br>

  <label> Enter description</label><br>
  <input type="text" name="description" style="font-weight:bold; color:white" placeholder="Enter Description"/><br>

  <label> Enter dimension</label><br>
  <input type="integer" name="dimension" style="font-weight:bold; color:white"placeholder="Enter Dimension"/><br>

  <label> Enter price</label><br>
  <input type="integer" name="price" style="font-weight:bold; color:white" placeholder="Enter Price"/><br>

 <input type="submit" name="submit" style="font-weight:bold; color:white" value="Upload"/><br>



  </form>
</center>
</body>
</html>

<?php
include('dbconfig.php');

if(isset($_POST['submit']))
{
	$file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	$category=$_POST['category'];
	$description=$_POST['description'];
	$dimension=$_POST['dimension'];
	$price=$_POST['price'];

    $sql="INSERT INTO `upload`(image,category,description,dimension,price) VALUES('$file','$category','$description','$dimension','$price')";
    
if ($conn->query($sql) === TRUE){
    	echo '<script type="text/javascript"> alert("Image Uploaded")</script> ';
 
    }

   else{
   	echo '<script type="text/javascript"> alert("Image Not Uploaded")</script> ';
   }
}

?>