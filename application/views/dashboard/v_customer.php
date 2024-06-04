
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
            <a href="<?php echo base_url().'dashboard/customer_tambah'; ?>"><h3 class="main--title">Tambah Customer</h3></a>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th width="5%">NO</th>
                            <th>NAMA</th>
                            <th>EMAIL</th>
                            <th>HP</th>
                            <th>ALAMAT</th>
                            <th>KOTA</th>
                            <th width="10%" colspan="2">OPSI</th>
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
                            <td><?php echo $c->customer_alamat; ?></td>
                            <td><?php echo $c->customer_kota; ?></td>
                            <td>            
                            <a href="<?php echo base_url().'dashboard/customer_edit/'.$c->customer_id; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-pencil"></i> </a>
                            </td>
                            <td>
                            <a href="<?php echo base_url().'dashboard/customer_hapus/'.$c->customer_id; ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </a>
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
