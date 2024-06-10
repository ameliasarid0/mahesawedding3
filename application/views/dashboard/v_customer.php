
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
            <a href="<?php echo base_url().'home/daftar'; ?>"><h3 class="main--title">Tambah Customer</h3></a>
            <div class="table-container">
                <table>
                    <thead>
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
                        <tr>
                            <th width="5%">NO</th>
                            <th>NAMA</th>
                            <th>EMAIL</th>
                            <th>NO HP</th>
                            <th>STATUS AKUN</th>
                            <th width="10%">BUKTI BAYAR</th>
                            <th width="8%">EDIT</th>
                            <?php 
			                $id_user = $this->session->userdata('id');
                            if ($id_user ==1){
		                    ?>
                            <th width="8%">HAPUS</th>
                            <?php } ?>
                            <th width="8%">KIRIM WA</th>
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
                            <td><strong><?php echo $c->customer_status; ?></strong></td>
                            <td>                                
                                <a href="<?php echo base_url(); ?><?php echo $c->customer_bukti; ?>">
								<img src="<?php echo base_url(); ?><?php echo $c->customer_bukti; ?>" style="width: 100%;height: auto">
								</a>
                            </td>
                            <td align ="center">            
                            <a href="<?php echo base_url().'dashboard/customer_edit/'.$c->customer_id; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-pencil"></i> </a>
                            </td>
                            <?php 
			                $id_user = $this->session->userdata('id');
                            if ($id_user ==1){
		                    ?>
                            <td align ="center">
                            <a onclick="return confirm('Yakin menghapus <?php echo $c->customer_nama; ?> ?')" href="<?php echo base_url().'dashboard/customer_hapus/'.$c->customer_id; ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </a>
                            </td>
                            <?php } ?>
                            <td align ="center">            
                            <a href="https://api.whatsapp.com/send?phone=62<?php echo $c->customer_hp;?>&text=*PENDAFTARAN%20BERHASIL*%0ASilahkan%20melakukan%20login%20dengan%20rincian%20akun%20sebagai%20berikut%20%3A%20%0A*Username%20%3A%20<?php echo $c->customer_email; ?>*%0A*Password%20%3A%20<?php echo $c->customer_ttl; ?>*%0A%0ATerimakasih%0A*-Admin%20Mahesa%20Wedding-*" class="btn btn-warning btn-sm"> <i class="fa fa-commenting"></i> </a>
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
