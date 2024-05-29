
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
                <img src="<?php echo base_url('img/foto_user/user.jpg') ?>" alt="">
            </div>
        </div>

        <div class="tabular--wrapper">
        <a href="<?php echo base_url().'dashboard/customer'; ?>"><h3 class="main--title">Kembali</h3></a>
        <div class="table-container">
            <form method="post" action="<?php echo base_url('dashboard/customer_aksi') ?>">
                <table>
                    <thead>
                        <tr>
                            <th colspan="2">EDIT DATA CUSTOMER</th>
                        </tr>
                    </thead>
                            <td>Nama</td>
                            <input type="hidden" name="id">
                            <td>
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan nama customer">
								<?php echo form_error('nama'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>
                                <input type="email" class="form-control" name="email" placeholder="Masukkan email customer">
								<?php echo form_error('email'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>No Hp</td>
                            <td>            
                                <input type="text" class="form-control" name="hp" placeholder="Masukkan no.hp customer" >
								<?php echo form_error('hp'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>
                                <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat customer">
								<?php echo form_error('alamat'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>
                                <input type="password" class="form-control" name="password" placeholder="Masukkan password customer" >
								<?php echo form_error('password'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat Resepsi</td>
                            <td>
                            <input type="text" class="form-control" name="alamatrsp" placeholder="Masukkan alamat resepsi">
							<?php echo form_error('alamatrsp'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Kota</td>
                            <td>
                            <select id="kota" class="fadeIn third" name="kota">
                                <option value="--">Pilih Kota</option>
                                <option value="Karawang">Karawang</option>
                                <option value="Bekasi">Bekasi</option>
                                <option value="Subang">Subang</option>
                                <option value="Purwakarta">Purwakarta</option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Paket</td>
                            <td>
                            <select id="paket" class="fadeIn third" name="paket">
                                <option value="--">Pilih Paket</option>
                                <option value="20JT">Paket 20JT</option>
                                <option value="22JT">Paket 22JT</option>
                                <option value="25JT">Paket 25JT</option>
                                <option value="27JT">Paket 27JT</option>
                                <option value="30JT">Paket 30JT</option>
                                <option value="35JT">Paket 35JT</option>
                            </select>
							<?php echo form_error('paket'); ?>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
                <br>
                <a><h3 class="main--title">
                <input type="submit" class="btn btn-sm btn-primary" value="SIMPAN">
                </h3></a>
            </form>
        </div>
        </div>
    </div>
</body>
</html>

