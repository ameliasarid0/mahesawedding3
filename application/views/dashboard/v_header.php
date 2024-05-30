<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Design</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>css/style_dash.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <a href="<?php echo base_url().'dashboard' ?>">
			<img src="<?php echo base_url('assets/mahesa_logo(2).png') ?>" alt="">
            </a>
        </div>
		<ul class="menu">
            <li>
                <a href="<?php echo base_url().'dashboard' ?>">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="<?php echo base_url().'dashboard/admin' ?>">
                    <i class="fas fa-user"></i>
                    <span>Admin</span>
                </a>
            </li>

            <li>
				<a href="<?php echo base_url().'dashboard/customer' ?>">
                    <i class="fas fa-user"></i>
                    <span>Customer</span>
                </a>
            </li>

            <li>
                <a href="<?php echo base_url().'dashboard/paket' ?>">
                    <i class="fas fa-th-list"></i>
                    <span>Paket</span>
                </a>
            </li>

            <li>
                <a href="<?php echo base_url().'dashboard/transaksi' ?>">
                    <i class="fas fa-usd"></i>
                    <span>Pesanan</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fas fa-file"></i>
                    <span>Laporan</span>
                </a>
            </li>

            <li>
                <a href="<?php echo base_url().'dashboard/keluar' ?>">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>