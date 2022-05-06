<?php

if(!isset($_SESSION)){
    session_start();
}
$db_server = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'rentacar';

$username = '';
$email = '';
$mobile = '';
$address = '';
$admin_id = '';
$errors = array();

$link = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



if(isset($_POST['register'])) {
    $username = mysqli_real_escape_string($link,$_POST['username']);
    $email = mysqli_real_escape_string($link,$_POST['emailid']);
    $mobile = mysqli_real_escape_string($link,$_POST['mobile']);
    $password = mysqli_real_escape_string($link,$_POST['password']);
    $password2 = mysqli_real_escape_string($link,$_POST['cpassword']);

    if(empty($username)) {
        array_push($errors,'Username is required');
    }
    if(empty($email)) {
        array_push($errors,'Email is required');
    }
    if(empty($mobile)) {
        array_push($errors,'Mobile No is required');
    }
       if(empty($password)) {
        array_push($errors,'Password is required');
    }
    if($password != $password2) {
        array_push($errors,'Confirm Password do not match');
    }

    $query = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($link,$query);
    if(mysqli_num_rows($result) > 0) {
        array_push($errors,'Email already Registered');
    }

    if(count($errors) == 0) {
        $pass = ($password);
        $sql = "INSERT INTO user (name,mobile,email,password) VALUES ('$username','$mobile','$email','$pass')";
        mysqli_query($link,$sql);
        $query = "SELECT * FROM user WHERE email='$email'";
        $result = mysqli_query($link,$query);
        $user_id = mysqli_fetch_assoc($result)['id'];
        $_SESSION['id'] = $user_id;
        $_SESSION['username'] = $username;
        $_SESSION['type'] = 'user';
        $_SESSION['success'] = 'You are logged in';

        header('location: ../index.php');
    }

}

if(isset($_POST['vendorRegister'])) {
    $username = mysqli_real_escape_string($link,$_POST['username']);
    $email = mysqli_real_escape_string($link,$_POST['emailid']);
    $mobile = mysqli_real_escape_string($link,$_POST['mobile']);
    $password = mysqli_real_escape_string($link,$_POST['password']);
    $password2 = mysqli_real_escape_string($link,$_POST['confirm']);

    if(empty($username)) {
        array_push($errors,'Username is required');
    }
    if(empty($email)) {
        array_push($errors,'Email is required');
    }
    if(empty($mobile)) {
        array_push($errors,'Mobile No is required');
    }
    if(empty($password)) {
        array_push($errors,'Password is required');
    }
    if($password != $password2) {
        array_push($errors,'Confirm Password do not match');
    }

    $query = "SELECT * FROM vendors WHERE vendor_email='$email'";
    $result = mysqli_query($link,$query);
    if(mysqli_num_rows($result) > 0) {
        array_push($errors,'Email already Registered');
    }

    if(count($errors) == 0) {
        $pass = md5($password);
        $sql = "INSERT INTO vendors (vendor_name,vendor_email,vendor_mob,vendor_pass) VALUES ('$username','$email','$mobile','$pass')";
        mysqli_query($link,$sql);
        $query = "SELECT * FROM vendors WHERE vendor_email='$email'";
        $result = mysqli_query($link,$query);
        $vendor_id = mysqli_fetch_assoc($result)['vendor_id'];
        $_SESSION['id'] = $vendor_id;
        $_SESSION['username'] = $username;
        $_SESSION['type'] = 'vendor';
        $_SESSION['success'] = 'you are logged in';
        header('location: ../index.php');
    }
}

if(isset($_POST['adminRegister'])) {
    $username = mysqli_real_escape_string($link,$_POST['username']);
    $email = mysqli_real_escape_string($link,$_POST['emailid']);
    $mobile = mysqli_real_escape_string($link,$_POST['mobile']);
    $password = mysqli_real_escape_string($link,$_POST['password']);
    $password2 = mysqli_real_escape_string($link,$_POST['confirm']);

    if(empty($username)) {
        array_push($errors,'Username is required');
    }
    if(empty($email)) {
        array_push($errors,'Email is required');
    }
    if(empty($mobile)) {
        array_push($errors,'Mobile No is required');
    }
    if(empty($password)) {
        array_push($errors,'Password is required');
    }
    if($password != $password2) {
        array_push($errors,'Confirm Password do not match');
    }

    $query = "SELECT * FROM admins WHERE admin_email='$email'";
    $result = mysqli_query($link,$query);
    if(mysqli_num_rows($result) > 0) {
        array_push($errors,'Email already Registered');
    }

    if(count($errors) == 0) {
        $pass = md5($password);
        $sql = "INSERT INTO admins (admin_name,admin_email,admin_mob,admin_pass) VALUES ('$username','$email','$mobile','$pass')";
        mysqli_query($link,$sql);
        $query = "SELECT * FROM admins WHERE admin_email='$email'";
        $result = mysqli_query($link,$query);
        $admin_id = mysqli_fetch_assoc($result)['admin_id'];
        $_SESSION['id'] = $admin_id;
        $_SESSION['username'] = $username;
        $_SESSION['type'] = 'admin';
        $_SESSION['success'] = 'you are logged in';
        header('location: ../index.php');
    }

}

if(isset($_POST['userlogin'])) {
    $email = mysqli_real_escape_string($link,$_POST['emailid']);
    $password = mysqli_real_escape_string($link,$_POST['password']);

    if(empty($email)) {
        array_push($errors,'Email is required');
    }
    if(empty($password)) {
        array_push($errors,'Password is required');
    }
    if (count($errors) == 0) {
        $pass = ($password);
        $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
        $result = mysqli_query($link,$query);
        $total = mysqli_num_rows($result);
        echo $total;
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $username = $row['name'];
            $user_id = $row['id'];
            $_SESSION['id'] = $user_id;
            $_SESSION['username'] = $username;
            $_SESSION['type'] ='user';
            $_SESSION['success'] = 'Login successful';
            header('location: ../index.php');
            echo "Login successful";
        } else {
            array_push($errors,'wrong email/password combination');
        }
    }
}

if(isset($_POST['vendorLogin'])) {
    $email = mysqli_real_escape_string($link,$_POST['emailid']);
    $password = mysqli_real_escape_string($link,$_POST['password']);

    if(empty($email)) {
        array_push($errors,'Email is required');
    }
    if(empty($password)) {
        array_push($errors,'Password is required');
    }
   if(count($errors) == 0) {
       $pass = md5($password);
       $query = "SELECT * FROM vendors WHERE vendor_email='$email' AND vendor_pass='$pass'";
       $result = mysqli_query($link,$query);
       if(mysqli_num_rows($result) == 1) {
           $row = mysqli_fetch_assoc($result);
           $username = $row['vendor_name'];
           $vendor_id = $row['vendor_id'];
           $_SESSION['id'] = $vendor_id;
           $_SESSION['username'] = $username;
           $_SESSION['type'] ='vendor';
           $_SESSION['success'] = 'Login successful';
           header('location: ../index.php');
       } else {
           array_push($errors,'wrong email/password combination');
       }
   }
}

if(isset($_POST['adminlogin'])) {

    $username = mysqli_real_escape_string($link,$_POST['username']);
    $password = mysqli_real_escape_string($link,$_POST['password']);

    if(empty($username)) {
        array_push($errors,'username is required');
    }
    if(empty($password)) {
        array_push($errors,'Password is required');
    }
    if(count($errors) == 0) {
        $pass = ($password);
        $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $result = mysqli_query($link,$query);

        $sql= "SELECT * FROM admin WHERE username='$username'";
        $res = mysqli_query($link,$sql);
        $admin_id = mysqli_fetch_assoc($res)['id'];

        if(mysqli_num_rows($result) == 1) {
            $username = mysqli_fetch_assoc($result)['username'];
            $_SESSION['id'] = $admin_id;
            $_SESSION['username'] = $username;
            $_SESSION['type'] ='admin';
            $_SESSION['success'] = 'Login successful';
            header('location: ../index.php');
        } else {
            array_push($errors,'wrong email/password combination');
        }
    }
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['type']);
    unset($_SESSION['id']);
    unset($_SESSION['success']);
    header('location: index.php');
}


if(isset($_POST['addNewspaperbtn'])) {

    $name = mysqli_real_escape_string($link, $_POST['car_id']);
    $price = mysqli_real_escape_string($link, $_POST['cost']);
    $admin_id = mysqli_real_escape_string($link,$_SESSION['car_id']);

    if(empty($name)) {
        array_push($errors,'Newspaper Name is Required');
    }
    if(empty($price)) {
        array_push($errors,'Newspaper Price is Required');
    }
    if(count($errors) == 0) {
        $sql = "INSERT INTO cars (car_name,cost,car__id) VALUES ('$name','$price','$admin_id')";
        mysqli_query($link,$sql);
    }


}

if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM cars where car_id='$id'";
    mysqli_query($link,$sql);
}

if(isset($_POST['addDeliverybtn'])) {
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $contact = mysqli_real_escape_string($link, $_POST['contact']);
    $lane = mysqli_real_escape_string($link, $_POST['lane']);
    $vendor_id = mysqli_real_escape_string($link,$_SESSION['id']);

    if(empty($name)) {
        array_push($errors,'Name is Required');
    }
    if(empty($contact)) {
        array_push($errors,'Contact is Required');
    }
    if(empty($lane)) {
        array_push($errors,'Lane is Required');
    }
    if(count($errors) == 0) {
        $sql = "INSERT INTO delivery (name,contact,lane,vendor_id) VALUES ('$name','$contact','$lane','$vendor_id')";
        mysqli_query($link,$sql);
    }
}

if(isset($_GET['remove'])) {
    $id = $_GET['remove'];
    $sql = "DELETE FROM delivery where id='$id'";
    mysqli_query($link,$sql);
}

if(isset($_GET['nameAdmin']) && isset($_GET['newsName']) && isset($_GET['newsPrice'])) {
    $admin_name = mysqli_real_escape_string($link, $_GET['nameAdmin']);;
    $name = mysqli_real_escape_string($link,$_GET['newsName']);
    $price = mysqli_real_escape_string($link,$_GET['newsPrice']);
    $user_id = mysqli_real_escape_string($link,$_SESSION['id']);

    $sql = "INSERT INTO sub_newspaper (name,price,provider,user_id) VALUES ('$name','$price','$admin_name','$user_id')";
    mysqli_query($link,$sql);

}

if(isset($_GET['unsubscribe'])) {
    $id = $_GET['unsubscribe'];
    $sql = "DELETE FROM sub_newspaper where id='$id'";
    mysqli_query($link,$sql);
}

if(isset($_POST['genBill'])) {
    $provider = mysqli_real_escape_string($link, $_SESSION['username']);
    $user_id = mysqli_real_escape_string($link,$_POST['user_id']);
    $from_date = mysqli_real_escape_string($link,$_POST['from_date']);
    $to_date = mysqli_real_escape_string($link,$_POST['to_date']);
    $amount = 0.0;
   if(empty($user_id)) {
       array_push($errors,"Select User");
   }
    if(empty($from_date)) {
        array_push($errors,"Select from-date");
    }
    if(empty($to_date)) {
        array_push($errors,"Select to-date");
    }
    $datetime1 = strtotime($from_date);
    $datetime2 = strtotime($to_date);
    $secs = $datetime2 - $datetime1;// == return sec in difference
    $days = $secs / 86400;

    $sql = "SELECT *FROM sub_newspaper where user_id='$user_id'";
    $res = mysqli_query($link,$sql);
    while ($row = mysqli_fetch_assoc($res)) {
        $amount = $amount + ($days * $row['price']);
    }
    if(count($errors) == 0) {
        $query = "INSERT INTO bill (provider,amount,user_id,from_date,to_date) VALUES ('$provider','$amount','$user_id','$from_date','$to_date')";
        mysqli_query($link, $query);
    }

}

if(isset($_POST['contact'])) {
    $fname = mysqli_real_escape_string($link,$_POST['name']);
    $femail = mysqli_real_escape_string($link,$_POST['email']);
    $fmobile= mysqli_real_escape_string($link,$_POST['mobile']);
    $message = mysqli_real_escape_string($link,$_POST['message']);

    if(empty($fname)) {
        array_push($errors,'FirstName is required');
    }
    if(empty($femail)) {
        array_push($errors,'LastName is required');
    }

    if(empty($fmobile)) {
        array_push($errors,'Mobile is required');
    }
    if(empty($message)) {
        array_push($errors,'Feedback is required');
    }

    if(count($errors) == 0) {
        $query = "INSERT INTO contactus (name,email,mobile,message) VALUES ('$fname','$femail','$fmobile','$message')";
        mysqli_query($link,$query);
header('location: ../contactus.php');
        
    }
    
    
}

if(isset($_GET['deleteFeedback'])) {
    $id = $_GET['deleteFeedback'];
    $query = "DELETE FROM feedback WHERE id='$id'";
    mysqli_query($link,$query);
}

/*if(isset($GET['cardetails'])){

           
            $query = "SELECT * FROM cars WHERE car_id = '$_GET[id]'";
            $rs = $conn->query($sel);
            $rws = $rs->fetch_assoc();
     echo 'Rs.'.$rws['hire'];
}*/