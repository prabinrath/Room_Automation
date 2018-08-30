<?php
    include 'dbconnection.php';
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $regex_email = "/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/";
    if (!preg_match($regex_email, $email)) {
        header('location: signup.php?email_error=enter correct email');
        }
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $password=md5($password);
    if (strlen($password) < 6) {
         header('location: signup.php?password_error=enter correct password');
        }
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    if (strlen($contact) < 10) {
         header('location: signup.php?contact_error=enter valid mobile number');
        }
    $roll_no = $_POST['roll_no'];
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $select_query_check = "SELECT id FROM users WHERE email='$email'";
    $select_query_result_check = mysqli_query($con, $select_query_check) or die(mysqli_error($con));
    $row2 = mysqli_num_rows($select_query_result_check);
    if($row2>0)
    {
        header('location: signup.php?email_error=Email id already exists');
    }
 else {
    $insert_query =  "INSERT  into users(name, email, password, contact, roll_no, address) values ('$name', '$email', '$password', '$contact', '$roll_no', '$address')";   
    $insert_query_submit = mysqli_query($con, $insert_query) or die(mysqli_error($con));
    $id = mysqli_insert_id($con);
     session_start();
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $name;
       header('location: status_for_switch.php');
      }
?>


