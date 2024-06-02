<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MAHESA WEDDING</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>css/style_login.css" />
</head>
<body align="center">
    <div class="wrapper fadeInDown">
    <div id="formcontent">
      <!-- Icon -->
      <div class="fadeIn first">
        <img src="<?php echo base_url() ?>img/mahesa_logo.png" id="icon1" />
      </div>
      <pre>
<form action="<?php echo base_url().'home/daftaraksi' ?>" method="post" enctype="multipart/form-data">
<input type="text" id="nama" class="fadeIn second" name="nama" placeholder="Nama Lengkap">
<input type="email" id="email" class="fadeIn third" name="email" placeholder="Email">
<input type="text" id="alamat" class="fadeIn third" name="alamat" placeholder="Alamat Tinggal">
<input type="text" id="nohp" class="fadeIn third" name="hp" placeholder="Nomor Whatsapp">
<input type="text" id="password" class="fadeIn third" name="password" placeholder="Password">

<font color="#19709c">_____________________________________________________________________________________________________________________________</font>

<input type="text" id="alamat" class="fadeIn third" name="alamatrsp" placeholder="Alamat Resepsi">
<select id="kota" class="fadeIn third" name="kota">
<option value="--">Pilih Kota</option>
  <option value="Karawang">Karawang</option>
  <option value="Bekasi">Bekasi</option>
  <option value="Subang">Subang</option>
  <option value="Purwakarta">Purwakarta</option>
</select>
<select id="paket" class="fadeIn third" name="paket">
  <option value="--">Pilih Paket</option>
  <option value="PAKET 20JT">Paket 20JT</option>
  <option value="PAKET 22JT">Paket 22JT</option>
  <option value="PAKET 25JT">Paket 25JT</option>
  <option value="PAKET 27JT">Paket 27JT</option>
  <option value="PAKET 30JT">Paket 30JT</option>
  <option value="PAKET 35JT">Paket 35JT</option>
</select>
<font color="#19709c">Tanggal Resepsi</font>
<input type="date" id="tglacara" class="fadeIn third" name="tglrsp" placeholder="Tanggal Resepsi">
<font color="#19709c">_____________________________________________________________________________________________________________________________</font>
<font color="#19709c">
!!  SYARAT DAN KETENTUAN  !!
Biaya Booking Tanggal Rp. 1.000.000,- (diluar harga paket).
Jika ada permintaan ubah tanggal silahkan konfirmasi ADMIN terlebih dahulu.
UANG BOOKING HANGUS bila ada pembatalan secara sepihak.
</font>
<h3>
TRANSFER HANYA MELALUI REK 
BCA 37808990101 A/N MAHESA WEDDING GALLERY 
--Silahkan Upload Bukti Bayar--
</h3>
        <input type="file" id="foto" class="fadeIn third" name="foto" placeholder="Bukti Bayar" accept="image/*">
        </pre>
        <input type="submit" class="fadeIn fourth" value="DAFTAR">
      </form>
    <form action="<?php echo base_url().'home' ?>" method="post">
        <input type="submit" class="fadeIn fourth" value="KEMBALI">
    </form>
    <div id="formFooter">
        Masih bingung? Yuk <a class="underlineHover" href="https://wa.me/6285776699443/?text=%2AKONSULTASI+BOOKING+WO%2A%0D%0ANama+++%3A%0D%0AAlamat+Tinggal+%3A%0D%0ARencana+Acara+Kapan+%3A+%0D%0APertanyaan+%3A+%0D%0A" />Hubungi Admin</a>
    </div>
    </div>
</body>
</html>