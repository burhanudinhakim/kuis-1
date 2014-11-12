<center><h2><b>Registrasi</b></h2></center> 
<?
$email=$_POST['email'];
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$gender=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];

$simpan=mysql_query(“insert into pengguna values(‘$email’,’$nim’,’$nama’,’$gender’,’$alamat’)”);
if($simpan)
{
echo”Data berhasil disimpan”;
}
else
{
echo”Data Gagal disimpan”;
}
?>

<form class="form-horizontal">
<fieldset>
<!-- Form Name -->
<legend>Registrasi Pengguna</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Email">Email</label>  
  <div class="col-md-5">
  <input id="Email" name="Email" type="text" placeholder="Email: email@ugm.ac.id" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="Nim">Nim</label>  
  <div class="col-md-5">
  <input id="Nim" name="Nim" type="text" placeholder="nim universitas" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Nama</label>  
  <div class="col-md-5">
  <input id="name" name="name" type="text" placeholder="Nama Lengkap" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Jenis Kelamin">Jenis Kelamin</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="Jenis Kelamin-0">
      <input type="radio" name="Jenis Kelamin" id="Jenis Kelamin-0" value="L" checked="checked">
      Laki-laki
    </label>
  </div>
  <div class="radio">
    <label for="Jenis Kelamin-1">
      <input type="radio" name="Jenis Kelamin" id="Jenis Kelamin-1" value="P">
      Perempuan
    </label>
  </div>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Alamat">Alamat</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="Alamat" name="Alamat">Alamat Lengkap</textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-primary">Simpan</button>
  </div>
</div>

</fieldset>
</form>


