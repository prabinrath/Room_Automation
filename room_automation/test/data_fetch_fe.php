<!DOCTYPE html>
<html>
<head>
	<title>Details Display</title>
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
	<div class="container">
	<center>
		<div class="col-sm-6 col-lg-4 col-lg-offset-4"><br><br><br><br><br><br>
            <h1 style="font-size:35px; font-weight: bold; color:violet; font-size: 30px;">Data of last few mintues</h1>
            <form action="data_fetch_be_last5min.php" method="POST">
                   	<input type="hideen" name="time">
        			<p>To know recent temperature and humidity</p>
                <button class="btn-primary btn" type="submit" name="submit" style="width: 100px; height: 50px;">here</button>    
            </form>
        </div>      
    </center>
	</div>
</body>
</html>




