<html>
<head>
    <title> Form Tambah Siswa </title>
</head>
<body>
    <form action="<?php echo base_url('Home/update/'). $tampil['nim'] ?>" method="post">
    <pre>
    NIM             : <input type="text" value="<?php echo $tampil['nim']?>" name="txtnim" size="19" maxlength="25">

    Nama            : <input type="text" value="<?php echo $tampil['nama']?>" name="txtnama" size="19" maxlength="25">
    Jenis Kelamin   : <input type="radio" name="gender" value="Laki-laki" <?php if($tampil['jk']=="Laki-laki") {?> checked <?php }?>> Laki-laki <input type="radio" name="gender" value="Perempuan" <?php if($tampil['jk']=="Perempuan") {?> checked <?php }?>> Perempuan
    Alamat          : <textarea rows=”20” cols=”80” name="txtalamat"> <?php echo $tampil['alamat']?></textarea>

    Foto            : <input type="file" name="gambar" size="19" maxlength="25">
    <input type="submit" value="Kirim"> 
    </pre>
    </form>
</body>
</html>