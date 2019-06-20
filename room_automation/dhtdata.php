<?php
	if(isset($_POST['Hum']) && isset($_POST['Temp']) && isset($_POST['Dist']))
	{
		$temperature = $_POST['Temp'];
		$humidity = $_POST['Hum'];
		$dist = $_POST['Dist'];

		$con=mysqli_connect("localhost","root","");
	        if(!$con)
	          {
	            die("not connected");
	          }
	         $dbstatus=mysqli_select_db($con,"cyborg");
	         if(!$dbstatus)
			{
		 		die("database not found");
			}
		$insert = "INSERT into details(temperature, humidity) values('$temperature','$humidity')";
		$insert_result = mysqli_query($con, $insert) or die(mysqli_error($con));

		$insert_dis = "INSERT into distance_details(distance) values('$dist')";
		$insert_result_ = mysqli_query($con, $insert_dis) or die(mysqli_error($con));
		
	}
	else
	{
		echo "Post unsuccessful";
	}
	
?>



