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
        <img src="img/mahesa_logo.png" id="icon1" />
      </div>

      <!-- Login Button  -->
      </br>
      </br>
      <form action="<?php echo base_url().'login' ?>" method="post">
         <input type="submit" class="fadeIn fourth" value=" LOG IN ">
      </form>

      <?php 
  			if(isset($_GET['alert'])){
	  			if($_GET['alert'] == "menunggukonfirmasi"){
						echo "<div class='alert success'><strong>! ! DAFTAR SUDAH BERHASIL ! !<br>Silahkan menunggu konfirmasi username dan password yang akan dikirimkan melalui Email atau Whatsapp.</strong></div>";
					}elseif($_GET['alert'] == "tanggalpenuh"){
						echo "<div class='alert error'>Tanggal sudah di booking, Silahkan hubungi Admin !!</div>";
		  		}
			}
		?>

      <div class="section-card">
      <div class="card card">
         <img src="img/price-tn-01.jpg" alt="IDR 20.000.000" class="card__img">
         <div class="card__details">
            <ul>
               <li>MAKEUP</li>
               <li>DEKORASI</li>
               <li>WARDROBE</li>
               <li>TENDA</li>
               <li>DOKUMENTASI</li>
            </ul>
         </div>
         <a href="#popup1" class="btn">SELENGKAPNYA</a>
      </div>
      <div class="card card">
         <img src="img/price-tn-02.jpg" alt="IDR 22.000.000" class="card__img">
         <div class="card__details">
            <ul>
               <li>MAKEUP</li>
               <li>DEKORASI</li>
               <li>WARDROBE</li>
               <li>TENDA</li>
               <li>DOKUMENTASI</li>
            </ul>
         </div>
         <a href="#popup2" class="btn">SELENGKAPNYA</a>
      </div>
      <div class="card card">
         <img src="img/price-tn-04.jpg" alt="IDR 27.000.000" class="card__img">
         <div class="card__details">
            <ul>
               <li>MAKEUP</li>
               <li>DEKORASI</li>
               <li>WARDROBE</li>
               <li>TENDA</li>
               <li>DOKUMENTASI</li>
            </ul>
         </div>
         <a href="#popup3" class="btn">SELENGKAPNYA</a>
      </div>
      </div>
      <div class="section-card">
      <div class="card card">
         <img src="img/price-tn-03.jpg" alt="IDR 25.000.000" class="card__img">
         <div class="card__details">
            <ul>
               <li>MAKEUP</li>
               <li>DEKORASI</li>
               <li>WARDROBE</li>
               <li>TENDA</li>
               <li>DOKUMENTASI</li>
               <li>HIBURAN</li>
            </ul>
         </div>
         <a href="#popup4" class="btn">SELENGKAPNYA</a>
      </div>
      <div class="card card">
         <img src="img/price-tn-05.jpg" alt="IDR 30.000.000" class="card__img">
         <div class="card__details">
            <ul>
               <li>MAKEUP</li>
               <li>DEKORASI</li>
               <li>WARDROBE</li>
               <li>TENDA</li>
               <li>DOKUMENTASI</li>
               <li>HIBURAN</li>
            </ul>
         </div>
         <a href="#popup5" class="btn">SELENGKAPNYA</a>
      </div>
      <div class="card card">
         <img src="img/price-tn-06.jpg" alt="IDR 35.000.000" class="card__img">
         <div class="card__details">
            <ul>
               <li>MAKEUP</li>
               <li>DEKORASI</li>
               <li>WARDROBE</li>
               <li>TENDA</li>
               <li>DOKUMENTASI</li>
               <li>HIBURAN</li>
            </ul>
         </div>
         <a href="#popup6" class="btn">SELENGKAPNYA</a>
      </div>
      </div>
      <form action="<?php echo base_url().'home/cektanggal' ?>" method="post" enctype="multipart/form-data">
<pre>
<font color="red">
!!  SYARAT DAN KETENTUAN  !!
<br>Biaya Booking Rp. 1.000.000,- (diluar harga paket).
<br>Jika ada permintaan ubah tanggal silahkan konfirmasi ADMIN terlebih dahulu.
<br>UANG BOOKING HANGUS bila ada pembatalan secara sepihak.
<br>SILAHKAN CEK TANGGAL SEBELUM BOOKING
</font>
<input type="text" readonly='true' id="datepicker" class="fadeIn third" name="tgl" placeholder="Pilih tanggal (klik disini)" required="required"><input type="submit" class="fadeIn fourth" value="CEK">
</pre>
      </form>

      <!-- Footer -->
      <div id="formFooter">
        Masin bingung? Yuk <a class="underlineHover" href="https://wa.me/6285776699443/?text=%2AKONSULTASI+BOOKING+WO%2A%0D%0ANama+++%3A%0D%0AAlamat+Tinggal+%3A%0D%0ARencana+Acara+Kapan+%3A+%0D%0APertanyaan+%3A+%0D%0A" />Hubungi Admin</a>
      </div>

      <!-- Popup -->
      <div class="popup" id="popup1">
      <div class="popup__content">
         <div class="popup__img">
            <a href="#"><img src="img/price-img-01.jpg" alt="IDR 20.000.000"></a>
         </div>
      </div>
      </div>
      <div class="popup" id="popup2">
      <div class="popup__content">
         <div class="popup__img">
            <a href="#"><img src="img/price-img-02.jpg" alt="IDR 22.000.000"></a>
         </div>
      </div>
      </div>
      <div class="popup" id="popup3">
      <div class="popup__content">
         <div class="popup__img">
            <a href="#"><img src="img/price-img-04.jpg" alt="IDR 27.000.000"></a>
         </div>
      </div>
      </div>
      <div class="popup" id="popup4">
      <div class="popup__content">
         <div class="popup__img">
            <a href="#"><img src="img/price-img-03.jpg" alt="IDR 27.000.000"></a>
         </div>
      </div>
      </div>
      <div class="popup" id="popup5">
      <div class="popup__content">
         <div class="popup__img">
            <a href="#"><img src="img/price-img-05.jpg" alt="IDR 30.000.000"></a>
         </div>
      </div>
      </div>
      <div class="popup" id="popup6">
      <div class="popup__content">
         <div class="popup__img">
            <a href="#"><img src="img/price-img-06.jpg" alt="IDR 35.000.000"></a>
         </div>
      </div>
      </div>
    </div>
    </div>
</body>
</html>

<pre> 
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> 
<script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
<script src="https://momentjs.com/downloads/moment.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
<script>
$( function() { 
  $( "#datepicker" ).datepicker({
  minDate: moment().add('d', 30).toDate(),
  dateFormat:'yy-mm-dd'
  }); 
}); 
</script> 
</pre>