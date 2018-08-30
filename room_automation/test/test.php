<?php
	if(isset($_GET['id']) && isset($_GET['status']))
	{
		$fan = $_GET['id'];
		$light = $_GET['status'];
		echo "Value of fan is ".$fan."<br/>";
		echo "Value of light is ".$light."<br/>";

		$url = 'http://192.168.43.160:80/toggle';
		$data = array('fan' => '1', 'light' => '0');

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
		$result = file_get_contents($url, false, $context);
		echo $result;
	}
?>