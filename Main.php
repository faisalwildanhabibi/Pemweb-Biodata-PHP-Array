<?php
$nama="Faisal Wildan Habibi";
$npm="21081010216";
$tempatlahir="Surabaya";
$tanggallahir="24 Maret 2003";
$hobi=["Bermain, ", "Belajar, ", "Makan"];
$tujuan="Menciptakan usaha yang dapat menambah lapangan pekerjaan";
$pendidikan=["SD Raden Patah Balongsari Surabaya", "SMPN 20 Surabaya", "SMA Darul Ulum 2 Jombang", "UPN Veteran Jawa Timur Surabaya"];
$kemampuan=["Mampu belajar lebih cepat dan mudah memahami", "Mampu menciptakan suasana sesuai keinginan", "Mampu mencari cara tentang sesuatu yang belum tentu orang lain ketahui"];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Biodata - <?php echo $npm ?> - <?php echo $nama ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Style.css">
    <link rel="icon" href="Faisal.ico">
  </head>
  <body>
    <header>
      <h1>Tugas Pemrograman Web C081 - Biodata</h1>
    </header>
    <nav>
      <ul>
        <li><a href="#Tentang">Tentang</a></li>
        <li><a href="#Pendidikan">Pendidikan</a></li>
        <li><a href="#Kemampuan">Kemampuan</a></li>
        <li><a href="#Kontak">Kontak</a></li>
      </ul>
    </nav>
    <main>
      <center><img src="profil.jpg" alt="Foto Saya"></center>
      <h2><?php echo $nama ?></h2>
      <h2><?php echo $npm ?></h2>
      <div class="col">
        <h3 id="Tentang">Tentang</h2>
        <p>Perkenalkan, nama saya Faisal Wildan Habibi biasa dipanggil Faisal. Saya anak ke-2 dari 2 bersaudara, dengan orang tua yang berprofesi sebagai pengusaha. Saya asli Surabaya lahir pada 24 Maret 2003. Saya memiliki hobi seperti bermain permainan apapun itu asalkan ada cheatnya, lalu saya juga suka belajar hal baru yang menurut saya menarik, dan yang terakhir saya suka sekali makan apa yang sudah saya ketahui atau diberitahu orang lain bahwa makanan tersebut enak. Untuk lebih ringkasnya, silakan lihat daftar di bawah ini:</p>
        <ul>
          <li>
            Nama: <?php echo $nama ?>
          </li>
          <li>
            Tempat lahir: <?php echo $tempatlahir ?>
          </li>
          <li>
            Tanggal lahir: <?php echo $tanggallahir ?>
          </li>
          <li>
            Hobi: <?php foreach ($hobi as $h) {
                echo "$h";
            }?>
          </li>
          <li>
            Tujuan Hidup: <?php echo $tujuan ?>
          </li>
        </ul>
      </div>
      <div class="col">
        <h3 id="Pendidikan">Pendidikan</h2>
        <p>Masalah pendidikan, orang tua saya selalu memilihkan yang terbaik, seperti saat SD saya disekolahkan di SD Raden Patah Balongsari Surabaya, kemudian setelah lulus dilanjutkan menuju SMPN 20 Surabaya, lalu SMA saya diarahkan untuk mengikuti pondok pesantren yang dapat dibilang modern iya salaf juga iya yaitu di Pondok Pesantren Darul Ulum dan SMA Darul Ulum 2 Cambridge International School Jombang, lalu untuk perguruan tinggi karena kedua orang tua saya alumni UPN sehingga saya juga diarahkan untuk masuk UPN Veteran Jawa Timur. Lebih ringkasnya, silakan lihat daftar di bawah ini:</p>
        <ul>
            <?php foreach ($pendidikan as $pend): ?>
            <li><?=$pend ?></li>
            <?php endforeach; ?>
        </ul>
      </div>
      <div class="col">
        <h3 id="Kemampuan">Kemampuan</h2>
        <p>Terkait kemampuan, saya sendiri merasa bahwa saya memiliki kemampuan untuk belajar sesuatu lebih cepat dan mudah memahami, namun mudah lupa. Kemudian, saya dapat menciptakan suasana sesuai yang saya inginkan, lalu saya juga dapat mencari cara tentang sesuatu yang belum tentu orang lain ketahui. Untuk lebih ringkasnya, silakan lihat daftar di bawah ini:</p>
        <ol>
          <?php foreach ($kemampuan as $kp): ?>
            <li><?=$kp ?></li>
            <?php endforeach; ?>
        </ol>
      </div>
    </main>
    <footer>
      <h2 id="Kontak">Kontak</h2>
      <a href="https://wa.me/6282139243441" target="_blank"><img src="Whatsapp.png" alt=""></a><a href="https://www.instagram.com/fsl.wildan/" target="_blank"><img src="Instagram.png" alt=""></a><a href="https://github.com/faisalwildanhabibi" target="_blank"><img src="Github.png" alt=""></a><a href="https://www.linkedin.com/in/faisal-wildan-76968b21a/" target="_blank"><img src="Linkedin.png" alt=""></a>
    </footer>
  </body>
</html>