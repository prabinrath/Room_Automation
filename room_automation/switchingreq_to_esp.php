<?php
	session_destroy();
	if(isset($_GET['index']) && isset($_GET['status']))
	{
		$index = $_GET['index'];
		$switch = $_GET['status'];

		if($switch=='ON')
		{
			$status = 1 ;
		}
		else if ($switch=='OFF')
		{
			$status = 0 ;
		}
		$url = 'http://192.168.43.160:80/web_switch';
		$data = array('index' => $index, 'state' => $status);

		// use key 'http' even if you send the request to https://...
		$options = array(
		  'http' => array(
		    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		    'method'  => 'POST',
		    'timeout' => 20.0,
		    'content' => http_build_query($data),
		  ),
		);
		$context  = stream_context_create($options);
		$result_status = file_get_contents($url, false, $context);
		session_start();
		$_SESSION['result_status']=$result_status;
		//$_SESSION['in']=$index;
		//$_SESSION['switch_status']=$switch;
		//$_SESSION['control']=$control;
		header('location: status_for_switch.php');
	}
?>