<!DOCTYPE html>
<html>
<head>
	<title>tampilan</title>
<<<<<<< HEAD:tampilan/home.html
	<link rel="stylesheet" type="text/css" href="home.css">
=======
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/home.css'?>">
>>>>>>> 0cec242d1293b74d4616f34ef5dc8521dec39f53:Lapor/application/views/home.php
</head>
<body>
<header>
<div class="container">
    <div id="bagiankiri">
      </div>
          <nav>
			<ul>
            <li class="active"><a href="#" > Tentang Lapor! </a></li>
            
<!-ini yos yg gua hapus->
          
          </ul>
      </nav>
     <div id="bagiankanan">
	      <nav>
            <ul>
             <li>
	        <li> <a href="<?php echo site_url('lapor/login')?>"> Masuk </a></li> 
		       <li> <a href="<?php echo site_url('lapor/daftar')?>"> Daftar </a></li>
              </li>
             </ul>
         </nav>
        </div>
     </div>
  </header>
 
<h1>SIMPLE LAPOR!</h1>
<div class="login">
 <div class="lapor">
    <form class="pencarian" onSubmit="return pencarian(this)" action="<?php echo base_url('cari')?>" method="post">
        <input class="search" type="text" name="keyword" placeholder="search" autocomplete="off" autofocus>	
       
        <input class="button" type="submit" name="submit"  placeholder="cari" value="Cari">	 

    </form>

   
    <a class="buat" href="<?php site_url('lapor/buat'); ?>buat">Buat Laporan / Komentar &nbsp<img src="<?php echo base_url().'assets/img/tambah.png'?>" height="13px"></a>
<<<<<<< HEAD:tampilan/home.html
        <br><hr>
        <img class="gambar" src="<?php echo base_url(); ?>assets/icon/menu.png">
        <img class="gambar" src="<?php echo base_url(); ?>assets/icon/menu.png">
  
  <!-ini yos yg gua tambahin->
        
            <p class="subjudul">Laporan/Komentar Terakhir</p>
    <hr>
    <br><br>     
         	<?php foreach ($home as $hm )  :?>
            <?php $id = $hm['id_lapor']; ?>
            <?php $now = date("Y-m-d H:i"); ?>
          <div class="arsip"> 
          	<p><?php echo substr($hm['laporan'], 0, 450); ?></p>
       </div><br>
     <?php
    	echo "<tr>
        	<a class='more' href='detail?detail_id=$id'>Lihat Selengkapnya  &nbsp<img src="more.png" height=13px></a>		
          </tr>";
          	?>
     <div class="waktu">
       <?php 
          $date = new DateTime($hm['waktu']);
          	echo 'Waktu : ';
            echo $date->format('d-m-Y H:i'); // 21-01-2017 05:13:03
          	?>
        </div> 
  <div class="lampir">
      <?php
            echo 'Lampiran:'; 
            echo  $hm['lampiran']; 
            ?>
 </div>
=======
>>>>>>> 0cec242d1293b74d4616f34ef5dc8521dec39f53:Lapor/application/views/home.php
        <br><hr><br>
        <img class="gambar" src="<?php echo base_url(); ?>assets/icon/menu.png">
        <img class="gambar" src="<?php echo base_url(); ?>assets/icon/menu.png">
        <br>
      
 </div>
 </div>
 
 
 <footer>
            <section id="spons">
                <div class="container">
                    <div class="box">
                        <p>Download Aplikasi Mobile LAPOR!</p>
                        <a href="https://play.google.com/store/apps/developer?id=affandiStudio">
                        <img src="<?php echo base_url().'assets/img/google.png'?>" width="150"></a>

                    </div>
                    <div class="box">
                            <p>Dikembangkan Oleh : </p>
                            <a href="http://itera.ac.id">
                            <img src="<?php echo base_url().'assets/img/logo itera oke.png'?>" width="90" ></a>


                     </div>
                    <div class="box">
                            <p>Lebih Dekat dengan Kami!</p>
                            <a href="https://www.instagram.com/iteraofficial/">
                            <img src="<?php echo base_url().'assets/img/Instagram_icon.png'?>" width="49" ></a>
                            <a href="https://www.facebook.com/itera.official/">
                            <img src="<?php echo base_url().'assets/img/facebook.png'?>" width="52"></a>

                        </div>

                </div>
            </section>
            <p id="copyright" > Copyright  @2019</p>

        </footer> 
  
</body>
</html>
