<?php
		$string="r1=0&r2=1&r3=0";
		$control=1;
		session_start();
		$_SESSION['string']= $string;
		header('location:string_parse.php');
		$_SESSION['control']= $control;
?>