<h2><b>Register Pengguna</b></h2>
<?php
  //memulaisession
  session_start();
  //cek adanya session, jika session sudah ada maka diarahkan ke index.php 
  if (ISSET($_SESSION['username'])){
    header("location:index.php"); 
  }
?>
<form method="post" action="client.php">
  <table border="0" align="center" cellpadding="5" cellspacing="8">
    <tr>
      <td>Id : </td>
      <td><input name="id" type="label"></td> 
    </tr>
	<tr>
      <td>E-mail : </td>
      <td><input name="e-mail" type="label"></td> 
    </tr>
	<tr>
      <td>NIM : </td>
      <td><input name="nim" type="label"></td> 
    </tr>
	<tr>
      <td>Nama : </td>
      <td><input name="nama" type="label"></td> 
    </tr>
	<tr>
      <td>Jenis Kelamin : </td>
      <td><input type="radio">Laki-laki</td> 
	  <td><input type="radio">Perempuan</td>
    </tr>
	<tr>
      <td>Alamat : </td>
      <td><input name="alamat" type="label"></td> 
    </tr>
    <tr>
      <td colspan="2" align="center" height="10">
        <input name="submit" type="submit" value="Simpan"> 
      </td>
    </tr>
  </table>
</form>
