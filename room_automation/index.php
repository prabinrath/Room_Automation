<html>
    <head>
        <title>ROOM AUTOMATION</title>
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
            include_once 'headers.php';
            if (isset($_SESSION['email'])) {
                header('location: room_automate.php');
                }                   
        else {?>
        <div class="container-fluid">
            <div class="banner-image">
                <div class="row">
                    <div class= "col-md-6 col-xs-12 banner-content_">
                        <br>
			<center><h1 style="color: white;font-weight: bold; font-family: serif;  font-size: 82px; flex-wrap: wrap;">ROBOREX</h1></center>
                        <center><h1 style="color: white;font-weight: bold; font-family: serif;  font-size: 78px; flex-wrap: wrap;">Room Automation</h1></center><br><br>
                        
                    </div>
                    <div class="col-md-6 col-xs-12 banner-content_"><br><br><br>
                        <?php if(isset($_GET['login_error']))
                            {?>
                                <div class="login_error"><p style="color: yellow; font-size: 30px; font-weight: bold; font-family: serif;">
                               <?php echo $_GET['login_error'];
                            }
                        ?></p></div>
                    </div>
                </div>
            </div>
        </div>
        <?php }
        include_once 'footer.php';
        ?>
    </body>
</html>