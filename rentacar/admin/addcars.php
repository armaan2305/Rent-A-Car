<?php
include('adminheader.php');
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "rentacar");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['carname']);
    $car_type=mysqli_real_escape_string($db, $_POST['cartype']);
    $car_cost=mysqli_real_escape_string($db, $_POST['cost']);
    $car_seats=mysqli_real_escape_string($db, $_POST['capacity']);

  	// image file directory
  	$target = "images/vehicleimages/".basename($image);

  	$sql = "INSERT INTO cars (image, car_name, car_type, cost, capacity) VALUES ('$image', '$image_text','$car_type','$car_cost','$car_seats')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM cars");
?>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

<!DOCTYPE html>
<html>
<head>
<title>Add Cars</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
  <h2 style="text-align: center;">Add Cars</h2>
<div id="content">
  
  <form method="POST" action="addcars.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="carname" 
      	placeholder="Add car name" ></textarea>
  	</div>
    <div>
      <textarea 
        id="text" 
        cols="40" 
        rows="4" 
        name="cartype" 
        placeholder="Add car type"></textarea>
    </div>
        <div>
      <textarea 
        id="text" 
        cols="40" 
        rows="4" 
        name="cost" 
        placeholder="Add cost" ></textarea>
    </div>
           <div>
      <textarea 
        id="text" 
        cols="40" 
        rows="4" 
        name="capacity" 
        placeholder="Add Seats" ></textarea>
    </div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>

    <!--SCRIPT-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>