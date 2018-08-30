<?php
	$url = 'http://192.168.43.160:80/status';
    $data = array('status' => '-1');

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
        $control_ = 1;
        session_start();
        $_SESSION['result']=$result;
        header('location:room_automate.php');    
?>