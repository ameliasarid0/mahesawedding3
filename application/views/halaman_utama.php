<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> DATA SISWA </h3>
    <table border="1" cellpadding="10">
        <tr>
            <td>No</td>
            <td>Nim</td>
            <td>Nama</td>
            <td>Jenis kelamin</td>
            <td>Alamat </td>
            <td>Foto</td>
            <td>Opsi</td>
        </tr>
        <?php
        $no = 1;
        foreach($tampil as $data) {
        ?>
        <tr>
            <td><?php echo $no++ ?></td> 
            <td><?php echo $data->nim ?></td>
            <td><?php echo $data->nama ?></td>
            <td><?php echo $data->jk ?></td>
            <td><?php echo $data->alamat ?></td>
            <td><img src="<?php echo base_url('gambar/') . $data->foto?>" width="100"></td>
            <td><a href="<?php echo base_url('Home/panggil_siswa/') .  $data->nim ?>"> Update </a> |
                <a href="<?php echo base_url('Home/delete/') . $data->nim ?>"> Delete </a></td>
        </tr>
        <?php } ?>
    </table>
    <form action="<?php echo base_url('Home/tambah'); ?>" method="post">
    <input type="submit" value="Tambah">
    </form>
</body>
</html>