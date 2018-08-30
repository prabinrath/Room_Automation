<html>
	<head>
		<title>Fetch details</title>
		<link href="css/style.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<script type="text/javascript">
   setTimeout(function(){
       location.reload();
   },3000);
</script>
		<div class="container"><center>
			<table bgcolor="lightgray" border="1" cellspacing="0" cellpadding="7" width="50%">
			<caption><b><u>Recent Data</u></b></caption>
			<tr bgcolor="yellow">
				<th><b><u>SL NO</u></b></th>
				<th><b><u>TEMPERATURE</u></b></th>
				<th><b><u>HUMIDITY</u></b></th>
				<th><b><u>TIME</u></b></th>
	  		</tr>
					<?php
						if(isset($_POST['submit']))
						{
							$dt = new DateTime();
							$min = $dt->format('i');

							if($min>=30)
							{
								$set_min=00;
								for($i=30; $i < $min; $i++)
								{
									$set_min = $set_min+1;
								}
							}
							else
							{
								$set_min = $min+30;
							}
							$min = $set_min;
							//$time_min = $dt[14].$dt[15];
							//echo $min;
							$hour = $dt->format('H');
							
							if($hour>=19)
							{
								$set=0;
								for($i=19; $i < $hour; $i++)
								{
									$set = $set+1;
								}		
							}
							else
								$set=$hour+4;
							$hour = $set ;
							echo $hour.":".$min;
							include '../dbconnection.php';
							//$query="SELECT * from details WHERE ($min-5 < "SELECT EXTRACT(MINUTE from time)"  )";
							$query = "SELECT * from details ";
							$query_res = mysqli_query($con, $query) or die(mysqli_error($con));

    						$row = mysqli_num_rows($query_res);    
							 if($row>0)
							 {
							 	echo "true syntax";
							 	$row_data=mysqli_fetch_array($query_res);
									while($row_data)
										{
										$obtained_min = $row_data['time'][14].$row_data['time'][15];//database time modified to get minute
										if($min<5)
										{//if min is less than 5
											$check=54;
											for($j=0; $j<=$min; $j++)
											{
												$check=$check+1;
											}
										}
										else
										{
											$check=$min-5;
										}
										if($obtained_min > $check){
										echo "<br/>".$check;
					?>
									<tr>
										<td><?php echo $row_data['id_details']?></td>
										<td><?php echo $row_data['temperature']?></td>
										<td><?php echo $row_data['humidity']?></td>
										<td><?php echo $row_data['time']?></td>
									</tr>
									<?php
										}
										else
											echo "less";
										$row_data=mysqli_fetch_array($query_res);
									
									}
							 }
							 else
							{?>
								 <tr>
								   <td colspan="4">NO RECORD FOUND</td>
								</tr>
						    <?php
						       }
						        mysqli_close($con);
						}
						?>
						
			</table></center>
		</div>
	</body>
</html>
