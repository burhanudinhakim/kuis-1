<?php
  require_once 'nusoap/lib/nusoap.php';
  require_once 'adodb/adodb.inc.php';
  $server = new nusoap_server();
  $server->configureWSDL('server','urn:server');
  $server->wsdl->schemaTargetNamespace = 'urn:server';
  $server->register('register_ws', 
    array(
      'email'         =>  'xsd:string', 
      'nim'           =>  'xsd:string',
      'nama'          =>  'xsd:string',
      'jenis_kelamin' =>  'xsd:string',
      'alamat'        =>  'xsd:string'
    ),
    array(
        'return' => 'xsd: string'
    ), 
      'urn:server', 
      'urn:server#registerServer', 
      'rpc', 
      'encoded', 
      'register'
    ); 
      
    function register_ws($email, $nim, $nama, $jenis_kelamin, $alamat) { 
      $db = NewADOConnection('mysql');
      $db -> Connect('128.199.182.167','kuis1','rahasia','kuis1'); 
      $email = mysql_escape_string($email);
      $nim = mysql_escape_string($nim);
      $nama = mysql_escape_string($nama);
      $jenis_kelamin = mysql_escape_string($jenis_kelamin);
      $alamat = mysql_escape_string($alamat);
      $sql = $db->Execute("SELECT * FROM pengguna where email='$email'");
      $sql2 = $db->Execute("SELECT * FROM pengguna where nim='$nim'");
      
      if ($sql->RecordCount() >= 1 || $sql2->RecordCount() >= 1) 
      {
        return "Registrasi gagal, email atau nim sudah terdaftar.";
      } else {
        $sql3 = $db->Execute("insert into pengguna (email, nim, nama, jenis_kelamin, alamat) value('$email', '$nim', '$nama','$jenis_kelamin','$alamat')");
        if($sql3){
          return "Registrasi Berhasil";
        }
      } 
    }
    //create HTTP listener
    $HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : ''; $server->service($HTTP_RAW_POST_DATA);
?>