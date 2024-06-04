
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
        <a href="<?php echo base_url().'dashboard/paket'; ?>"><h3 class="main--title">Kembali</h3></a>
        <div class="table-container">
            <form method="post" action="<?php echo base_url('dashboard/paket_update') ?>">
                <table>
                    <?php foreach($produk as $p){ ?>
                    <thead>
                        <tr>
                            <th colspan="2">EDIT PAKET</th>
                        </tr>
                    </thead>
                    <tbody>
                            <td>Nama Paket</td>
                            <input type="hidden" name="id" value="<?php echo $p->produk_id; ?>">
                            <td><input type="text" class="form-control" name="nama" placeholder="Masukkan nama paket" value="<?php echo $p->produk_nama; ?>"></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><input type="number" class="form-control" name="harga" placeholder="Masukkan harga paket" value="<?php echo $p->produk_harga; ?>"></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td><input type="textarea" class="form-control" name="keterangan" placeholder="Masukkan keterangan paket" value="<?php echo $p->produk_keterangan; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Foto Deskripsi</td>
                            <td><input type="file" id="foto" class="form-control" name="foto" accept="image/*">
                            <small>(Kosongkan jika tidak ingin diubah)</small>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                    </tfoot>
                    <?php } ?>
                </table>
                <br>
                <a><h3 class="main--title">
                <input type="submit" class="btn btn-sm btn-primary" value="SIMPAN">
                </h3></a>
            </form>
        </div>
        </div>
    </div>
</body>
</html>

