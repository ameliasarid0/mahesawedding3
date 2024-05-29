
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
            <a href="<?php echo base_url().'dashboard/admin_tambah'; ?>"><h3 class="main--title">Tambah Admin</h3></a>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th width="10%">NO</th>
						    <th>Nama</th>
						    <th width="40%">Username</th>
						    <th width="10%" colspan="2">OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
						$no = 1;
						foreach($admin as $p){ 
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $p->admin_nama; ?></td>
							<td><?php echo $p->admin_username; ?></td>
							<td>
								<a href="<?php echo base_url().'dashboard/admin_edit/'.$p->admin_id; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-pencil">    </i> </a>
								<?php if($p->admin_id != 1){ ?>
                            </td>
                            <td>
								<a onclick="return confirm('Yakin ?')" href="<?php echo base_url().'dashboard/admin_hapus/'.$p->admin_id; ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </a>
								<?php } ?>
							</td>
						</tr>
						<?php } ?>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    </body>
</html>






