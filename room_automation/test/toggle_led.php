<!DOCTYPE html>
<html>
<head>
	<title>Test for LED</title>
</head>
<body>
	<div class="container"><br><br>
		<center>
			<form action="toggle_led_backend.php" method="POST">
			<input type="hidden" name="status" value="<?php if(isset($_GET['status']))
														{
															echo $_GET['status'];
														}
														else
														{
															echo "0";
														}?>">
			<button id=1 type="submit" value="submit" name="submit" style="width: 200px;
			height: 60px; color: blue">
				TOGGLE LED
			</button>
			</form>
		</center>		
	</div>
</body>
</html>