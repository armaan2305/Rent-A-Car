
<?php
include('dbconnect/dbconnect.php');

?>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Rent-a-Car</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Manage Cars <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addcars.php">Add cars</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="managebooking.php">Manage Bookings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
     
       <?php if(isset($_SESSION['success'])) {?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
       <?php echo $_SESSION['username'];?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="admin_logout.php">Logout</a>
        </div>
      </li>

            <?php } else {?>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Login/Signup</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">Login</a>
          <a class="dropdown-item" href="register.php">Signup</a>
        </div>
      </li>
      <?php }?>

    </ul>
  </div>
</nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>