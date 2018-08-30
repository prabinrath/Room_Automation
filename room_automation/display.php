<?php
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
	$sql="select * from room";
	$result=mysqli_query($con,$sql);
	$rc=mysqli_num_rows($result);
	if($rc>0)
    {
	    while($row=mysqli_fetch_array($result))
		{
			echo "The value of fan ".$row['fan']."<br/>";
			echo "The value of light ".$row['light']."<br/>";
		}
	}
	else
	{
		echo "Empty database";
	}

?>