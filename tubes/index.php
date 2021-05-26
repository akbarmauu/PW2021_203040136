<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
if (isset($_GET['cari']))
{
  $keyword = $_GET['keyword'];
  $produk= query("SELECT * FROM produk WHERE
              Nama LIKE '%$keyword%' OR 
              Status LIKE '%$keyword%' OR
              Spesifikai LIKE '%$keyword%' OR
              Harga LIKE '%$keyword%' OR
              Tahun LIKE '%$keyword%'");
} else {
  $produk = query("SELECT * FROM produk");
}

?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>


      <!-- my CSS -->
      <link  rel="stylesheet" href="css/style.css">
      <style>
          image{
              width:60px;
              height: 60px;
          }
      </style>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Akbarphone</title>
    </head>

    <body id="home" class="scrollspy">


      <!-- navbar -->
      <div class="navbar-fixed">
          <nav class="cyan darken-3">
              <div class="container">
                  <div class="nav-wrapper">
                      <a href="#home" class="brand-logo">Akbarphone</a>
                      <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                      <ul class="right hide-on-med-and-down"> 
                      <li><a href="#services"><i class="material-icons small">build</i></a></li>
                      <li><a href="#produk"><i class="material-icons small">phone_iphone</i></a></li>
                      <li><a href="#contact"><i class="material-icons small">call</i></a></li>
                      <div class="collection">
                        <a href="php/login.php" class="collection-item">Login</a>
                      </ul>
                  </div>
              </div>  
          </nav>
        </div>
        
      <ul class="sidenav" id="mobile-nav">
          <li><a href="#services">Services</a></li>
          <li><a href="#produk">Produk</a></li>
          <li><a href="#contact">Contact Us</a></li> 
          <li><a href="php/login.php">login</a></li>
      </ul>
  
  
      <!-- slider -->
      <div class="slider">
          <ul class="slides">
            <li>
              <img src="assets/img/slider/1.png">
              <div class="caption left-align">
                <h3>Hallo!</h3>
                <h5 class="light grey-text text-lighten-3">Selamat datang di Akbarphone.</h5>
              </div>
            </li>
            <li>
              <img src="assets/img/slider/2.png">
              <div class="caption right-align">
                <h3>Selamat Berbelanja</h3>
                <h5 class="light grey-text text-lighten-3">Banyak Beragam pilihan disini.</h5>
              </div>
            </li>
            <li>
              <img src="assets/img/slider/3.png">
              <div class="caption center-align">
                <h3>Pilih Beragam model HP</h3>
                <h5 class="light grey-text text-lighten-3">Semoga Anda Puas.</h5>
              </div>
            </li>
          </ul>
      </div>
  
      <!-- services -->
      <section id="services" class="services grey lighten-2 scrollspy">
          <div class="container">
              <div class="row">
                  <h3 class="center light grey-text text-darken-3">Our Services</h3>
                  <div class="col m4 s12">
                      <div class="card-panel center">
                          <i class="material-icons medium">phone_iphone</i>
                          <h5>Handphone</h5>
                          <p>Kami melayani jual/beli HP New atau Second.</p>
                      </div>
                  </div>
                  <div class="col m4 s12">
                      <div class="card-panel center">
                          <i class="material-icons medium">headset</i>
                          <h5>Headset/Earphone</h5>
                          <p>Menjual berbagi Jenis headphone/earphone.</p>
                      </div>
                  </div>
                  <div class="col m4 s12">
                      <div class="card-panel center">
                          <i class="material-icons medium">settings_cell</i>
                          <h5>Serivis HP</h5>
                          <p>Kami menyediakan layanan servis HP.</p>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  
  
      <!-- produk -->
      <h4 class="center">Produk</h4>
    
      <form action="" method="get">
        <input type="text" name="keyword" style="background-color: #00000; border-radius: 10px; margin-left: 40px;" autofocus>
        <button type="submit" name="cari" style="background-color: #00000; border-radius: 10px;">Cari!</button>
</form>
  
<section id="produk" 
<div class="container mt-5 mb-5">
    <?php foreach ($produk as $p) : ?>
        <tr> 
            <td><p class="nama"></td>
            <td><a href="php/detail.php?id=<?= $p['id'] ?>" style="color:  #00000;"> 
            <ul class="collection">
      <li class="collection-item"><?= $p["Nama"] ?>
      <i class="small material-icons right">phone_iphone</i>
    </li>
    </ul>
            </a></td>
        </tr>
    <?php endforeach; ?>
    </div>
    </section>
      <!-- contact us -->
      <section id="contact" class="contact grey lighten-2 scrollspy">
          <div class="container">
              <h3 class="light center grey-text text-darken-3">Contact Us</h3>
              <div class="row">
                  <div class="col m5 s12">
                      <div class="card-panel cyan darken-3 center light-text">
                        <div class="chip">
                            <img src="assets/img/clients/unpas.jpg" alt="Contact Person">
                            Akbarphone
                          </div>
                        
                          <h5>Contact</h5>
                          <p>Silahkan hubungi kami untuk Pemesanan.</p>
                      </div>
                     
                  </div>
  
                  <div class="col m7 s12">
                      <form>
                          <div class="card-panel">
                              <h5>Mohon di Isi Untuk Pemesanan</h5>
                              <div class="input-field">
                                  <input type="text" name="name" id="name" required class="validate">
                                  <label for="name">Name</label>
                              </div>
                              <div class="input-field">
                                  <input type="email" name="email" id="email" class="validate">
                                  <label for="email">Email</label>
                              </div>
                              <div class="input-field">
                                  <input type="text" name="phone" id="phone">
                                  <label for="phone">Phone Number</label>
                              </div>
                              <div class="input-field">
                                  <textarea name="message" id="message" class="materialize-textarea"></textarea>
                                  <label for="message">Alamat</label>
                              </div>
                              <label>Pilih Produk Anda</label>
                            <select class="browser-default">
                                <option value="" disabled selected>Pilih Produk</option>
                                <option value="1">Iphone 8</option>
                                <option value="2">Iphone X</option>
                                <option value="3">Iphone 11</option>
                                <option value="3">Iphone 12</option>
                                <option value="3">Apple Watch</option>
                                <option value="3">Air Pods</option>
                            </select
                              <form action="#">
                                <p>
                                  <label>
                                    <input type="checkbox" />
                                    <span>Benarkah Anda ingin memesan barang ini?</span>
                                  </label>
                                </p>
                                </form>
                                <button class="btn waves-effect waves-light cyan darken-3" type="submit" name="action">Pesan!
                                    <i class="material-icons right">send</i>
                                  </button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </section>
  
  
  
      <!-- footer -->
      <footer class="cyan darken-3 light-text center">
        <div class="footer-copyright">
            <div class="container">
            © 2020 Copyright Akbarmauu
            </div>
          </div>
      </footer>
      
  
  
  
  
  
  
  
  
  
          <!--JavaScript at end of body for optimized loading-->
          <script type="text/javascript" src="js/materialize.min.js"></script>
          <script>
              const sideNav = document.querySelectorAll('.sidenav');
              M.Sidenav.init(sideNav);
  
              const slider = document.querySelectorAll('.slider');
              M.Slider.init(slider , {
                  indicators: false,
                  height: 500,
                  transition: 600,
                  interval: 3000
              });
  
              const parallax = document.querySelectorAll('.parallax');
              M.Parallax.init(parallax);
  
              const materialbox = document.querySelectorAll('.materialboxed');
              M.Materialbox.init(materialbox);
  
              const scroll = document.querySelectorAll('.scrollspy');
              M.ScrollSpy.init(scroll, {
                  scrollOffset: 50
              });
  
  
          </script>
      </body>
  </html>