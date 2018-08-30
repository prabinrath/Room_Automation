<?php
    include 'dbconnection.php';
    if (isset($_SESSION['email'])) 
        {   header('location: room_automate.php'); }
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>LOGIN page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jQuery library -->
        <script src="bootstrap/js/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
            include 'headers.php';
        ?>  
        <div class="container-fluid">
            <div class="background_signup">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                            <br><br><br><br> <br><br><br><br>                       
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                LOGIN      
                            </div>
                            <div class="panel-body">
                                <center><p><span class="text-warning" style="font-family: serif; font-size: 20px;">Log in to automate the room</span></p></center>
                                <form action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <label for="email" class="form" style="font-family: serif; font-size: 17px;">E-mail</label>
                                        <input type="email" value="" class="form-control" name="email" placeholder="Enter e-mail id" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="form" style="font-family: serif; font-size: 17px;">password</label>
                                        <input type="password" value="" class="form-control" name="password" placeholder="Enter password" required = "true" pattern=".{6,}">
                                                                             
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">submit
                                    </button>
                                </form>   
                            </div>               
                            <div class="panel-footer">
                                <p><a href="signup.php">Don't have an account? Register</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        <?php
        include 'footer.php';
        ?>      
        
    </body>
</html>
