<?php
  require_once 'nusoap/lib/nusoap.php';
  require_once 'adodb/adodb.inc.php';
  $server = new nusoap_server();
  $server->configureWSDL('server','urn:server');
  $server->wsdl->schemaTargetNamespace = 'urn:server';
  //register a function that works on server 
  $server->register('register_ws', 
    array(
      'email' => 'xsd:string', 
      'nim'=>'xsd:string',
	  'nama'=>'xsd:string',
	  'jenis_kelamin'=>'xsd:string',
	  'alamat'=>'xsd:string',
	  ), 
	  //parameters 
      array(
        'return' => 'xsd: string'
      ), //output 
      'urn:server', //namespace 
      'urn:server#registerServer', //soapaction
      'rpc', // style 
      'encoded', // use 
      'login'
    ); //description
    

	
    //create function
    function register_ws($email, $nim, $nama, $jenis_kelamin, $alamat) { //enkripsi password dengan md5 $password = md5($password);
      //buat koneksi
      $db = NewADOConnection('mysql');
      
      $db -> Connect('128.199.182.167','kuis1','rahasia','kuis1'); 
	  $email = mysql_escape_string($email);
	  $nim = mysql_escape_string($nim);
	  $nama = mysql_escape_string($nama);
	  $jenis_kelamin = mysql_escape_string($jenis_kelamin);
	  $alamat = mysql_escape_string($alamat);
	  //cek username dan password dari database
      $sql = $db -> Execute("SELECT * FROM pengguna where email='$email'");
	  $sql2 = $db -> Execute("SELECT * FROM pengguna where nim='$nim'");
      //Cek adanya username dan password di database
      if ($sql->RecordCount() >= 1 || $sql2->RecordCount() >= 1) //sama dengan mysql_num_rows pada php biasa
      {
        return "Registrasi Gagal; Email atau nim pengguna sudah terdaftar;";
      } else {
	  $sql3 = $db->Execute("insert into pengguna (email, nim, nama, jenis_kelamin, alamat) value ('$email', '$nim', '$nama', '$jenis_kelamin', '$alamat')");
	  if ($sql3) {
	  
        return "Registrasi Berhasil";
      } 
    }
	
	}
	
    //create HTTP listener
    $HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : ''; $server->service($HTTP_RAW_POST_DATA);
?>