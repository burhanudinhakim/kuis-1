<?php
error_reporting(E_ALL);
ini_set('display_error',1);
session_start();
//panggil library
require_once('nusoap/lib/nusoap.php');
//mendefinisikan alamat url service yang disediakan oleh client 
$url = 'http://localhost/dev/ws/wsdl/server_registrasi_336823.php?wsdl';
// $client = new soapclient($url); 
$client = new nusoap_client($url, 'WSDL');
$p_post = $_POST;

$result = $client->call('registrasi_ws',
	array(
		'email'=>$p_post['email'],
		'nama'=>$p_post['nama'],
		'nim'=>$p_post['nim'],
		'jenis_kelamin'=>$p_post['jenis_kelamin'],
		));

if($result == "Registrasi Berhasil"){ 
  $_SESSION['email'] = $p_post['email']; 
  header ("location:index_registrasi_berhasil.php");
} else{
  header ("location:form_registrasi_336823.php"); 
}
?>