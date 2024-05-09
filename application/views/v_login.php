<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LOGIN - MAHESA WEDDING</title>
</head>
<body align="center">
      <a href="<?php echo base_url(); ?>"><b>MAHESA WEDDING</b><br>LOGIN</a>
    <?php 
    if(isset($_GET['alert'])){
        if($_GET['alert']=="gagal"){
            echo "Maaf! Username & Password Salah.";
        }else if($_GET['alert']=="belum_login"){
            echo "Anda Harus Login Terlebih Dulu!";
        }else if($_GET['alert']=="logout"){
            echo "Anda Telah Logout!";
        }
    } 
    ?>
      <form action="<?php echo base_url().'login/aksi' ?>" method="post">
      <table border="1" cellpadding="" align="center">
        <tr>
            <th colspan="2">Silahkan Login</th>
        </tr>
        <tr>
            <td colspan="2"><input type="text" class="form-control" placeholder="Username" name="username"></td>
            <?php echo form_error('username'); ?>
        </tr>
        <tr>
            <td colspan="2"><input type="password" class="form-control" placeholder="Password" name="password"></td>
            <?php echo form_error('password'); ?>
        </tr>
        <tr>
        <label>
          <td align="center"><a href="<?php echo base_url(); ?>">Kembali</a></td>
          <td align="center"><button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button></td>
        </label>
        </tr>
      </form>
</body>
</html>
