
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
                            <th>NO.INVOICE</th>
                            <th>TANGGAL</th>
                            <th>CUSTOMER</th>
                            <th>TOTAL BAYAR</th>
                            <th class="text-center">STATUS</th>
                            <th class="text-center">UPDATE STATUS</th>
                            <th class="text-center" width="25%">OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                  $no = 1;
                  foreach($transaksi as $t){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td>INVOICE-00<?php echo $t->invoice_id ?></td>
                      <td><?php echo date('d-m-Y', strtotime($t->invoice_tanggal)); ?></td>
                      <td><?php echo $t->customer_nama ?></td>
                      <td><?php echo "Rp. ".number_format($t->invoice_total_bayar)." ,-" ?></td>
                      <td class="text-center">
                        <?php 
                        if($t->invoice_status == 0){
                          echo "<span class='label label-warning'>Menunggu Pembayaran</span>";
                        }elseif($t->invoice_status == 1){
                          echo "<span class='label label-default'>Menunggu Konfirmasi</span>";
                        }elseif($t->invoice_status == 2){
                          echo "<span class='label label-danger'>Ditolak</span>";
                        }elseif($t->invoice_status == 3){
                          echo "<span class='label label-primary'>Dikonfirmasi & Sedang Diproses</span>";
                        }elseif($t->invoice_status == 4){
                          echo "<span class='label label-warning'>Dikirim</span>";
                        }elseif($t->invoice_status == 5){
                          echo "<span class='label label-success'>Selesai</span>";
                        }
                        ?>
                      </td>
                      <td class="text-center">
                        <form action="<?php echo base_url('dashboard/transaksi_status') ?>" method="post">
                          <input type="hidden" value="<?php echo $t->invoice_id ?>" name="invoice">
                          <select name="status" id="" class="form-control" onchange="form.submit()">
                            <option <?php if($t->invoice_status == "0"){echo "selected='selected'";} ?> value="0">Menunggu Pembayaran</option>
                            <option <?php if($t->invoice_status == "1"){echo "selected='selected'";} ?> value="1">Menunggu Konfirmasi</option>
                            <option <?php if($t->invoice_status == "2"){echo "selected='selected'";} ?> value="2">Ditolak</option>
                            <option <?php if($t->invoice_status == "3"){echo "selected='selected'";} ?> value="3">Dikonfirmasi & Sedang Diproses</option>
                            <option <?php if($t->invoice_status == "4"){echo "selected='selected'";} ?> value="4">Dikirim</option>
                            <option <?php if($t->invoice_status == "5"){echo "selected='selected'";} ?> value="5">Selesai</option>
                          </select>
                        </form>
                      </td>
                      <td class="text-center">    

                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#buktiPembayaran_<?php echo $t->invoice_id; ?>">
                          <i class="fa fa-search"></i> Bukti Pembayaran
                        </button>

                        <div class="modal fade" id="buktiPembayaran_<?php echo $t->invoice_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Bukti Pembayaran</h4>
                              </div>
                              <div class="modal-body">

                                <center>
                                  <?php 
                                  if($t->invoice_bukti == ""){
                                    echo "Bukti pembayaran belum diupload oleh pembeli/customer.";
                                  }else{
                                    ?>
                                    <img src="<?php echo base_url() ?>/gambar/bukti_pembayaran/<?php echo $t->invoice_bukti; ?>" alt="" style="width: 100%">
                                    <?php
                                  }
                                  ?>
                                </center>


                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>


                        <a class='btn btn-sm btn-success' href="<?php echo base_url() ?>dashboard/transaksi_invoice/<?php echo $t->invoice_id; ?>"><i class="fa fa-print"></i> Invoice</a>
                        <a class='btn btn-sm btn-danger' onclick="return confirm('Apakah anda yakin ingin menghapus pesanan ini?')" href="<?php echo base_url() ?>dashboard/transaksi_hapus/<?php echo $t->invoice_id; ?>"><i class="fa fa-trash"></i></a>
                      
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






