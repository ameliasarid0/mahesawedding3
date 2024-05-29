<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MAHESA WEDDING</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>css/style_login.css" />
</head>
<body align="center">
    <div class="wrapper fadeInDown">
    <div id="formcontent">
      <!-- Icon -->
      <div class="fadeIn first">
        <img src="<?php echo base_url() ?>img/mahesa_logo.png" id="icon1" />
      </div>
      <br>
      <br>
      !! SELAMAT DATANG DI DASHBOARD CUSTOMER!!
      <br>
      <br>
      <!-- Login Button  -->
      <form action="<?php echo base_url('home/keluar')?>" method="post">
        <input type="submit" class="btn btn-primary btn-md" value="Logout">
      </form>
  
      <!-- Footer -->
      <div id="formFooter">
        Mau booking? Yuk <a class="underlineHover" href="#">Hubungi Admin</a>
      </div>
  
    </div>
    </div>
</body>
</html>
