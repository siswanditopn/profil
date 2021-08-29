<?php
  require_once('konfigurasi/PangkalanData.php');
  require_once('konfigurasi/Fungsi_Utama.php');
  require_once('konfigurasi/Fungsi_DataPengunjung.php');

  $TokenUmum   = MD5("Pengunjung Umum - siswanditopn.my.id");
  if (!isset($_COOKIE[$TokenUmum])) {
      $Durasi = time()+60*60*24;
  
      $value = "siswanditopn.my.id";
      setcookie($TokenUmum, $value, $Durasi);
  
      BukuTamu($koneksi);
  }
?>
<!doctype html>
<html lang="id" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Font Awesome v5 -->
    <script src="https://kit.fontawesome.com/900e4dbd61.js" crossorigin="anonymous"></script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- CSSku -->
    <link rel="stylesheet" href="aset/css/warna.css">
    <link rel="stylesheet" href="aset/css/font.css">
    <link rel="stylesheet" href="aset/css/tataletak.css">

    <!-- Judul Tab -->
    <link rel="icon" href="aset/gambar/FotoProfil.png" type="image/png" sizes="16x16">
    <title>Profil SiswanditoPN</title>
  </head>
  <body id="Beranda">
    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-biru fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#Beranda"><b>SiswanditoPN</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#Beranda">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#PendidikanFormal">Pendidikan Formal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#PengalamanKerja">Pengalaman Kerja</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Kontak">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Awal GelombangAtas -->
    <svg id="GelombangAtas" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3CACFF" fill-opacity="1" d="M0,192L48,170.7C96,149,192,107,288,85.3C384,64,480,64,576,85.3C672,107,768,149,864,144C960,139,1056,85,1152,80C1248,75,1344,117,1392,138.7L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <!-- <section class="text-center d-sm-none d-md-block"> -->
      <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3CACFF" fill-opacity="1" d="M0,192L48,170.7C96,149,192,107,288,85.3C384,64,480,64,576,85.3C672,107,768,149,864,144C960,139,1056,85,1152,80C1248,75,1344,117,1392,138.7L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
      </section>
      <section id="Spasi-5Rem" class="text-center d-none d-sm-block d-md-none"></section> -->
      <!-- Akhir GelombangAtas -->
      
    <!-- Awal Profil -->
    <section id="Profil" class="text-center">
      <img src="aset/gambar/FotoProfil.png" alt="Foto Profil SiswanditoPN" width="200" class="rounded-circle img-thumbnail shadow-md">
      <h1>Siswandito Nugroho</h1>
      <p class="lead">Programmer di PT Lumbung Karya Utama</p>
      <a href="https://github.com/siswanditopn" target="blank"><img align="center" src="https://github.com/fluidicon.png" alt="siswanditopn" height="30" width="40" /></a>
      <a href="https://twitter.com/siswanditopn" target="blank"><img align="center" src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/twitter.svg" alt="siswanditopn" height="30" width="40" /></a>
      <a href="https://linkedin.com/in/siswanditopn" target="blank"><img align="center" src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/linked-in-alt.svg" alt="siswanditopn" height="30" width="40" /></a>
      <a href="https://fb.com/siswanditopn" target="blank"><img align="center" src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/facebook.svg" alt="siswanditopn" height="30" width="40" /></a>
      <a href="https://instagram.com/siswanditopn" target="blank"><img align="center" src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/instagram.svg" alt="siswanditopn" height="30" width="40" /></a>
      <a href="https://www.youtube.com/c/siswanditopn" target="blank"><img align="center" src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/youtube.svg" alt="siswanditopn" height="30" width="40" /></a>
      <a href="https://discord.gg/SiswanditoPN#3082" target="blank"><img align="center" src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/discord.svg" alt="SiswanditoPN#3082" height="30" width="40" /></a>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#E2EDFF" fill-opacity="1" d="M0,256L48,218.7C96,181,192,107,288,112C384,117,480,203,576,213.3C672,224,768,160,864,160C960,160,1056,224,1152,224C1248,224,1344,160,1392,128L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Profil -->

    
    <!-- Awal PendidikanFormal -->
    <section id="PendidikanFormal" class="text-center bg-birumuda">
      Pendidikan Formal
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt laborum quam nihil magnam harum cupiditate, officiis id praesentium consequatur possimus temporibus voluptatum ab iste qui aliquid, aliquam perferendis, itaque deserunt?
      <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FFFFFF" fill-opacity="1" d="M0,256L48,218.7C96,181,192,107,288,112C384,117,480,203,576,213.3C672,224,768,160,864,160C960,160,1056,224,1152,224C1248,224,1344,160,1392,128L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg> -->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FFFFFF" fill-opacity="1" d="M0,256L48,218.7C96,181,192,107,288,112C384,117,480,203,576,213.3C672,224,768,160,864,160C960,160,1056,224,1152,224C1248,224,1344,160,1392,128L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir PendidikanFormal -->
    
    
    <!-- Awal PengalamanKerja -->
    <section id="PengalamanKerja">
      Pengalaman Kerja
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, adipisci atque exercitationem iste maxime similique, tenetur quaerat sunt culpa architecto recusandae. Quia dicta soluta iusto pariatur vel vitae nulla nostrum!
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#E2EDFF" fill-opacity="1" d="M0,256L48,218.7C96,181,192,107,288,112C384,117,480,203,576,213.3C672,224,768,160,864,160C960,160,1056,224,1152,224C1248,224,1344,160,1392,128L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir PengalamanKerja -->
    

    <!-- Awal Kontak -->
    <section id="Kontak" class="text-center bg-birumuda">
      Kontak
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium obcaecati laboriosam magnam saepe quis asperiores ipsa voluptatibus nemo ab quia, rerum debitis natus quidem impedit hic. Quaerat similique temporibus molestias.
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3cacff" fill-opacity="1" d="M0,256L48,218.7C96,181,192,107,288,112C384,117,480,203,576,213.3C672,224,768,160,864,160C960,160,1056,224,1152,224C1248,224,1344,160,1392,128L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Kontak -->

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>