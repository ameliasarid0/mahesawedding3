<div class="tabular--wrapper">
            <div class="table-container">
            <table>
            <?php 
	  		$id = $_SESSION['customer_id'];
			$customer = $this->db->query("select * from customer where customer_id='$id'");
			$i = $customer->row();
			?>
            <?php 
            $custpaket = $i->customer_paket;
            $produk = $this->db->query("select * from produk inner join customer on produk_nama = '$custpaket'");
			$p = $produk->row()
			?>
            <thead>
              <tr>
                <th colspan="3">DATA PESANAN</th>
              </tr>
            </thead>
            <tbody align="left">
            <tr>
							<tr>
								<td width="20%">Tanggal Resepsi</td>
								<td><?php echo $i->customer_tglrsp ?></td>
                                <td rowspan="7" width="30%">
                                <a href="<?php echo base_url(); ?><?php echo $p->produk_foto; ?>">
								<img src="<?php echo base_url(); ?><?php echo $p->produk_foto; ?>" style="width: 100%;height: auto">
								</a>
                                </td>
							</tr>
							<tr>
								<td width="20%">Lokasi</td>		
								<td><?php echo $i->customer_lokasirsp ?></td>
							</tr>
							<tr>
								<td>Kota</td>	
								<td><?php echo $i->customer_kota ?></td>
                            </tr>
                            <tr>
								<td>HP</td>	
								<td><?php echo $i->customer_hp ?></td>
							</tr>
                            <tr>
								<td>Paket</td>	
								<td><?php echo $i->customer_paket ?></td>
                            </tr>
                            <tr>
								<td>Harga</td>	
								<td><?php echo "Rp. ".number_format($p->produk_harga).",-"; ?></td>
                            </tr>
                            <tr>
								<td>Keterangan</td>	
								<td><?php echo $p->produk_keterangan ?></td>
                            </tr>
				        </th>
              </tr>
              </tbody>
              <tfoot>
              </tfoot>
          </table>
          </div>
        </div>
    

  

 