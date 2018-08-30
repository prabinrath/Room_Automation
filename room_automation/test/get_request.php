<?php
	if(isset($_GET['fan']) && isset($_GET['light']))
	{
		$fan = $_GET['fan'];
		$light = $_GET['light'];
		echo "Value of fan is ".$fan."<br/>";
		echo "Value of light is ".$light."<br/>";
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
		$query = "INSERT into room(fan,light) values('$fan', '$light')";
		$query_result = mysqli_query($con, $query) or die(mysqli_error($con));
	}
	else
	{
		echo "Empty String";
	}
?>