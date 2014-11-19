<?php
require_once('nusoap/lib/nusoap.php');
//mendefinisikan alamat url service yang disediakan oleh client 
$url = 'http://localhost/kuis-1/server_regestrasi_332376.php?wsdl';
// $client = new soapclient($url); 
$client = new nusoap_client($url, 'WSDL');

$email =  isset($_POST["Email"]) ? $_POST["Email"] : '' ;
$nim =  isset($_POST["Nim"]) ? $_POST["Nim"] :  '' ;
$nama =  isset($_POST["name"]) ? $_POST["name"] : '' ;
$jk =  isset($_POST["jk"]) ? $_POST["jk"] : '' ;
$alamat =  isset($_POST["Alamat"]) ? $_POST["Alamat"] : '' ;

//echo $email.$nim.$nama.$jk.$alamat;die();

$result = $client->call('regestrasi', array('email'=>$email, 'nim'=>$nim, 'nama'=>$nama, 'jk'=>$jk, 'alamat'=>$alamat));
// echo '<pre>';print_r($client->response);echo '</pre>';
?>