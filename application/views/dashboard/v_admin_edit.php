
<div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Primary</span>
                <h2>Data Admin</h2>
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
        <a href="<?php echo base_url().'dashboard/admin'; ?>"><h3 class="main--title">Kembali</h3></a>
        <div class="table-container">
            <form method="post" action="<?php echo base_url('dashboard/admin_update') ?>">
                <table>
                    <thead>
                        <tr>
                            <th colspan="2">EDIT DATA ADMIN</th>
                        </tr>
                    </thead>
                        <?php 
                        foreach($admin as $p){
                        ?>
                        <tr>
                            <td>Nama</td>
                            <input type="hidden" name="id" value="<?php echo $p->admin_id; ?>">
                            <td>
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama admin" value="<?php echo $p->admin_nama; ?>">
								<?php echo form_error('nama'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>
                                <input type="text" class="form-control" name="username" placeholder="Masukkan username admin" value="<?php echo $p->admin_username; ?>">
								<?php echo form_error('username'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>
                                <input type="password" class="form-control" name="password" placeholder="Masukkan password admin" >
                                <small>(Kosongkan jika tidak ingin diubah)</small>
								<?php echo form_error('password'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Foto</td>
                            <td>
                                <input type="file" class="form-control" name="foto">
                                <br/>
                                <?php 
                                if(isset ($gambar_error)){
                                    echo $gambar_error;
                                } 
                                ?>
								<?php echo form_error('foto'); ?>
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
            <?php 
                        }
                        ?>
        </div>
        </div>
    </div>
    </body>
</html>






