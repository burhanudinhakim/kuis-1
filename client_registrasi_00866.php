<?php
error_reporting(E_ALL);
ini_set('display_error',1);
session_start();
//panggil library
require_once('nusoap/lib/nusoap.php');
//mendefinisikan alamat url service yang disediakan oleh client 
$url = 'http://localhost/dev/ws/wsdl/server.php?wsdl';
// $client = new soapclient($url); 
$client = new nusoap_client($url, 'WSDL');

$email	= isset($_POST["Email"]) ? $_POST["Email"] : '';
$nim	= isset($_POST["Nim"]) ? $_POST["Nim"] : '';
$nama	= isset($_POST["Nama"]) ? $_POST["Nama"] : '';
$jenis_kelamin	= isset($_POST["Jenis kelamin"]) ? $_POST["Jenis kelamin"] : '';
$alamat	= isset($_POST["Alamat"]) ? $_POST["Alamat"] : '';

$result = $client->call('Registrasi', array('email'=>$email, 'nim'=>$nim, 'nama'=>$nama, 'jenis kelamin'=>jenis_kelamin, 'alamat'=>alamat));
// echo '<pre>';print_r($client->response);echo '</pre>';

?>