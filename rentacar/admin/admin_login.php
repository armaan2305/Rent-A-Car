<?php

include('dbconnect/dbconnect.php');
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <link rel="stylesheet" type="text/css" href="css/style.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body >
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="dbconnect/dbconnect.php" method="post">
                            <h3 class="text-center text-info">Admin Login</h3>
                            <div class="form-group">
                                <label for="Email" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="email" autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <br>

                                <button type="submit" name="adminlogin" class="btn btn-info btn-md"> Login</button> 
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>