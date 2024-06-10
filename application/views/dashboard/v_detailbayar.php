
<div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Primary</span>
                <h2>Detail Pembayaran</h2>
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
                    <th colspan="6">RINCIAN PEMBAYARAN</th>
                </tr>
            </thead>
            
            <?php 
            foreach($customer as $c){
            ?>
            <?php 
            $custpaket = $c->customer_paket;
            $produk = $this->db->query("select * from produk inner join customer on produk_nama = '$custpaket'");
		    $p = $produk->row()
	        ?>
                <tr>
                    <td width="20%">Nama Lengkap</td>
                    <td colspan="5"><?php echo $c->customer_nama ?></td>
                </tr>
                <tr>
                    <td>Total Tagihan</td>
                    <td colspan="5"><?php echo "Rp. ".number_format($p->produk_harga).",-"; ?></td>
                </tr>
                <tr>
                    <th> </th>
                </tr>
            <thead>
                <tr>
                    <th width="20%">Tanggal Bayar</th>
                    <th>Kode Referensi</th>
                    <th>Jenis Bayar</th>
                    <th>Nominal</th>
                    <th width="5%">Foto</th>
                    <th width="15%">Update Status</th>
                </tr>
            </thead>
                <tbody align="left">
                <?php
                foreach($pembayaran as $b){
                ?>
                <?php 
                $jenisbayar = $b->jenis_bayar;
                ?>
                <tr>
                    <td>
                        <?php echo $b->tanggal_bayar; ?>
                    <td>
                        MHS<?php echo $b->jenis_bayar; ?>0<?php echo $b->bayar_id; ?>00<?php echo $b->customer_id; ?>
                    </td>
                    <td>
                        <?php
                            if($jenisbayar == 'DP1'){
                                echo "Uang Muka ke-1";
                            }elseif($jenisbayar == 'DP2'){
                                echo "Uang Muka ke-2";
                            }elseif($jenisbayar == 'LNS'){
                                echo "Pelunasan";
                            }else{
                                echo "--";
                        }?>
                    </td>
                    <td>
                        <?php echo "Rp. ".number_format($b->nominal_bayar).",-";?>
                    </td>
                    <td align="center">
                    <a href="<?php echo base_url(); ?><?php echo $b->bukti_bayar; ?>">
						<img src="<?php echo base_url(); ?><?php echo $b->bukti_bayar; ?>" style="width: 100%;height: auto">
					</a>
                    </td>
                    <td align="center">
                        <form action="<?php echo base_url('dashboard/pembayaran_status') ?>" method="post">
                        <input type="hidden" value="<?php echo $b->bayar_id ?>" name="invoice">
                        <?php foreach ($customer as $c){?>
                        <input type= "hidden" value="<?php echo $c->customer_id?>" name="customerid"> 
                        <?php }?>
                        <select id="status" class="fadeIn third" name="status" onchange="form.submit()">
                            <option value="onprocess" <?php if($b->status_bayar =="onprocess") {?> selected <?php }?> >Menunggu Konfirmasi</option>
                            <option value="confirmed" <?php if($b->status_bayar =="confirmed") {?> selected <?php }?> >Pembayaran dikonfirmasi</option>
                        </select>
                        </form> 
                        <form action="<?php echo base_url('dashboard/nominal') ?>" method="post">
                        <?php foreach ($customer as $c){?>
                        <input type= "hidden" value="<?php echo $c->customer_id?>" name="customerid"> 
                        <?php }?>
                        <input type= "hidden" value="<?php echo $b->jenis_bayar?>" name="jenisbayar">
                        <input type= "hidden" value="<?php echo number_format($b->nominal_bayar);?>" name="nominal">                         
                    </td>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="3">Total Bayar</td>
                    <?php 
                    foreach($detailpembayaran as $d){
                    $dp1 = $d->dp1;
                    $dp2 = $d->dp2;
                    $pelunasan = $d->pelunasan;
                    $total = $dp1 + $dp2 + $pelunasan;
                    ?>
                        <td><b><?php echo "Rp. ".number_format($total).",-"; ?></b></td>
                    <?php } ?>

                    <td colspan="2" rowspan="2" align="center">
                    <input type="submit" class="btn btn-sm btn-primary" value="Update">
                    </form>
                </td>
                </tr>
              </tbody>
              <?php } ?>
              <tfoot>
              </tfoot>
          </table>
          </div>
        </div>






