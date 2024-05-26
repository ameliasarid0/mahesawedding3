<body>
    <div class="sidebar">
        <div class="logo">
            <a href="<?php echo base_url().'dashboard' ?>">
			<img src="<?php echo base_url('assets/mahesa_logo2.png') ?>" alt="">
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
                <a href="#">
                    <i class="fas fa-th-list"></i>
                    <span>Pesanan</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fas fa-usd"></i>
                    <span>Pembayaran</span>
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
	<div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Primary</span>
                <h2>Data Customer</h2>
            </div>

            <div class="user--info">
                <div class="search--box">
                    <i class="fa-solid fa-search"></i>
                    <input type="text" placeholder="Search" />
                </div>
                <img src="<?php echo base_url('img/user.jpg') ?>" alt="">
            </div>
        </div>
        <div class="tabular--wrapper">
            <a href="<?php echo base_url().'dashboard/customer_tambah'; ?>"><h3 class="main--title">Tambah Customer</h3></a>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th width="10%">NO</th>
                            <th>NAMA</th>
                            <th>EMAIL</th>
                            <th>HP</th>
                            <th>ALAMAT</th>
                            <th width="10%">OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        foreach($customer as $c){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $c->customer_nama; ?></td>
                            <td><?php echo $c->customer_email; ?></td>
                            <td><?php echo $c->customer_hp; ?></td>
                            <td><?php echo $c->customer_alamat; ?></td>
                            <td>            
                            <a href="<?php echo base_url().'dashboard/customer_edit/'.$c->customer_id; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-pencil"></i> </a>
                            <a href="<?php echo base_url().'dashboard/customer_hapus/'.$c->customer_id; ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    </body>
</html>
