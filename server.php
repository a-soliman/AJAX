<?php
	
	$data = $_GET;
	$user_text = $_GET['user_text'];
	$response = strtoupper($user_text);
	echo $response;

?>