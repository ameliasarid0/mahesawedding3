<div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Primary</span>
                <h2>Detail Pesanan</h2>
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
        <a href="<?php echo base_url().'dashboard/pesanan'; ?>"><h3 class="main--title">Kembali</h3></a>
            <div class="table-container">
            <table>
            <thead>
              <tr>
                <th colspan="4">DATA PESANAN</th>
              </tr>
            </thead>
            <?php 
            foreach($customer as $i){
            ?>
            <?php 
            $custpaket = $i->customer_paket;
            $produk = $this->db->query("select * from produk inner join customer on produk_nama = '$custpaket'");
		    $p = $produk->row()
	        ?>
            <tbody align="left">
              <tr>
              <td width="20%">Nama Lengkap</td>
              <td><?php echo $i->customer_nama ?></td>
              <td rowspan="8" width="30%">
                <a href="<?php echo base_url(); ?><?php echo $p->produk_foto; ?>">
				<img src="<?php echo base_url(); ?><?php echo $p->produk_foto; ?>" style="width: 100%;height: auto">
				</a>
              </td>
              </tr>
              <tr>
				<td >Tanggal Resepsi</td>
				<td><?php echo $i->customer_tglrsp ?></td>
			</tr>
				<tr>
					<td>Lokasi Resepsi</td>		
					<td><?php echo $i->customer_lokasirsp ?></td>
				</tr>
				<tr>
					<td>Kota</td>	
					<td><?php echo $i->customer_kota ?></td>
              </tr>
              <tr>
					<td>No Telepon</td>	
					<td><?php echo $i->customer_hp ?></td>
			  </tr>
              <tr>
					<td>Paket</td>	
					<td><?php echo $i->customer_paket ?></td>
              </tr>
              <tr>
					<td>Harga Paket</td>	
					<td><?php echo "Rp. ".number_format($p->produk_harga).",-"; ?></td>
              </tr>
              <tr>
					<td>Keterangan</td>	
					<td><?php echo $p->produk_keterangan ?></td>
              </tr>
            </tbody>
            <?php } ?>
              <tfoot>
              </tfoot>
          </table>
          </div>
        </div>
    

  

 