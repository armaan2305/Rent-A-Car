<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
// put your code here
include('header.php');
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Rent-a-car</title>
    <meta charset="utf-8">
    </head><!-- comment -->
    <body>
      <!--carousel start -->
      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/banner1.jpg" alt="Los Angeles" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Los Angeles</h3>
              <p>We had such a great time in LA!</p>
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/banner2.jpg" alt="Chicago" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/banner3.jpeg" alt="New York" width="1100" height="500">
            <div class="carousel-caption">
              <h3>New York</h3>
              <p>We love the Big Apple!</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
      <section class='my-5'>
        <div class="container">
          <div class="section-header text-center">
            <h1>Find the Best Car For You</h1>
            <p>We have more than a thousand cars for you to choose. What’s the best website to use when you want to rent a car? The quick answer is that there’s no one best car rental booking site, but there are a bunch of great ones worth comparing prices on. And the best ones for you will depend on what exactly you’re looking for in a car rental.</p>
          </div>
        </div>
      </section>
      <!--?php $sql = "SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1 from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand";
      $query = $dbh -> prepare($sql);
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);
      $cnt=1;
      if($query->rowCount() > 0)
      {
      foreach($results as $result)
      {
      ?-->
      <section class="my-5 mx-5">
        <div class="py-5">
          <h2 class="text-center">New</h2>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="row">
              <?PHP
              $con = mysqli_connect('localhost','root','','rentacar');
              mysqli_select_db($con,'rentacar');
              /*if($con){
              echo "connection successful";
              }else{
              echo "no connection";
              }*/
              $query = " SELECT `car_id`, `car_name`, `car_type` , `image`, `cost`,`capacity` FROM `cars` order by car_id ASC ";
              $queryfire = mysqli_query($con, $query);
              $num = mysqli_num_rows($queryfire);
              if($num > 0){
              while($product = mysqli_fetch_array($queryfire)){
              ?>
              
              <div class="col-lg-4 col-md-4 col-12">
                <form>
                  <div class="card">
                    <img class="card-img-top" src=" images/vehicleimages/<?php echo $product['image'];  ?>" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title"><?php echo
                      $product['car_name'];  ?></h4>
                      <h6> &#8377; <?php echo $product['cost'];  ?>/Day &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Seats:<?php echo $product['capacity'];  ?></span> </h6>
                      <p class="card-text">Type: <?php echo
                      $product['car_type'];  ?></p>
                      <a href="carbooking.php?id=<?php echo $product['car_id'];?>" class="btn btn-primary">View Details</a>
                    </div>
                  </div>
                </div>
                <?php
                }
                }
                ?>
                
              </div>
            </div>
          </div>
        </section>
      </body>
    </html>
    <!--SCRIPT-->
  </body>
</html>
<?php
include ('footer.php');
?>