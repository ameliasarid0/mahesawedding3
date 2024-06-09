
<div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Primary</span>
                <h2>Data Pesanan</h2>
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
                            <th width="1%">NO</th>
                            <th>NAMA</th>
                            <th>EMAIL</th>
                            <th>PAKET</th>
                            <th width="10%">TANGGAL ACARA</th>
                            <th width="10%">LOKASI KOTA</th>
                            <th width="10%">STATUS BAYAR</th>
                            <th width="15%">OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1; 
                        foreach ($customer as $c) { ?>
                        <?php 
                        $custpaket = $c->customer_paket;
                        $produk = $this->db->query("select * from produk inner join customer on produk_nama = '$custpaket'");
		                $p = $produk->row()
	                    ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $c->customer_nama; ?></td>
                          <td><?php echo $c->customer_email; ?></td>
                          <td><?php echo $c->customer_paket; ?></td>
                          <td><?php echo $c->customer_tglrsp; ?></td>
                          <td><?php echo $c->customer_kota; ?></td>
                          <td>
                            <?php
                            foreach($detailpembayaran as $d){
                            $custid = $c->customer_id;
                            $detail = $this->db->query("select * from detailpembayaran where customer_id = '$custid'");
                            $d = $detail->row();
                            $harga = $p->produk_harga;
                            $bayar = $d->customer_id;
                            $total = $d->total.'000000';
                            }?>
                            <?php
                            if($total==$harga){?>
                                <img src="<?php echo base_url('assets/lunas.jpg') ?>" alt="" style="width: 100%;height: auto"></th> 
                            <?php }else{
                                echo "</th>";
                            }?>

                          </td>
                          <td>
                            <a href="<?php echo base_url().'dashboard/detailpesan/'.$c->customer_id; ?>">
                            <h4><span>Detail Pesanan</span></h4>
                            </a>
                        <br>
                            <a href="<?php echo base_url().'dashboard/detailbayar/'.$c->customer_id; ?>">
                            <h4><span>Detail Pembayaran</span></h4>
                            </a>
                          </td>
                        <?php } ?>
                        </tr>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    </body>
</html>






