
<div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Primary</span>
                <h2>Daftar Paket</h2>
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
        <a href="<?php echo base_url().'dashboard/paket_tambah'; ?>"><h3 class="main--title">Tambah Paket Baru</h3></a>
        <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th width="1%">NO</th>
							<th>NAMA PRODUK</th>
							<th>HARGA</th>
							<th width="25%">KETERANGAN</th>
	    					<th width="20%">FOTO</th>
							<th width="10%" colspan="2">OPSI</th>
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
						$no=1;
						foreach($produk as $p){
						?>
	    				<tr>
			    			<td><?php echo $no++; ?></td>
							<td><?php echo $p->produk_nama; ?></td>
							<td><?php echo "Rp. ".number_format($p->produk_harga).",-"; ?></td>
							<td><?php echo $p->produk_keterangan; ?></td>
							<td>
								<div class="row">
								    <div class="col-md-3 no-padding">
									<center>
									    <?php if($p->produk_foto == ""){ ?>
							    	        <img src="<?php echo base_url(); ?>/img/paket_produk/paket.jpg" style="width: 100%;height: auto">
									    <?php }else{ ?>
											<a href="<?php echo base_url(); ?><?php echo $p->produk_foto; ?>">
									        <img src="<?php echo base_url(); ?><?php echo $p->produk_foto; ?>" style="width: 100%;height: auto">
											</a>
										<?php } ?>
									</center>
									</div>
								</div>
							</td>
							<td>                        
								<a href="<?php echo base_url().'dashboard/paket_edit/'.$p->produk_id; ?>"> <i class="fa fa-pencil icon dark-yellow"></i> </a>
							</td>
							<td>
								<a onclick="return confirm('Yakin menghapus <?php echo $p->produk_nama; ?> ?')" href="<?php echo base_url().'dashboard/paket_hapus/'.$p->produk_id; ?>"> <i class="fa fa-trash icon dark-red"></i> </a>
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






