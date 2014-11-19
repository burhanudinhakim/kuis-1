<?php
error_reporting(E_ALL);
ini_set('display_error',1);
session_start();
require_once('nusoap/lib/nusoap.php');
$url = 'http://localhost/kuis-1/server_registrasi_336998.php?wsdl';
$client = new nusoap_client($url, 'WSDL');
$p_post = $_POST; //ini POST ngikutin yang registrasi
$result = $client->call('registrasi_ws', //bukan login tapi registrasi trus masukin parameter semuanya --- registrasi_ws harus disamakan di file server line 26 dan 7
  array(
  'email'         =>  $p_post['email'], //p_post harus dimasukkan karena sebagai parameter
  'nama'          =>  $p_post['nama'], 
  'nim'           =>  $p_post['nim'], 
  'jenis_kelamin' =>  $p_post['jenis_kelamin'], 
  )
);
if($result == "Registrasi Berhasil"){ 
  $_SESSION['email'] = $p_post['email']; 
  header ("location:index_registrasi_336998.php");
} else{
  header ("location:form_registrasi_336998.php"); 
}
?>