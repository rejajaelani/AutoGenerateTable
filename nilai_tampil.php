<?php
	//sopingi.com
	include 'feeder_ws.php';

	$feeder_token = $_SESSION['feeder_token'];

	$sync['act']="GetDictionary";
	$sync['fungsi']="GetProfilPT";
	$sync['token']=$feeder_token;
	$sync['filter']="";
	$sync['order']="";
	$sync['limit']="1";
	$sync['offset']="0";

	$hasil = runWs($sync);

	//echo $hasil;

	// Mengonversi array menjadi JSON
$jsonData = json_encode($hasil);

// Menampilkan JSON
echo $jsonData;