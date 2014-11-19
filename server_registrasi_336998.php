<?php
  require_once 'nusoap/lib/nusoap.php';
  require_once 'adodb/adodb.inc.php';
  $server = new nusoap_server();
  $server->configureWSDL('server','urn:server');
  $server->wsdl->schemaTargetNamespace = 'urn:server';
  $server->register('registrasi_ws', 
    array(
      'email'         =>  'xsd:string', 
      'nama'          =>  'xsd:string',
      'nim'           =>  'xsd:string',
      'jenis_kelamin' =>  'xsd:string',
      'alamat'        =>  'xsd:string'
    ), 
    array(
      'return' => 'xsd: string'
    ), 
      'urn:server', 
      'urn:server#registrasiServer', //terserah mau kasih nama aja klo disamping itu registrasiServer
      'rpc', 
      'encoded', 
      'registrasi'
    ); 
      
    function registrasi_ws($email, $nama, $nim, $jenis_kelamin, $alamat) {
      $db = NewADOConnection('mysql');
      $db->Connect('128.199.182.167','kuis1','rahasia','kuis1'); 
	  
      $email = mysql_escape_string($email); // di escape untuk keamanan biar tidak  bisa diinjection atau query nya biar ga rusak klo ada karakter lain
      $nim = mysql_escape_string($nim);
      $nama = mysql_escape_string($nama);
      $jenis_kelamin = mysql_escape_string($jenis_kelamin);
      $alamat = mysql_escape_string($alamat);
	  
      $sql = $db->Execute("SELECT * FROM pengguna where email='$email'");
      $sql2 = $db->Execute("SELECT * FROM pengguna where nim='$nim'");
      if ($sql->RecordCount() >= 1 || $sql2->RecordCount() >= 1) //ini buat menghitung jadi klo nimnya lebih dari satu sudah terdaftar
      {
        return "Registrasi Gagal; Email atau nim pengguna sudah terdafatar;";
      } else {
        $sql3 = $db->Execute("insert into pengguna (email, nim, nama, jenis_kelamin, alamat) value ('$email', '$nim', '$nama', '$jenis_kelamin', '$alamat')"); //query insert to database
        if ($sql3) {
          return "Registrasi Berhasil"; //disamakan tulisan di client line 17 Registrasi Berhasil
        }
      } 
    }
    $HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : ''; $server->service($HTTP_RAW_POST_DATA);
?>