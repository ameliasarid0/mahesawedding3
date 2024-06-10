<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LOGIN - MAHESA WEDDING</title>
  <link rel="stylesheet" href="css/style_login.css" />
</head>
<body align="center">
    <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 class="active">Admin</h2>
      <h2 class="inactive underlineHover"><a href="<?php echo base_url('login/cust') ?>"> Customer </a></h2>
      <!-- Icon -->
      <div class="fadeIn first">
        <img src="<?php echo base_url() ?>img/mahesa_logo.png" id="icon" />
      </div>
  
      <!-- Login Form -->
      <form action="<?php echo base_url().'login/adminaksi' ?>" method="post">
        <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username">
        <?php echo form_error('username'); ?>
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
        <?php echo form_error('password'); ?>
        <input type="submit" class="fadeIn fourth" value="Log In">
      </form>
  
      <!-- Remind Passowrd -->
      <div id="formFooter"> 
      <a class="underlineHover" href="<?php echo base_url().'home' ?>">Home | </a>
      <a class="underlineHover" href="https://wa.link/cp6zg7">Forgot Password?</a>
      </div>
  
    </div>
    </div>
</body>
</html>
