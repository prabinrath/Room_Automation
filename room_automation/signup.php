<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>SIGN UP page</title>
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
            <div class="background_signup"><br><br>
                <div class="row">
                    <div class="col-xs-6 col-lg-4 col-xs-offset-4">
                        <br><br> <br><br><br><br>
                        <h1 style="font-size:35px; font-weight: bold; color:violet; ">SIGN UP</h1>
                        <form action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name">                    
                            </div>
                            <div class="form-group">
                                <input type="email" value="" class="form-control" name="email" placeholder="E-mail" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"> 
                                <div class="display_error"><p><?php if(isset($_GET['email_error']))
                                            {
                                                echo '</br>'.$_GET['email_error'];
                                            }
                                    ?></p></div>                   
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" value="" name="password" placeholder="Password" required="true" pattern=".{6,}"> 
                                <div class="display_error"><p><?php if(isset($_GET['password_error']))
                                            {
                                                echo '</br>'.$_GET['password_error'];
                                            }
                                    ?></p></div>                   
                                 
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="contact" placeholder="Contact" required="true" pattern="[0-9]{10,}">                    
                                
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="roll_no" placeholder="Roll no" required="true" >                    
                                
                            </div>
                            
                            <div class="form-group">
                                <input class="form-control" name="address" placeholder="Address">                    
                            </div>
                            
                            <input class="btn-primary "type="submit" value="submit">    
                            
                        </form>
                    </div>      
                </div>
            </div>
        </div>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>