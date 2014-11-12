<?php
  require_once 'nusoap/lib/nusoap.php';
  require_once 'adodb/adodb.inc.php';
  $server = new nusoap_server();
  $server->configureWSDL('server','urn:server');
  $server->wsdl->schemaTargetNamespace = 'urn:server';
  //register a function that works on server 
  $server->register('reg', 
    array(
      'email' => 'xsd:string', 
      'nim'=>'xsd:string',
	  'nama' => 'xsd:string',
	  'jk' => 'xsd:string',
	  'alamat' => 'xsd:string'),//parameters 
      array(
        'return' => 'xsd: string'
      ), //output 
      'urn:server', //namespace 
      'urn:server#registerServer', //soapaction
      'rpc', // style 
      'encoded', // use 
      'register'
    ); //description
function regestrasi($email, $nim, $nama, $jk, $alamat) { //enkripsi password dengan md5 $password = md5($password);
      //buat koneksi
	  
      $db = NewADOConnection('mysql');
      $db -> Connect('128.199.182.167','kuis1','rahasia','kuis1'); //cek username dan password dari database
      $sql = $db -> Execute("INSERT INTO pengguna(email,nim,nama,jenis_kelamin,alamat) VALUES
												  ('$email', '$nim', '$nama', '$jk', '$alamat')");
    }
    //create HTTP listener
    $HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : ''; $server->service($HTTP_RAW_POST_DATA);

?>