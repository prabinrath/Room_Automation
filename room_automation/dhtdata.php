<?php
	if(isset($_POST['Hum']) && isset($_POST['Temp']))
	{
		$temperature = $_POST['Temp'];
		$humidity = $_POST['Hum'];
		$con=mysqli_connect("localhost","root","");
	        if(!$con)
	          {
	            die("not connected");
	          }
	         $dbstatus=mysqli_select_db($con,"room_automation");
	         if(!$dbstatus)
			{
		 		die("database not found");
			}
		$insert = "INSERT into details(temperature, humidity) values('$temperature','$humidity')";
		$insert_result = mysqli_query($con, $insert) or die(mysqli_error($con));
		
	}
	else
	{
		echo "Post unsuccessful";
	}
	
?>



