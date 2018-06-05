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
        <title>ABOUT US page</title>
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
            <div class="background_signup"><br><br><br><br><br>
                <div class="row">
                    <div class="col-xs-12 col-md-4 col-md-offset-4 about_us"><center>
                       <p style="font-weight: bold; font-size:25px;font-family: bold; color: #fffdd0;">&nbsp; &nbsp;&nbsp; &nbsp;This Room Automation Project mainly focuses on automating a room. This can be obtained by using this Website when network is available or Mobile phone or IR Remote Or Bluetooth Module. This system interacts with one another through arduino, ESP 8266(WI-FI Module), Bluetooth Module and extra components.</p><br>
                       <p style="font-weight: bold; font-family: bold; color: #ddddd0;">&nbsp; &nbsp;&nbsp; &nbsp; This Project is developed by</p><h4 style="color: orange; float: left;">1.&nbsp; Prabin Rath </h4><p style="font-weight: bold; font-size:25px;font-family: bold; color: #fffdd0;"">,an undergraduate B.tech student of NIT Rourkela having crazy enthusiasm on Robotics, IOT Machine Learning, Software Development. </p><h4 style="color: orange; float: left;">2.&nbsp;Neelam Mahapatro</h4><p style="font-weight: bold; font-size:25px;font-family: bold; color: #fffdd0;"> who is also an undergraduate B.tech student of NIT Rourkela crazy about IOT, Machine Learning and Software Develeopment. Both of us are active member of<a href="http://cyborg.nitrkl.ac.in"> CYBORG</a> , an official robotics club of NIT, Rourkela.</p>
                       <br><br>
                       <p style="font-weight: bold; font-family: bold; color:;">For any query regarding the project<h4 style="color: red; float: right;">Contact us:<br>7609904323<br>8280030272</h4></p></center>
                    </div>
                </div>
            </div>    
        </div>
        <?php
        include 'footer.php';
        ?>      
        
    </body>
</html>
