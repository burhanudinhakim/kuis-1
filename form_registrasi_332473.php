<html>
<head>
  <link href="asset/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="asset/css/navbar-fixed-top.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="asset/js/bootstrap.js"> </script> 
</head>
<body>

  <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">E-Learning</a>
        </div>
        <div class="navbar-collapse collapse">
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      
      

      <div>
        <form class="form-horizontal" action="client_registrasi_332473.php" method="POST">
        <fieldset>

        <!-- Form Name -->
        <legend>Registrasi Pengguna</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Email">Email</label>  
          <div class="col-md-5">
          <input id="Email" name="email" type="text" placeholder="Email: email@ugm.ac.id" class="form-control input-md" required="">
            
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="Nim">Nim</label>  
          <div class="col-md-5">
          <input id="Nim" name="nim" type="text" placeholder="nim universitas" class="form-control input-md" required="">
            
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="name">Nama</label>  
          <div class="col-md-5">
          <input id="name" name="nama" type="text" placeholder="Nama Lengkap" class="form-control input-md" required="">
            
          </div>
        </div>

        <!-- Multiple Radios -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Jenis Kelamin">Jenis Kelamin</label>
          <div class="col-md-4">
          <div class="radio">
            <label for="Jenis Kelamin-0">
              <input type="radio" name="jenis_kelamin" id="Jenis Kelamin-0" value="L" checked="checked">
              Laki-laki
            </label>
          </div>
          <div class="radio">
            <label for="Jenis Kelamin-1">
              <input type="radio" name="jenis_kelamin" id="Jenis Kelamin-1" value="P">
              Perempuan
            </label>
          </div>
          </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Alamat">Alamat</label>
          <div class="col-md-4">                     
            <textarea class="form-control" id="Alamat" name="alamat">Alamat Lengkap</textarea>
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

      </div>

    </div> <!-- /container -->
</body>
</html>