<?php
include('header.php');
include('dbconnect/dbconnect.php');
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Rent-a-Car</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
</head>

<body>

  <!-- Navbar -->
  
  <!-- Navbar -->
<?php


  $con = mysqli_connect('localhost','root','','rentacar');
  mysqli_select_db($con,'rentacar');
  $id=$_GET['id'];



  $query = " SELECT * FROM `cars` WHERE car_id='$id' ";

 
$queryfire = mysqli_query($con, $query);
  $num = mysqli_num_rows($queryfire);
  $product = mysqli_fetch_array($queryfire);

    

            



      ?>
<h1 class="text-center font-weight-bold">Book Now</h1>
  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <img src="images/vehicleimages/<?php echo $product['image']; ?>" class="img-fluid" alt="car">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">

            <div class="mb-3">
              <a href="">
                <span class="badge blue mr-1">New</span>
              </a>
              <a href="">
                <span class="badge red mr-1">Bestseller</span>
              </a>
            </div>

            <p class="lead">
              <span class="mr-1">
                &#8377; <?php echo $product['cost'];  ?>/Day 
              </span>
              <span>Seats:<?php echo $product['capacity'];  ?></span>
            </p>

            <p class="lead font-weight-bold"><?php echo
           $product['car_name']; ?></p>

            <p>Type: <?php echo $product['car_type'];  ?> </p>



          </div>
          <aside  class="col-md-5">
      
        
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i aria-hidden="true"></i>Book Now</h5>
          </div>
          <form id="booking-form" class="form"  method="post">
             <div class="form-group">
              <input type="text" class="form-control" name="fullname" placeholder="Full name" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="fromdate" placeholder="From Date(dd/mm/yyyy)" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="todate" placeholder="To Date(dd/mm/yyyy)" required>
            </div>
            <div class="form-group">
              <textarea rows="4" class="form-control" name="message" placeholder="message" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary"  name="bookcar" value="Book Now"> Book now</button>
              </div>

          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr>
   

      <!--Grid row-->
      <div class="row d-flex justify-content-center wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 text-center">

          <h4 class="my-4 h4">Additional information</h4>

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus suscipit modi sapiente illo soluta odit
            voluptates,
            quibusdam officia. Neque quibusdam quas a quis porro? Molestias illo neque eum in laborum.</p>

        </div>
        <!--Grid column-->

      </div>

      <!--Grid row-->

      <!--Grid row-->
      
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  </body>
  </html>
  <?php
  //$query =  "SELECT * FROM cars INNER JOIN bookings ON cars.car_name = bookings.carname"; 
if (isset($_POST['bookcar'])) {
   
    $sel = "SELECT * FROM cars WHERE car_id = '$_GET[id]'";
    $fname= mysqli_real_escape_string($link,$_POST['fullname']);
    $fromdate = mysqli_real_escape_string($link,$_POST['fromdate']);
    $ftodate= mysqli_real_escape_string($link,$_POST['todate']);
    $fmessage=mysqli_real_escape_string($link,$_POST['message']);
     if(count($errors) == 0) {
      
        $query = "INSERT INTO bookings (fullname,carname,fromdate,todate,message) VALUES ('$fname','$_GET[id]','$fromdate','$ftodate','$fmessage')";
        mysqli_query($link,$query);

             echo "<script type = \"text/javascript\">
                                            alert(\"Booking Succesful. \");
                                            </script>";
            

        
    }
   



    # code...
}

  include('footer.php');
  ?>


    
   