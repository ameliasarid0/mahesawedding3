<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MAHESA WEDDING</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>css/style_login.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body>
    <div class="wrapper fadeInDown">
    <div id="formcontent">
      <div class="main--content">
        <?php 
	  			$id = $_SESSION['customer_id'];
					$customer = $this->db->query("select * from customer where customer_id='$id'");
					$i = $customer->row();
				?>
        <div class="header--wrapper">
            <div class="header--title">
              <a href="<?php echo base_url().'home/customer' ?>">
                <h2>Dashboard</h2>
              </a>
              <a href="<?php echo base_url().'home/customer' ?>">
                <h2>Pesanan</h2>
              </a>
              <a href="<?php echo base_url().'home/customer' ?>">
                <h2>Laporan</h2>
              </a>
              <a href="<?php echo base_url().'home/keluar' ?>">
                <h2>Logout</h2>
              </a>
            </div>
            <div class="user--info">
                <div class="search--box">
                  <span>Selamat datang <?php echo $i->customer_nama ?> ! ! </span>
                </div>
                <i class="fas fa-user icon blue"></i>
            </div>
        </div>