
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
                <i class="fas fa-user icon blue"></i>
            </div>
        </div>

        <div class="tabular--wrapper">
        <a href="<?php echo base_url().'dashboard/customer'; ?>"><h3 class="main--title">Kembali</h3></a>
        <div class="table-container">
            <form method="post" action="<?php echo base_url('dashboard/customer_update') ?>">
                <table>
                    <thead>
                        <tr>
                            <th colspan="2">EDIT DATA CUSTOMER</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach($customer as $c){
                        ?>
                        <tr>
                            <td>Nama</td>
                            <input type="hidden" name="id" value="<?php echo $c->customer_id; ?>">
                            <td>
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama customer" value="<?php echo $c->customer_nama; ?>">
								<?php echo form_error('nama'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>
                                <input type="email" class="form-control" name="email" placeholder="Masukkan email customer" value="<?php echo $c->customer_email; ?>">
								<?php echo form_error('email'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>No Hp</td>
                            <td>            
                                <input type="text" class="form-control" name="hp" placeholder="Masukkan no.hp customer" value="<?php echo $c->customer_hp; ?>">
								<?php echo form_error('hp'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>
                                <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat customer" value="<?php echo $c->customer_alamat; ?>">
								<?php echo form_error('alamat'); ?>
                            </td>
                        </tr>
                        <tr> 
                            <td>Tanggal Lahir</td>
                            <td>
                                <?php echo $c->customer_ttl; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>
                                <input type="password" class="form-control" name="password" placeholder="Masukkan password customer" >
								<?php echo form_error('password'); ?>
                                <small>(Update / Kosongkan jika tidak ingin diubah)</small>
                            </td>
                        </tr>
                        <tr>
                            <td>Lokasi Resepsi</td>
                            <td>
                            <input type="text" class="form-control" name="lokasirsp" placeholder="Masukkan lokasi resepsi" value="<?php echo $c->customer_lokasirsp; ?>">
							<?php echo form_error('lokasirsp'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Kota</td>
                            <td>
                            <select id="kota" class="fadeIn third" name="kota">
                                <option value="--">Pilih Kota</option>
                                <option value="Karawang" <?php if($c->customer_kota =="Karawang") {?> selected <?php }?> >Karawang</option>
                                <option value="Bekasi" <?php if($c->customer_kota =="Bekasi") {?> selected <?php }?> >Bekasi</option>
                                <option value="Subang" <?php if($c->customer_kota =="Subang") {?> selected <?php }?> >Subang</option>
                                <option value="Purwakarta" <?php if($c->customer_kota =="Purwakarta") {?> selected <?php }?> >Purwakarta</option>
                            </select>
                            <?php echo form_error('kota'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Paket</td>
                            <td>
                            <select id="paket" class="fadeIn third" name="paket">
                                <option value="--">Pilih Paket</option>
                                <option value="PAKET 20JT" <?php if($c->customer_paket =="PAKET 20JT") {?> selected <?php }?> >Paket 20JT</option>
                                <option value="PAKET 22JT" <?php if($c->customer_paket =="PAKET 22JT") {?> selected <?php }?> >Paket 22JT</option>
                                <option value="PAKET 25JT" <?php if($c->customer_paket =="PAKET 25JT") {?> selected <?php }?> >Paket 25JT</option>
                                <option value="PAKET 27JT" <?php if($c->customer_paket =="PAKET 27JT") {?> selected <?php }?> >Paket 27JT</option>
                                <option value="PAKET 30JT" <?php if($c->customer_paket =="PAKET 30JT") {?> selected <?php }?> >Paket 30JT</option>
                                <option value="PAKET 35JT" <?php if($c->customer_paket =="PAKET 35JT") {?> selected <?php }?> >Paket 35JT</option>
                            </select>
							<?php echo form_error('paket'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>STATUS AKUN</strong></td>
                            <td>
                            <select id="status" class="fadeIn third" name="status">
                                <option value="BELUM AKTIF">BELUM AKTIF</option>
                                <option value="AKTIF" <?php if($c->customer_status =="AKTIF") {?> selected <?php }?> >AKTIF</option>
                            </select>
                            <?php echo form_error('status'); ?>
                            <small>(Wajib diubah jika akun sudah di seting/reset password)</small>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
                <br>
                <a onclick="return confirm('Apakah status akun sudah benar ?')"><h3 class="main--title">
                <input type="submit" class="btn btn-sm btn-primary" value="SIMPAN">
                </h3></a>
            </form>
            <?php 
                        }
                        ?>
        </div>
        </div>
    </div>
</body>
</html>

