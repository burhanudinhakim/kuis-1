<center><h2><b>Log In</b></h2></center> 
<?php
  //memulaisession
  session_start();
  //cek adanya session, jika session sudah ada maka diarahkan ke index.php 
  if (ISSET($_SESSION['email'])){
    header("location:index.php"); 
  }
  
  
  
  
?>
<form method="post" action="server.php">
  <table border="0" align="center" cellpadding="5" cellspacing="8">
    <tr>
				<td>Email</td>
				<td>:</td>
				<td><input type=text name='email' size=30></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type=text name='nim' size=30></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type=password name='nama' size=30></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<select name='jenis_kelamin' style='width:300px;'>
						<option value=''>--  Pilih  --</option>
						<?php
						
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type=password name='nama' size=30></td>
			</tr>
			
			<tr>
				<td colspan=3 align=center><input type=submit value='  Simpan  '>&nbsp&nbsp<input type=button value='  Batal  ' onclick='window.close();'></td>
			</tr>
  </table>
</form>


