<html>
<head>
    <title> Form Tambah Siswa </title>
</head>
<body>
    <form action="<?php echo base_url('Home/simpan'); ?>" method="post">
    <pre>
    NIM             : <input type="text" name="txtnim" size="19" maxlength="25">

    Nama            : <input type="text" name="txtnama" size="19" maxlength="25">
    Jenis Kelamin   : <input type="radio" name="gender" value="Laki-laki"> Laki-Laki <input type="radio" name="gender" value="Perempuan"> Perempuan
    Alamat          : <textarea rows=”20” cols=”80” name="txtalamat"> </textarea>

    Foto            : <input type="file" name="gambar" size="19" maxlength="25">
    <input type="submit" value="Kirim"> 
    </pre>
    </form>
</body>
</html>