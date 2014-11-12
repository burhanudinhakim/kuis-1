<center><h2><b>Log In</b></h2></center> 
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
      <td><input name="id" type="text"></td> 
    </tr>
	<tr>
      <td>E-mail : </td>
      <td><input name="e-mail" type="text"></td> 
    </tr>
	<tr>
      <td>NIM : </td>
      <td><input name="nim" type="text"></td> 
    </tr>
	<tr>
      <td>Nama : </td>
      <td><input name="nama" type="text"></td> 
    </tr>
	<tr>
      <td>Jenis Kelamin : </td>
      <td><input name="jenis_kelamin" type="text"></td> 
    </tr>
	<tr>
      <td>Alamat : </td>
      <td><input name="alamat" type="text"></td> 
    </tr>
    <tr>
      <td colspan="2" align="center" height="10">
        <input name="submit" type="submit" value="Log In"> 
      </td>
    </tr>
  </table>
</form>
