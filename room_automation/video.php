<?php
	session_start();
?>
<!DOCTYPE html> 
<html> 
<head>
	<title>LIVE VIDEO</title>
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
		<?php include'headers.php';?><br>
		<div class="container-fluid"><br><br><br>
			<center><h1 style="color: solid blue; font-weight: bold; font-family: serif;  flex-wrap: wrap;">LIVE VIDEO</h1></center>
			<center>
				<div class="video"><img src="http://192.168.43.22:5000/video_feed" style="width: 900px; height: 700px;"></div>
			</center><br><br>
			<center><p>
			Live Video of 
			<a href="http://cyborg.nitrkl.ac.in" target="_blank">Cyborg Room</a>.
			</p></center>
		</div>
		<br><br><br><br>
		<?php include'footer.php';?>
	</body> 
</html>