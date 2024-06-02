
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
            <form method="post" action="<?php echo base_url('dashboard/paket_aksi') ?>">
                <table>
                    <thead>
                        <tr>
                            <th colspan="2">TAMBAH PAKET</th>
                        </tr>
                    </thead>
                    <tbody>
                            <td>Nama Paket</td>
                            <input type="hidden" name="id">
                            <td><input type="text" class="form-control" name="nama" placeholder="Masukkan nama paket"></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><input type="number" class="form-control" name="harga" placeholder="Masukkan harga paket"></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td><input type="text" class="form-control" name="keterangan" placeholder="Masukkan keterangan paket">
                            </td>
                        </tr>
                        
                    </tbody>
                    <tfoot>
                    </tfoot>
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

