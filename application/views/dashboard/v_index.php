
	<div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Primary</span>
                <h2>Dashboard</h2>
            </div>

            <div class="user--info">
                <div class="search--box">
                    <i class="fa-solid fa-search"></i>
                    <input type="text" placeholder="Search" />
                </div>
                <i class="fas fa-user icon blue"></i>
            </div>
        </div>
        <div class="card--container">
            <h3 class="main--title">Data Hari Ini</h3>
            <div class="card--wrapper">
                <div class="payment--card light-red">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">Jumlah Admin</span>
                            <span class="amount--value"><?php echo $jumlah_admin ?> orang</span>
                        </div>
                        <i class="fas fa-user icon"></i>
                    </div>
                </div>

                <div class="payment--card light-purple">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">Jumlah Customer</span>
                            <span class="amount--value"><?php echo $jumlah_customer ?> orang</span>
                        </div>
                        <i class="fas fa-users icon dark-purple"></i>
                    </div>
                </div>

                <div class="payment--card light-green">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">Jumlah Paket</span>
                            <span class="amount--value"><?php echo $jumlah_paket ?> paket</span>
                        </div>
                        <i class="fas fa-list icon dark-green"></i>
                    </div>
                </div>

                <div class="payment--card light-blue">
                    <div class="card--header">
                        <div class="amount">
                            <?php
                            $jumlah = $this->db->query("select sum(total) as jumlah from detailpembayaran");

                            foreach ($jumlah->result() as $bayar)
                            {
                            ?>
                            <span class="title">Total Transaksi</span>
                            <span class="amount--value"><?php echo "Rp ".number_format($bayar->jumlah)."jt"; ?></span>
                    <?php } ?>
                            
                        </div>
                        <i class="fa-solid fa-dollar icon dark-green"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="tabular--wrapper">
            <div class="table-container">
            <table>
                <thead>
                    <tr>
                    <th width="10%" colspan="3">SELAMAT DATANG ! !</th>
                    <tr>
                </thead>
                <tbody>
                    <tr>
                        <th width="%">Nama</th>
				        <th width="1px">:</th>
				        <th>
					        <?php 
						    $id_user = $this->session->userdata('id');
						    $user = $this->db->query("select * from admin where admin_id='$id_user'")->row();
					        ?>
					        <p><?php echo $user->admin_nama; ?></p>
				        </th>
				    </tr>
					<tr>
					    <th width="20%">Username</th>
					    <th width="1px">:</th>
					    <th><?php echo $this->session->userdata('username') ?></th>
					</tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
    </body>
</html>