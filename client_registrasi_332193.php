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

$email =  isset($_POST["email"]) ? $_POST["email"];
$nim =  isset($_POST["nim"]) ? $_POST["nim"];
$nama =  isset($_POST["nama"]) ? $_POST["nama"];
$jenis_kelamin =  isset($_POST["jenis_kelamin"]) ? $_POST["jenis_kelamin"] ;
$alamat =  isset($_POST["alamat"]) ? $_POST["alamat"];

$result = $client->call('login_ws', array('username'=>$username, 'password'=>$password));
// echo '<pre>';print_r($client->response);echo '</pre>';
if($result == "Login Berhasil"){ 
  $_SESSION['username'] = $username; 
  header ("location:index.php");
} else{
  header ("location:login.php"); 
}
?>