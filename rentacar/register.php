<?php
session_start();
Include('header.php');
include('dbconnect/dbconnect.php');
?>
<!------ Include the above in your HEAD tag ---------->
<body >
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="dbconnect/dbconnect.php" method="post">
                            <h3 class="text-center text-info">Register</h3>
                            <div class="form-group">
                                <label for="Name" class="text-info">Name:</label><br>
                                <input type="text" name="username" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Mobile" class="text-info">Mobile:</label><br>
                                <input type="number" name="mobile" id="mobile" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Email" class="text-info">Email:</label><br>
                                <input type="email" name="emailid" id="emailid" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Confirm Password:</label><br>
                                <input type="password" name="cpassword" id="cpassword" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <button type="submit" name="register" class="btn btn-info btn-md"> Submit</button>
                            </div>
                            <div id="register-link" class="text-right">Already a user?
                                <a href="login.php" class="text-info">Login here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>