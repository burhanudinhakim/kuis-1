<?php
error_reporting(E_ALL);
ini_set('display_error',1);
session_start();
require_once('nusoap/lib/nusoap.php');
$url = 'http://localhost/kuis-1/server_registrasi_332325.php?wsdl';
$client = new nusoap_client($url, 'WSDL');
$p_post = $_POST;
$result = $client->call('register_ws', 
  array(
    'email'         =>  $p_post['email'], 
    'nama'          =>  $p_post['nama'],
    'nim'           =>  $p_post['nim'],
    'jenis_kelamin' =>  $p_post['jenis_kelamin'],
    'alamat'        =>  $p_post['alamat'],
  )
);
if($result == "Registrasi Berhasil"){ 
  $_SESSION['email'] = $p_post['email'];
  header ("location:index_registrasi_332325.php");
} else{
  header ("location:form_registrasi_332325.php"); 
}
?>