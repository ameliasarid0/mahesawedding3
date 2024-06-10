
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
                <i class="fas fa-user icon blue"></i>
            </div>
        </div>
        <div class="tabular--wrapper">
        <?php 
			$id_user = $this->session->userdata('id');
            if ($id_user ==1){
		?>
            <a href="<?php echo base_url().'dashboard/admin_tambah'; ?>"><h3 class="main--title">Tambah Admin</h3></a>
            <?php }?>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th width="10%">NO</th>
						    <th>Nama</th>
						    <th width="40%">Username</th>
                            <?php 
			                $id_user = $this->session->userdata('id');
                            if ($id_user ==1){
		                    ?>
						    <th width="10%" colspan="2">OPSI</th>
                            <?php }?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
						if(isset($_GET['alert'])){
							if($_GET['alert'] == "gagal"){
								echo "<div class='alert error'>Update data gagal</div>";
							}elseif($_GET['alert'] == "berhasil"){
								echo "<div class='alert success'><strong>Update data berhasil</div>";
                            }elseif($_GET['alert'] == "hapus"){
								echo "<div class='alert error'><strong>Data sudah dihapus</div>";
							}elseif($_GET['alert'] == "tambah"){
								echo "<div class='alert success'>Data berhasil ditambahkan</div>";
							}
						}
						?>

                        <?php 
						$no = 1;
						foreach($admin as $p){ 
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $p->admin_nama; ?></td>
							<td><?php echo $p->admin_username; ?></td>
                            <?php 
			                $id_user = $this->session->userdata('id');
                            if ($id_user ==1){
		                    ?>
							<td>
								<a href="<?php echo base_url().'dashboard/admin_edit/'.$p->admin_id; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-pencil">    </i> </a>
                            </td>
                            <td>
								<a onclick="return confirm('Yakin menghapus <?php echo $p->admin_nama; ?> ?')" href="<?php echo base_url().'dashboard/admin_hapus/'.$p->admin_id; ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </a>
							</td>
                            <?php } ?>
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






