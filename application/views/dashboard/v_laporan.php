
<div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Primary</span>
                <h2>Laporan Transaksi</h2>
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
            <div class="table-container">
            <table>            
            <thead>
                <tr>
                    <th width="17%">Tanggal </th>
                    <th width="15%">Kode Referensi</th>
                    <th>Nama Customer</th>
                    <th width="5%">Foto</th>
                    <th width="20%">Update Status</th>
                    <th width="15%">Nominal</th>
                </tr>
            </thead>
                <tbody align="left">
                <?php
                foreach ($pembayaran as $b) { ?>
                <?php 
                $custid = $b->customer_id;
                $cust = $this->db->query("select * from pembayaran where customer_id = '$custid'");
		        $c = $cust->row()
	            ?>
                <tr>
                    <td>
                        <?php echo $b->tanggal_bayar; ?>
                    <td>
                        MHS<?php echo $b->jenis_bayar; ?>0<?php echo $b->bayar_id; ?>00<?php echo $b->customer_id; ?>
                    </td>
                    <td>
                    <?php
                        foreach($customer as $c){
                        $custid = $b->customer_id;
                        $cust = $this->db->query("select customer_nama from customer where customer_id = '$custid'");
                        $c = $cust->row();
                        }?>
                        <?php echo $c->customer_nama; ?>
                    </td>
                    <td align="center">
                    <a href="<?php echo base_url(); ?><?php echo $b->bukti_bayar; ?>">
						<img src="<?php echo base_url(); ?><?php echo $b->bukti_bayar; ?>" style="width: 100%;height: auto">
					</a>
                    </td>
                    <td align="center">
                    <?php 
                    $status=$b->status_bayar;
                    if($status=="confirmed"){
                        echo "Pembayaran dikonfirmasi";
                    }else{
                        echo "Menunggu Konfirmasi";
                    }
                    ?>                          
                    </td>
                    <td>
                        <?php echo "Rp. ".number_format($b->nominal_bayar).",-";?>
                    </td>
                </tr>
                <?php } ?>
                    <?php
                    $jumlah = $this->db->query("select sum(total) as jumlah from detailpembayaran");

                    foreach ($jumlah->result() as $bayar)
                    {
                        ?>
                <tr>
                    <td colspan="5" align="right"><b>Total Bayar</b></td>
                    <td><b><?php echo "Rp. ".number_format($bayar->jumlah).".000.000,-"; ?></b></td>
                </tr>
                    <?php } ?>
                <tr>
              </tbody>
              <tfoot>
              </tfoot>
          </table>
          </div>
        </div>






