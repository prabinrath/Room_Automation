<?php
    include 'dbconnection.php';
    session_start();
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if (!preg_match($regex_email, $email)) {
        header('location: login.php?email_error=enter correct email');
        }
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $password= md5($password);
    if (strlen($password) < 6) {
         header('location: login.php?password_error=enter correct password');
        }
    $select_query = "SELECT id, name, email, password FROM users WHERE email='$email' and password='$password'";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    $row = mysqli_num_rows($select_query_result);    
    if($row==0)
    {
        echo "Invalid Login!";
    }
    else{
        $row1 = mysqli_fetch_array($select_query_result);
        

        $_SESSION['email'] = $row1['email'];
        $_SESSION['id'] = $row1['id'];
        $_SESSION['name'] = $row1['name'];
        
        header('location: status_for_switch.php');
        
    }
?>




