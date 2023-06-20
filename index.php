           <!-- YANG DIUBAH  -->
<?php

  

include "koneksi.php";
$ambildata = mysqli_query($koneksi,"select * from aas");
$jumlahDonatur = mysqli_num_rows($ambildata);



$query = "SELECT SUM(barang) AS count FROM aas WHERE kategori='uang'";

$duration = $koneksi->query($query);
$record = $duration->fetch_array();
$total = $record['count'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compati le" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Website Masjid </title>
  <link rel="stylesheet" href="st.css" >

  <style>
    /* CSS untuk tampilan desktop */
    @media (min-width: 768px) {
      /* Ubah tampilan header */
      .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      /* Ubah tampilan logo */
      .logo {
        display: flex;
        align-items: center;
      }

      .logo-text {
        margin-left: 10px;
      }

      /* Ubah tampilan menu navigasi */
      .navbar ul {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
      }

      .navbar li {
        margin-right: 20px;
      }

      .navbar a {
        text-decoration: none;
        color: #000;
        font-weight: bold;
      }

      /* Ubah tampilan konten */
      .content {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
      }

      /* Ubah tampilan footer */
      .footer {
        text-align: center;
        padding: 20px;
      }
    }

    /* CSS untuk tampilan mobile */
    @media (max-width: 767px) {
      /* Ubah tampilan header */
      .header {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
      }

      /* Ubah tampilan logo */
      .logo-text {
        margin-top: 10px;
      }

      /* Ubah tampilan menu navigasi */
      .navbar ul {
        display: flex;
        flex-direction: column;
        list-style: none;
        margin: 10px 0;
        padding: 0;
      }

      .navbar li {
        margin-bottom: 10px;
      }

      /* Ubah tampilan konten */
      .content {
        text-align: center;
        padding: 20px;
      }

      /* Ubah tampilan footer */
      .footer {
        text-align: center;
        padding: 20px;
      }
    }
  </style>
           
</head>



<body>


  <div id="beranda">
    patokan
  </div>


  <header class="header">

    <nav class="navbar">
      <img src="images/logowk.png" alt="" srcset="">
      <div class="logo">
        <div class="logo-text">
          <h1><b>SMK WIKRAMA</b></h1>
          <div>
            <h1><b>BOGOR</b></h1>
          </div>
        </div>
      </div>


      <ul>
        <li><a href="#beranda"><b>Beranda</b></a></li>
        <li><a href="#carawakaf"><b>Cara Wakaf</b></a></li>
        <li><a href="#datawakaf"><b>Data Wakaf</b></a></li>
        <li><a href="#gallery"><b>Gallery</b></a></li>
        <li><a href="#webwikrama"><b>Web Wikrama</b></a></li>
      </ul>
    </nav>

  </header>


  <div class="content">
    <div class="text">

      <div class="kesatu">
        <h4> Masjid Besar SMK Wikrama Bogor </h4>
      </div>

      <div class="kedua">
        <h1> Mari <span> Tingkatkan </span></h1>
      </div>

      <div class="ketiga">
        <h1><span> Keimanan </span> Masyarakat </h1>
      </div>

      <div class="keempat">
        <h1> SMK Wikrama Bogor </h1>
      </div>

      <br>
      <div class="tombol">
        <a href="input.php"><button type="button">Beri Bantuan Shadaqah</button></a>
      </div>
    </div>
  </div>









  <div class="masjid">
    <img src="images/masjid.jpg">
  </div>


  <br>
  <br>
  <br>
  <br>
  <br>
  <br>


  <!-- YANG DIUBAH  -->

  
  <div class="total">
    <ul>
      <?php $targetDana = 40000000 ?>
      <li><span>Total Target Dana</span><br>
        <p> <b>
            <h2>Rp. <?= number_format($targetDana); ?></h2>
          </b></p>
      </li>
      <li><span>Total Dana Terkumpul</span> <br>
        <p> <b>
            <h2>Rp. <?= number_format($total); ?></h2>
          </b></p>
      </li>
      <li><span>Total Donatur</span><br>
        <p> <b>
            <h2><?= $jumlahDonatur; ?> Orang</h2>
          </b></p>
      </li>
    </ul>

    

    <?php $percent = ($total / 40000000) * 100; ?>

    <div class="processing">
      <div class="processing-bar" data-bar = "<?= $percent; ?>"><p><?= $percent ?>%</p></div>
    </div>



  </div>


  <div class="gabungan">

    <div class="banner">
      <div class="text-berjalan">

        <marquee direction="left">

          <!-- YANG DIUBAH  -->

          <span style = "opacity:30%;"> &nbsp; • &nbsp; </span>
           <?php foreach ($ambildata as $data): ?>
           <?= $data["nama"]; ?> -
          <span style = "color:#FFF500;"> 
           <?= $data["kategori"]; ?> : <?= $data["barang"]; ?>
          </span>

          <span style = "opacity:30%;"> &nbsp; • &nbsp; </span>
          <?php endforeach; ?>





        </marquee>
      </div>
    </div>

    <br>


    <div class="spanduk">
      <h1>Banner</h1>
    </div>

    <br>
    <br>
    <br>

    <div class="content1">
      <div class="text2">

        <div class="satu">
          <h1> <span>Manfaat</span> Wakaf, Infaq</h1>
        </div>

        <div class="dua">
          <h1> Shadaqoh.</h1>
        </div>

        <div class="tiga">
          <p>Berikut adalah beberapa keutamaan wakaf, infaq</p>
          <p>shodaqoh yang akan anda dapatkan. </p>
        </div>
      </div>
    </div>




    <div class="card4">
      <div class="container">
        <div class="card">
          <div class="items">
            <img src="images/love.jpeg" alt="Gambar 1" />
          </div>
          <div class="ukuran">

            <h3>Menjadikan Hati <br> Lebih Tenang</h3>
            <p>kami memberikan harga yang terbaik
              dibandingkan kompetitor kami
            </p>

          </div>
        </div>


        <div class="card">
          <div class="items">
            <img src="images/ceklis.jpeg" alt="Gambar 2" />
          </div>
          <div class="ukuran">

            <h3>Terbukanya <br> pintu rezeki </h3>
            <p> Allah SWT akan membuka <br> pintu rezeki dari arah yang <br> tidak dikira sebelumnya
            <p>

          </div>
        </div>
      </div>

      <div class="container">
        <div class="card">
          <div class="items">
            <img src="images/perisai.jpeg" alt="Gambar 3" />
          </div>
          <div class="ukuran">

            <h3>Menjauhkan Dari <br> Bahaya </h3>
            <p>Rasulullah SAW pernah <br>bersabda:"Bersegeralah <br>untuk bersedekah, karen <br>musibah dan bencana
              tidak <br>bisa mendahului sedekah."</p>

          </div>
        </div>

        <div class="card">
          <div class="items">
            <img src="images/bintang.jpeg" alt="Gambar 4" />
          </div>
          <div class="ukuran">

            <h3>Pahala Yang Tak <br>Terputus</h3>
            <p>Ini akan menolong kita di <br>akhirat nantinya. Juga <br>dapat menyelamatkannya dari api neraka</p>

          </div>
        </div>


      </div>

      <div class="tangan">
        <img src="images/tangan.png" alt="" srcset="">
      </div>

    </div>



    <!-- JUDUL CARA MELAUKAKN WKAF INFAQ -->

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <div id="carawakaf" class="content1">
      <div class="text3">

        <div class="one">
          <h1> <span>Cara Melakukan </span>Wakaf Infaq</h1>
        </div>

        <div class="two">
          <h1> Shodaqoh.</h1>
        </div>

        <div class="three" style="color: #919191 ;">
          <h6>
            <p> Berikut Adalah Cara Melakukan Waqaf, Infaq Shodaqoh Untuk</p>
            <p> Membantu Pembangunan Masjid Besar SMK Wikrama Bogor</p>
          </h6>
        </div>
      </div>
    </div>





    <div class="card5">
      <div class="container">
        <div class="cardd">
          <div class="items">
            <h1>01</h1>
          </div>
          <div class="ukuran">

            <h3>Isi Form Data Diri</h3>
            <p>Isikan form pengisian yang disediakan di form data diri, isikan dengan data diri anda dengan teliti.
            </p>

          </div>
        </div>


        <div class="cardd">
          <div class="items">
            <h1>02</h1>
          </div>
          <div class="ukuran">

            <h3>Isikan Nominal Shodaqoh</h3>
            <p>Isikan nominal yang akan anda shodaqohkan, pastikan isi nominal dengan seiklasnya tanpa ada paksaan
              apapun.
            <p>

          </div>
        </div>
      </div>

      <div class="container">
        <div class="cardd">
          <div class="items">
            <h1>03</h1>
          </div>
          <div class="ukuran">

            <h3>Upload Bukti Pembayaran </h3>
            <p>Pilih motode pembayaran dan upload bukti pembayaranya.</p>

          </div>
        </div>

        <div class="cardd">
          <div class="items">
            <h1>04</h1>
          </div>
          <div class="ukuran">

            <h3>Verifikasi Pembayaran</h3>
            <p>Pembayaran anda akan di verifikasi oleh admin dan jika terverifikasi nama anda akan tampil.</p>

          </div>
        </div>

      </div>
    </div>




    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- JUDUL DATA DONATUR -->


    <div id="datawakaf" class="content1">
      <div class="text3">

        <div class="one">
          <h1> <span>Data Donatur </span>Wakaf Infaq</h1>
        </div>

        <div class="two">
          <h1> Shodaqoh.</h1>
        </div>

        <div class="three" style="color: #919191 ;">
          <h6>
            <p> Berikut adalah data donatur wakaf, infaq shodaqoh untuk </p>
            <p> masjid besar SMK Wikrama Bogor</p>
        </div>
      </div>
    </div>


  </div>
  <table border="1" cellpadding="6" cellspacing= "0">
    <tr>
        <th>Nama Donatur</th>
        <th>Donatur ID</th>
        <th>Paket</th>
        <th>Kategori</th>
        <th>Nominal / Barang</th>
    </tr>


      <!-- YANG DIUBAH  -->

    <?php foreach ($ambildata as $row) : ?>
      <td><?= $row["nama"]; ?></td>
      <td><?= $row["id"]; ?></td>
      <td><?= $row["paket"]; ?></td>
      <td><?= $row["kategori"]; ?></td>
      <td><?= $row["barang"]; ?></td>
      <tr>
      <?php endforeach; ?>





    
  </table>



    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div id="gallery" class="content1">
      <div class="text3">

        <div class="one">
          <h1> <span>Gallery</span> Masjid Besar SMK</h1>
        </div>

        <div class="wk">
          <h1>Wikrama Bogor</h1>
        </div>

        <div class="three" style="color: #919191 ;">
          <h6>
            <p> Berikut adalah gallery masjid besar SMK Wikrama Bogor. </p>
          </h6>
        </div>
      </div>

    </div>

    <div class="card-container">
      <div class="carddd">
        <img src="images/m1.png" alt="Image 1">
      </div>


      <div class="carddd">
        <img src="images/m2.png" alt="Image 2">
      </div>


      <div class="carddd">
        <img src="images/m3.png" alt="Image 3">
      </div>

    </div>



    <div class="kebawah">

      <div class="carddd">
        <img src="images/m4.png" alt="Image 4">
      </div>


      <div class="carddd">
        <img src="images/m5.png" alt="Image 5">
      </div>


      <div class="carddd">
        <a href="gallery.html">
          <img src="images/Buka_galeri.png" alt="Image 6">
        </a>
      </div>

    </div>


  </div>

  
  </div>


  <footer id = "webwikrama" class="footer">
    <div class="footer-container">
      <div class="footer-row">
        <div class="footer-content">
          <div class="footer-col">
            <div class="footer-brand">
              <img src="images/logowk.png" alt="">
              <h3>SMK WIKRAMA BOGOR</h3>
            </div>
            <br>
            <h4>alamat</h4>
            <p>
              jl.raya wangun <br>
              kelurahan sindangsari <br>
              bogor timur 16720
            </p>
            <hr>
            <h4>telepon</h4>
            <p>
              0251-8242411/<br>
              082221718035 (Whatsapp)
            </p>
            <hr>

            <ul class="footer-links">
              <li><a href="https://www.facebook.com/smkwikrama?_rdc=1&_rdr" target="_blank"><img src="images/fb.png" alt=""></a></li>
              <li><a href="https://smkwikrama.sch.id/" target="_blank"><img src="images/twt.png" alt=""></a></li>
              <li><a href="https://www.instagram.com/smkwikrama/" target="_blank"><img src="images/ig.png" alt=""></a></li>
              <li><a href="https://www.youtube.com/@multimediawikrama7482" target="_blank"><img src="images/yt.png" alt=""></a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>tentang wikrama</h4>
            <ul>
              <li><a href="https://smkwikrama.sch.id/" target="_blank">sejarah</a></li>
              <li><a href="https://smkwikrama.sch.id/" target="_blank">peraturan sekolah</a></li>
              <li><a href="https://smkwikrama.sch.id/" target="_blank">rencana strategi & prestasi</a></li>
              <li><a href="https://smkwikrama.sch.id/" target="_blank">yayasan</a></li>
              <li><a href="https://smkwikrama.sch.id/" target="_blank">struktur organisasi</a></li>
              <li><a href="https://smkwikrama.sch.id/" target="_blank">cabang</a></li>
              <li><a href="https://smkwikrama.sch.id/" target="_blank">penghargaan</a></li>
              <li><a href="https://smkwikrama.sch.id/" target="_blank">kerjasama</a></li>
            </ul>
          </div>
        </div>

        <div class="footer-form">
          <div class="footer-col">
            <h4>Kirim Pesan</h4>
            <form action="">
              <input type="text" placeholder="Nama" require>
              <input type="email" placeholder="Email" require> 
              <textarea placeholder="Pesan Anda" require></textarea>

              <button type="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </footer>



     <!-- YANG DIUBAH  -->


    <script>

      const processing = document.querySelector ('.processing-bar');

      setTimeout(() => {
        processing.style.opacity = 1;
        processing.style.width = processing.getAttribute('data-bar') + '%';

      }, 500)

    </script>






</body>

</html>

