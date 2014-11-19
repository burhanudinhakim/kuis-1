<?php
error_reporting(E_ALL);
ini_set('display_error',1);
session_start();
//panggil library
require_once('nusoap/lib/nusoap.php');
//mendefinisikan alamat url service yang disediakan oleh client 
$url = 'http://localhost/kuis-1.git/server_registrasi_332356.php?wsdl';
// $client = new soapclient($url); 
$client = new nusoap_client($url, 'WSDL');

$p_post = $_POST;
print_r($p_post);exit
echo '<pre>';

$result = $client->call(
	array(
		'email'   		 => $p_post['email'],
		'nim'	 		 => $p_post['nim'],
		'nama'	 		 => $p_post['nama'],
		'jenis_kelamin'	 => $p_post['jenis_kelamin'],
		'alamat'	 	 => $p_post['alamat'],
	)

);

if($result == "Registrasi Berhasil"){ 
  $_SESSION['email'] = $p_post['email']; 
  header ("location:index_registrasi_332356.php");
} else{
  header ("location:form_registrasi_332356.php");  
}
?>

