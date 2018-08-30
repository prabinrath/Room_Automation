<?php

	if(isset($_POST['submit']))
	{
		$light_value = $_POST['status'];
		if($_POST['status']==1)
		{
			header('location: toggle_led.php?status=0');
		}
		else
		{
			header('location: toggle_led.php?status=1');
		}
		

		$url = 'http://192.168.29.213:80/toggle';
		$data = array('fan' => '0', 'light' => $light_value);

		// use key 'http' even if you send the request to https://...
		$options = array(
		  'http' => array(
		    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		    'method'  => 'POST',
		    'timeout' => 60.0,
		    'content' => http_build_query($data),
		  ),
		);
		$context  = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		
	}
	else
	{
		echo "not submitted";
	}
?>