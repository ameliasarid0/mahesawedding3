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
<form action="<?php echo base_url().'home/daftaraksi' ?>" method="post">
<input type="text" id="nama" class="fadeIn second" name="nama" placeholder="Nama Lengkap">
<input type="email" id="email" class="fadeIn third" name="email" placeholder="Email">
<input type="text" id="alamat" class="fadeIn third" name="alamat" placeholder="Alamat Tinggal">
<input type="text" id="nohp" class="fadeIn third" name="hp" placeholder="Nomor Whatsapp">
<font color="#19709c">Tanggal Lahir</font>
<input type="date" id="ttl" class="fadeIn third" name="ttl" placeholder="Tanggal Lahir">

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
  <option value="20JT">Paket 20JT</option>
  <option value="22JT">Paket 22JT</option>
  <option value="25JT">Paket 25JT</option>
  <option value="27JT">Paket 27JT</option>
  <option value="30JT">Paket 30JT</option>
  <option value="35JT">Paket 35JT</option>
</select>
<font color="#19709c">Tanggal Resepsi</font>
<input type="date" id="tglacara" class="fadeIn third" name="tglrsp" placeholder="Tanggal Resepsi">
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