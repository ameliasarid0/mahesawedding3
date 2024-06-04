
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
								<a href="<?php echo base_url().'dashboard/paket_edit/'.$p->produk_id; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-pencil"></i> </a>
							</td>
							<td>
								<a href="<?php echo base_url().'dashboard/paket_hapus/'.$p->produk_id; ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </a>
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






