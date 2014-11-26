<?php
  require_once 'nusoap/lib/nusoap.php';
  require_once 'adodb/adodb.inc.php';
  $server = new nusoap_server();
  $server->configureWSDL('server','urn:server');
  $server->wsdl->schemaTargetNamespace = 'urn:server';
  //register a function that works on server 
  $server->register('daftar', 
    array(
      'username' => 'xsd:string', 
      'password'=>'xsd:string'), //parameters 
      array(
        'return' => 'xsd: string'
      ), //output 
      'urn:server', //namespace 
      'urn:server#loginServer', //soapaction
      'rpc', // style 
      'encoded', // use 
      'login'
    ); //description
      
    //create function
    function daftar() { //enkripsi password dengan md5 $password = md5($password);
      //buat koneksi
      $db = NewADOConnection('mysql');
      $password = md5($password);
      $db -> Connect('128.199.182.167','kuis1','rahasia','kuis1'); //cek username dan password dari database
		$sql = $db -> Execute("SELECT * FROM pengguna where id='$id' AND nim='$nim'");
       
    }
    //create HTTP listener
    $HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : ''; $server->service($HTTP_RAW_POST_DATA);
?>