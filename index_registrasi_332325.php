<?php
  error_reporting(E_ALL);
  ini_set('display_error',1);
  session_start();
  if(ISSET($_SESSION['email'])){
    //jika tidak ada session 
  } else
  header("location:form_registrasi_332325.php");
?>
  <link href="asset/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="asset/css/navbar-fixed-top.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="asset/js/bootstrap.js"> </script> 
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
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h3>Registrasi Pengguna Berhasil</h3>
        <p>Mari berbagi pengetahuan, berkolaborasi dan menjadi produktif dalam kerangka pembelajaran.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">Selengkapnya &raquo;</a>
        </p>
      </div>

    </div> <!-- /container -->
</body>