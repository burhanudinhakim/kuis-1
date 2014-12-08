<?php
  require_once 'nusoap/lib/nusoap.php';
  require_once 'adodb/adodb.inc.php';
  $server = new nusoap_server();
  $server->configureWSDL('server','urn:server');
  $server->wsdl->schemaTargetNamespace = 'urn:server';
  //register a function that works on server 
  $server->register('login_ws', 
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
    function login_ws($username, $password) { //enkripsi password dengan md5 $password = md5($password);
      //buat koneksi
      $db = NewADOConnection('mysql');
      $password = md5($password);
      $db -> Connect('128.199.182.167','kuis1','rahasia','kuis1'); //cek username dan password dari database
      $sql = $db -> Execute("SELECT * FROM user where username='$username' AND password='$password'");
      //Cek adanya username dan password di database
      if ($sql->RecordCount() >= 1) //sama dengan mysql_num_rows pada php biasa
      {
        return "Login Berhasil";
      } else {
        return "Login gagal";
      } 
    }
    //create HTTP listener
    $HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : ''; $server->service($HTTP_RAW_POST_DATA);
	
	
	function simpan_daftar($email, $nim, $nama, $jenis_kelamin, $alamat) {
	
	$db = NewADOConnection('mysql');
      $db -> Connect('128.199.182.167','kuis1','rahasia','kuis1'); 
      $sql = $db -> Execute("SELECT * FROM pengguna where email='$email' nim='$nim' nama='$nama' jenis_kelamin='$jenis_kelamin' alamat='$alamat'");
   

	$data = array('email'=>$this->input->post('email'),
				  'nim'=>$this->input->post('nim'),
				  'nama'=>$this->input->post('nama'),
				  'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
				  'alamat'=>$this->input->post('alamat')
				
				  );
	
	if($result == 1)     { 
	echo "ERROR! The username you have chosen already exists!";     
	} else     {     
	mysql_query("INSERT INTO TABLENAME (username, password, firstname, lastname, age, ip) 
	VALUES ('$username', '$password', '$firstname', '$lastname', '$age', '$ip')");    
	echo "<p> Congratulations! You have successfully registered! Click here to login.</p>";
}
}
?>