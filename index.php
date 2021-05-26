<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>


      <!-- my CSS -->
      <link  rel="stylesheet" href="css/style.css">
      <!--icon-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>203040136</title>
    </head>

    <body id="home" class="scrollspy">

    <!---navbar-->
<div class="navbar-fixed">
    <nav class="light-blue lighten-1">
     <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo center">Halaman Tugas</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="left hide-on-med-and-down">
            <li><a href="#profile">Riwayat Penulis</a></li>
            <li><a href="#foto">Foto</a></li>
            <li><a href="#tugas">Tugas</a></li>
          </ul>
        </div>
     </div>
    </nav>
</div>
      <ul class="sidenav" id="mobile-nav">
        <li><a href="#profile">Riwayat Penulis</a></li>
        <li><a href="#foto">Foto</a></li>
        <li><a href="#tugas">Tugas</a></li>
        </ul>
    <!--Riwayat-->
    <section id="profile" class="profile scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="center light grey-text text-darken-3">Riwayat Penulis</h3>
                <div class="center col m16 light">
                    <h5 class="center">Akbar Maulana</h5>
                     <p>Hai! Saya Akbar Maulana dengan nrp 203040136. Saya adalah Mahasiswa Semester 2 di Universitas Pasundan Bandung.
                        Saya Lahir di Bekasi,12 september 2002.
                        Hobby saya adalah bermain game, terutama game FPS seperti PUBG MOBILE.</p>
                </div>
    </section>
    <!--Foto-->
    <section id="foto" class="foto scrollspy">
        <div class="container">
            <h3 class="light center grey-text text-darken-3">Foto</h3>
            <div class="row">
                <div class="col m5 s5">
                    <img src="assets/img/akbar1.jpg" class="responsive-img materialboxed">
                </div>
                <div class="col m5 s10">
                    <img src="assets/img/akbar2.jpg" class="responsive-img materialboxed">
                </div>
                </div>
            </div>
        </div>
    </section>

    <!--Link-->
    <section id="tugas" class="tugas scrollspy"></section>
    <ul class="collection with-header">
        <li class="collection-header">
            <h5>Klik Untuk Menuju Tugas Kuliah</h5>
            <i class="small material-icons">archive</i>
            <p>Username : rawr</p>
                <p>Password : gatau</p>
       
        <div class="collection">
            <a href="pertemuan11/index.php" class="collection-item">Pertemuan 11</a>
            <a href="pertemuan12/index.php" class="collection-item">Pertemuan 12</a>
        </ul>
    </li>
    </section>
    </div>

    <section id="tugas" class="tugas scrollspy"></section>
    <ul class="collection with-header">
        <li class="collection-header">
            <h5>Klik Untuk Menuju Praktikum</h5>
            <i class="small material-icons">archive</i>
       
        <div class="collection">
            <a href="praktikum/tugas4/latihan4c/index.php" class="collection-item">Pertemuan 4</a>
            <a href="praktikum/tugas5/latihan5e/php/admin.php" class="collection-item">Pertemuan 5</a>
            <a href="praktikum/tugas6/latihan6c/php/admin.php" class="collection-item">Pertemuan 6</a>
        </ul>
    </li>
    </section>
    </div>
        <section id="tugas" class="tugas scrollspy"></section>
        <ul class="collection with-header">
            <li class="collection-header">
                <h5>Klik Untuk Menuju Tubes</h5>
                <i class="small material-icons">archive</i>
                <p>Username : abam</p>
                <p>Password : 123</p>
            <div class="collection">
                <a href="tubes/index.php" class="collection-item">Klik di Sini...</a>
            </ul>
        </li>
        </section>
        </div>

    <!--footer-->
    <footer class="light-blue lighten-1 drak-text center">
    <span class="material-icons">facebook</span>
    <span class="material-icons">mail</span>
    <span class="material-icons">qr_code_scanner</span>
        <p class="flow-text">AkbarMaulana, Copyright 2020.</p>
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