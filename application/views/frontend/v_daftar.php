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
              <?php 
							if(isset($_GET['alert'])){
								if($_GET['alert'] == "duplikat"){
									echo "<div class='alert error'>Email Sudah Terdaftar !!</div>";
								}elseif($_GET['alert'] == "menunggukonfirmasi"){
									echo "<div class='alert success'><strong>! ! DAFTAR SUDAH BERHASIL ! !<br>Silahkan menunggu konfirmasi username dan password yang akan dikirimkan melalui Email atau Whatsapp.</strong></div>";
								}elseif($_GET['alert'] == "tanggalpenuh"){
									echo "<div class='alert error'>Tanggal sudah di booking, Silahkan hubungi Admin !!</div>";
								}elseif($_GET['alert'] == "tanggaltersedia"){
									echo "<div class='alert success'>Tanggal belum di booking, Silahkan lanjutkan pendaftaran !!</div>";
                }
							}
							?>
<pre>
<form action="<?php echo base_url().'home/cektanggal' ?>" method="post" enctype="multipart/form-data">
<font color="red">Silahkan cek tanggal terlebih dahulu !!</font>
<input type="date" id="tgl" class="fadeIn third" name="tgl" placeholder="Tanggal Resepsi" required="required">
<input type="submit" class="fadeIn fourth" value="CEK TANGGAL">
</form>
<font color="#19709c">_____________________________________________________________________________________________________________________________</font>
<form action="<?php echo base_url().'home/daftaraksi' ?>" method="post" enctype="multipart/form-data">
<input type="text" id="nama" class="fadeIn second" name="nama" placeholder="Nama Lengkap" required="required">
<input type="email" id="email" class="fadeIn third" name="email" placeholder="Email" required="required">
<input type="text" id="alamat" class="fadeIn third" name="alamat" placeholder="Alamat Tinggal" required="required">
<input type="text" id="nohp" class="fadeIn third" name="hp" placeholder="Nomor Whatsapp" required="required">
<font color="#19709c">Tanggal Lahir</font>
<input type="date" id="ttl" class="fadeIn third" name="ttl" required="required">

<font color="#19709c">_____________________________________________________________________________________________________________________________</font>

<input type="text" id="alamat" class="fadeIn third" name="lokasirsp" placeholder="Lokasi Resepsi" required="required">
<select id="kota" class="fadeIn third" name="kota" required="required">
<option value="--">Pilih Kota</option>
  <option value="Karawang">Karawang</option>
  <option value="Bekasi">Bekasi</option>
  <option value="Subang">Subang</option>
  <option value="Purwakarta">Purwakarta</option>
</select>

<select id="paket" class="fadeIn third" name="paket" required="required">
  <?php foreach ($produk as $p){ ?>
  <option value="<?php echo $p->produk_nama; ?>"><?php echo $p->produk_nama; ?></option>
  <?php } ?>
</select>


<font color="#19709c">Tanggal Resepsi</font>
<input type="date" id="tglacara" class="fadeIn third" name="tglrsp" placeholder="Tanggal Resepsi" required="required">
<font color="#19709c">_____________________________________________________________________________________________________________________________</font>
<font color="red">
<h3>
!!  SYARAT DAN KETENTUAN  !!
Biaya Booking Tanggal Rp. 1.000.000,- (diluar harga paket).
Jika ada permintaan ubah tanggal silahkan konfirmasi ADMIN terlebih dahulu.
UANG BOOKING HANGUS bila ada pembatalan secara sepihak.</h3></font>
<h1>TRANSFER HANYA MELALUI REK 
BCA 37808990101 A/N MAHESA WEDDING GALLERY 
--Silahkan Upload Bukti Bayar--
</h1>
        <input type="file" id="foto" class="fadeIn third" name="foto" placeholder="Bukti Bayar" accept="image/*" required="required">
        </pre>
        <input type="hidden" id="status" class="fadeIn second" name="status" value="BELUM AKTIF">
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

