<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
 <title>Memasukan Template Bootstrap Ke CodeIgniter || KiosCoding.com</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>
        <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet"></link>
        <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet"></link>
        <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap-fileupload.min.css"></link>

        <script src="<?= base_url() ?>assets/jquery/jquery-2.1.4.min.js"></script>
        <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script> 
</head>
<body>

	<!-- INI ADALAH HEADER -->
   <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://www.kioscoding.com">KiosCoding</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://www.kioscoding.com">Beranda</a></li>
            <li><a href="http://www.kioscoding.com/search/label/CODEIGNITER">CodeIgniter</a></li>
            <li><a href="http://www.kioscoding.com/search/label/PHP">Php</a></li>
   <li><a href="http://www.kioscoding.com/search/label/JAVA">Java</a></li>
   <li><a href="http://www.kioscoding.com/search/label/ANDROID STUDIO">Android Studio</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Hubungi Kami</a></li>
            <li><a href="#">Tentang Kami</a></li>
          </ul>
        </div>
      </div>
    </nav>
 <br><br><br><br><br>

 <!-- INI ADALAH TAMPILAN MENU UTAMA -->
    <div class="container">
      <div class="jumbotron">
        <h1>Selamat Datang</h1><br>
        <p>KiosCoding adalah sebuah website yang membahas seputar tutorial mengenai bahasa pemrograman 
  seperti pemrograman dekstop, pemrograman web, dan pemrograman mobile.</p>
        <p>KiosCoding juga membahas beberapa tutorial mengenai framework-framework pendukung yang cukup terkenal seperti Codeigniter, Bootstrap, dan Springboot .</p>
        <br><p>
          <a class="btn btn-lg btn-primary" href="http://www.kioscoding.com" role="button">Lihat Website &raquo;</a>
        </p>
      </div>

    </div>
</body>
</html>