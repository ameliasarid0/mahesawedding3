<div class="tabular--wrapper">
    <div class="table-container">
        <table>            
            <thead>
              <tr>
                <th colspan="4">PEMBAYARAN</th>
              </tr>
            </thead>
            <tbody align="left">
              <tr>
                <th width="45%" colspan="2">JENIS BAYAR</th>
                <th width="45%">NOMINAL</th>
                <th width="10%">BUKTI BAYAR</th>
              </tr>
              <tr>

              <form action="<?php echo base_url().'home/pembayaranaksi' ?>" method="post" enctype="multipart/form-data">
                <?php 
                foreach($customer as $c){
                ?>
              <input type="hidden" name="id" value="<?php echo $c->customer_id; ?>">
              <?php }?>
                <input type="hidden" id="status" name="status" value="onprocess">
                <td colspan="2">
                <select id="jenisbayar" class="fadeIn third" name="jenisbayar">
                  <option value="">Pilih</option>
                  <option value="DP1">Uang Muka ke-1</option>
                  <option value="DP2">Uang Muka ke-2</option>
                  <option value="LNS">Pelunasan</option>
                </select>
                </td>	
                <td>
                <select id="nominal" class="fadeIn third" name="nominal" required="required">
                  <option type="number" value="">Pilih</option>
                  <option type="number" value="1000000">1.000.000,-</option>
                  <option type="number" value="2000000">2.000.000,-</option>
                  <option type="number" value="3000000">3.000.000,-</option>
                  <option type="number" value="4000000">4.000.000,-</option>
                  <option type="number" value="5000000">5.000.000,-</option>
                  <option type="number" value="6000000">6.000.000,-</option>
                  <option type="number" value="7000000">7.000.000,-</option>
                  <option type="number" value="8000000">8.000.000,-</option>
                  <option type="number" value="9000000">9.000.000,-</option>
                  <option type="number" value="10000000">10.000.000,-</option>
                  <option type="number" value="11000000">11.000.000,-</option>
                  <option type="number" value="12000000">12.000.000,-</option>
                  <option type="number" value="13000000">13.000.000,-</option>
                  <option type="number" value="14000000">14.000.000,-</option>
                  <option type="number" value="15000000">15.000.000,-</option>
                  <option type="number" value="16000000">16.000.000,-</option>
                  <option type="number" value="17000000">17.000.000,-</option>
                  <option type="number" value="18000000">18.000.000,-</option>
                  <option type="number" value="19000000">19.000.000,-</option>
                  <option type="number" value="20000000">20.000.000,-</option>
                  <option type="number" value="21000000">21.000.000,-</option>
                  <option type="number" value="22000000">22.000.000,-</option>
                  <option type="number" value="23000000">23.000.000,-</option>
                  <option type="number" value="24000000">24.000.000,-</option>
                  <option type="number" value="25000000">25.000.000,-</option>
                  <option type="number" value="26000000">26.000.000,-</option>
                  <option type="number" value="27000000">27.000.000,-</option>
                  <option type="number" value="28000000">28.000.000,-</option>
                  <option type="number" value="29000000">29.000.000,-</option>
                  <option type="number" value="30000000">30.000.000,-</option>
                </select>
                </td>	
				<td>
                  <input type="file" id="foto" class="fadeIn third" name="foto" required="required" placeholder="Bukti Bayar" accept="image/*">
                </td>
              </tr>
              <tr>
                <td colspan="4">
                  <input type="submit" class="btn btn-sm btn-primary" value="Upload">
                </td>	 
              </tr>
              </tbody>
              <tfoot>
              </tfoot>
              </form>
        </table>
    </div>
</div>

<div class="tabular--wrapper">
    <div class="table-container">
        <table>            
            <thead>
                <tr>
                    <th colspan="6">RINCIAN PEMBAYARAN</th>
                </tr>
            </thead>
            <tbody align="left">
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
                    <td colspan="4"><?php echo $c->customer_nama ?></td>
                </tr>
                <tr>
                    <td>Total Tagihan</td>
                    <td colspan="4"><?php echo "Rp. ".number_format($p->produk_harga).",-"; ?></td>
                </tr>
                <tr>
                    <th> </th>
                </tr>
                <tr>
                    <th width="20%">Tanggal Bayar</th>
                    <th>Kode Referensi</th>
                    <th>Jenis Bayar</th>
                    <th width="15%" align="center">Status</th>
                    <th width="20%">Nominal</th>
                </tr>
                <?php
                foreach($pembayaran as $b){
                ?>
                <?php 
                $jenisbayar = $b->jenis_bayar;
                $status = $b->status_bayar;
                ?>
                <tr>
                    <td>                        
                        <?php echo $b->tanggal_bayar; ?>
                    </td>
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
                    <td align="center">
                        <?php
                            if($b->status_bayar =="onprocess"){?> 
                            <img src="<?php echo base_url('assets/onprocess.png') ?>" alt="" style="width: 50%;height: auto">
                            <?php }else{?>
                            <img src="<?php echo base_url('assets/confirmed.png') ?>" alt="" style="width: 50%;height: auto">
                            <?php }?>
                    </td>
                    <td>
                        <?php echo "Rp. ".number_format($b->nominal_bayar).",-";?>
                    </td>
                <?php } ?>
                </tr>
                <tr>
                    <th colspan="3"></th>
                    <th><b>Total Bayar</b></th>
                    <?php 
                    foreach($detailpembayaran as $d){
                    foreach($pembayaran as $b){
                    $status = $b->status_bayar;
                    $harga = $p->produk_harga; 
                    if($status =="confirmed"){
                    $dp1 = $d->dp1;
                    $dp2 = $d->dp2;
                    $pelunasan = $d->pelunasan;
                    $total = $dp1 + $dp2 + $pelunasan;?>
                    <form action="<?php echo base_url().'home/totalbayar'?>" method="post">
                    <input type="hidden" name="total" value="<?php echo number_format($total);?>">
                    
                    <?php if($total != 0){
                    ?>
                    <th><b><?php echo "Rp. ".number_format($total).",-"; ?></b></th>
                    <?php }else{?>
                    <th><b><?php echo "Rp. 0,-"; ?></b></th>
                    <?php }?>
                </tr>
                <tr>
                    <th colspan="3"></th>
                    <th><b>Sisa Bayar</b></th>
                    <?php if($total != 0){ ?>
                    <th><b><?php echo "Rp. ".number_format($harga-$total).",-"; ?></b></th>
                    <?php }else{?>
                    <th><b><?php echo "Rp. 0,-"; ?></b></th>
                    <?php }?>                
                </tr>
                <tr>
                    <th colspan="3">
                    </th>
                    <th colspan="2">
                    <?php
                    if($total == $harga){?>
                    <img src="<?php echo base_url('assets/lunas.jpg') ?>" alt="" style="width: 60%;height: auto"></th>
                    <?php }?>
                </tr>
                <tr>
                    <th>
                    <?php 
                    foreach($customer as $c){
                    ?>
                    <input type="hidden" name="id" value="<?php echo $c->customer_id;?>">
                    <?php }?>
                    <input type="submit" value="Refresh">
                    </form></th>
                    <?php break; } } }?>
                </tr>
              </tbody>
              <?php } ?>
              <tfoot>
              </tfoot>
        </table>
        
    </div>
</div>