<?php
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
?>
