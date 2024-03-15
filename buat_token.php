<?php
	//sopingi.com
	include 'feeder_ws.php';
	$data = token();
	echo json_encode($data);
?>