<?php
include('adminheader.php');
// Create database connection
$db = mysqli_connect("localhost", "root", "", "rentacar");

$result = mysqli_query($db, "SELECT * FROM cars");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Admin Dashboard</title>
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
    height: 190px;
    }
    #newcar{
    float:right;
    }
    
    </style>
  </head>
  <body>
    <h1 class=" text-center p-2">Admin Dashboard</h1>
    <div class="row justify-content-center">
      <div class="col-12 col-sm-6 p-4 m-4">
        
        
        <div class="card">
          <a href="addcars.php">
          <button class="btn btn-primary" id="newcar" type="button" >Add New Cars</button></a>
          
          <h4 class="text-center">Available cars</h4>
          <?php
          while ($row = mysqli_fetch_array($result)) {
          echo "<div id='img_div'>";
            echo "<img src='images/vehicleimages/".$row['image']."' >";
            echo "<h6>".$row['car_name']."</h6>";
            echo"<P>".$row['car_type']."</p>";
            echo  "<p>".$row['cost']."</p>";
            echo  "<p>".$row['capacity']."</p>";
            echo '<td><a class="text-white" href="index.php?delete='.$row['car_id'].'">
            <button class="btn btn-danger">Delete</button></a></td>';
          echo "</div>";
          }
          ?>