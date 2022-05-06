 <?php
 include('header.php');
 ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<section class="my-5">
    <div>
        <h2 class="text-center">Contact Us</h2>
        
    </div>
    <div class="w-50 m-auto">
        <form action="dbconnect/dbconnect.php" method="post">
        <div class="form-group" >
            <label> Name: </label>
            <input type="text" name="name" autocomplete="off" class="form-control" required>
        </div>
        <div class="form-group" >
            <label> Email: </label>
            <input type="text" name="email" autocomplete="off" class="form-control" required>
        </div><!-- comment -->
        <div class="form-group" >
            <label> Mobile: </label>
            <input type="text" name="mobile" autocomplete="off" class="form-control" required> 
        </div>
        <div class="form-group" >
            <label> Message: </label>
            <textarea class="form-control" name="message" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="contact">Submit</button>

</form>

</section>