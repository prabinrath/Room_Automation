<?php 
include 'dbconnection.php';
							
$query = "SELECT * from details";
$query_res = mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_num_rows($query_res);
while($row  >1)
{
	$query_ = "DELETE FROM details LIMIT 1";
    $query_res_ = mysqli_query($con, $query_) or die(mysqli_error($con));
    $row = $row-1;
}

	echo "correct";
   echo '<script language="javascript">';
   echo 'prompt("message successfully sent")';
   echo '</script>';
    
?>