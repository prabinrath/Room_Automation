<?php
	session_start();
	if (empty(isset($_SESSION['email'])))
	{
		header('location:index.php?login_error=You have not logged in');
	}	
?>
<!DOCTYPE html>
<html>
	<head>
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
		<?php include 'headers.php';?>
		<div class="container-fluid height_df"><br><br><br><br>
			<div style=" height: 800px;">
			<center>
			<table bgcolor="lightgray" border="2px solid green" cellspacing="0" cellpadding="7" width="50%" style="overflow: scroll">
			<caption><center><h1 style="color: black;"><u>Recent Data</u></h1></center></caption>
			<tbody style="overflow-y: auto;">
			<tr bgcolor="yellow">
				<th><b><u><strong>SL NO</strong></u></b></th>
				<th><b><u><strong>TEMPERATURE</strong></u></b></th>
				<th><b><u><strong>HUMIDITY</strong></u></b></th>
				<th><b><u><strong>TIME</strong></u></b></th>
	  		</tr>
	  		</tbody>
					<?php
						if(isset($_POST['submit']))
						{
							$dt = new DateTime();
							$min = $dt->format('i');
							$hour = $dt->format('H');
							$day = $dt->format('d');
							$month = $dt->format('m');
							if($min>=30)
							{
								$set_min=0;
								for($i=30; $i < $min; $i++)
								{
									$set_min = $set_min+1;
								}
								$hour=$hour+1;
							}
							else
							{
								$set_min = $min+"30";
							}
							$min = $set_min;							
							if($hour>=22)
							{
								$set=0;
								for($i=22; $i < $hour; $i++)
								{
									$set = $set+1;
								}		
							}
							else
								$set=$hour+3;
							$hour = $set ;
							//echo $hour.":".$min;
							include 'dbconnection.php';
							
							$query = "SELECT * from details ";
							$query_res = mysqli_query($con, $query) or die(mysqli_error($con));

    						$row = mysqli_num_rows($query_res);

							 if($row>0)
							 {
							 	$ctr = 1;//echo "true syntax";
							 	$row_data=mysqli_fetch_array($query_res);
									while($row_data)
										{
												$do=0;
										$obtained_min = $row_data['time'][14].$row_data['time'][15];
										$obtained_hour = $row_data['time'][11].$row_data['time'][12];
										$obtained_day = $row_data['time'][9].$row_data['time'][10];	
										$obtained_month = $row_data['time'][6].$row_data['time'][7];	
																		//database time modified to get minute
										if($hour<5)
										{//if min is less than 5
											$check=23;
											for($j=0; $j<=$min; $j++)
											{
												$check=$check+1;
											}
										}
										else
										{
											$check=$hour-5;
										}
										if($obtained_hour > $check && $obtained_day==$day){
											$do = 1;
										}
										else if($obtained_hour > $check && $day - $obtained_day==1 ){
											if($month =+ $obtained_month)
											$do = 1;
										}
										else if($obtained_hour > $check && $month - $obtained_month==1)
											{
												if($obtained_month==1 || $obtained_month==3 || $obtained_month==5 || $obtained_month==7 || $obtained_month==8 || $obtained_month==10)
												{
													if($obtained_day-$day==30)
														$do = 1;
												}
												else if($obtained_month==4 || $obtained_month==6 || $obtained_month==9 || $obtained_month==11)
												{
													if($obtained_day-$day==29)
														$do =1;
												}												
											}

										if($do==1){
					?>
									<tr bgcolor="#ddd">
										<td><?php echo $ctr ?></td>
										<td><?php echo $row_data['temperature']?></td>
										<td><?php echo $row_data['humidity']?></td>
										<td><?php echo $row_data['time']?></td>
									</tr>
									<?php
										$ctr = $ctr+1;
										}										
										$row_data=mysqli_fetch_array($query_res);
									}
							 }
							 else
							{?>
								 <tr bgcolor="#ddd">
								   <td colspan="4">NO RECORD FOUND</td>
								</tr>
						    <?php
						       }
						        mysqli_close($con);
						}
						?>						
			</table></center></div>	
			<center><form action="data_fetch.php" method="POST"><button type="submit" value="submit" name="submit">Refresh</button></form></center>		
		</div>
		<?php include 'footer.php';?>
	</body>
</html>
