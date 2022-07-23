<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Siswandito P. N., SiswanditoPN, Tito" />
    <meta name="description" content="Riwayat hidup Siswandito P. N." />
    <meta name="Author" content="SiswanditoPN" />
    <title>Siswandito P. N.</title>
    
    <link rel="icon" type="image/png" href="{{ asset('storage/icon/profil.png') }}"/>
    
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <!-- Bootsstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/900e4dbd61.js" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/warna.css') }}">

    @include('bagian.gtag')
  </head>
  <body class="bg-biru-5">
    <div class="container mb-5">
      <nav class="navbar navbar-dark navbar-expand-lg bg-biru-2 fixed-top mt-3 ms-5 me-5 rounded-pill shadow d-none d-md-block">
        <div class="container" id="navbar-example2">
          <a class="navbar-brand" href="#profil"><strong>Siswandito P. N.</strong></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item {{ (request()->segment(1) === "#profil") ? 'active' : '' }}">
                <a class="nav-link" href="#profil">Profil</a>
              </li>
              <li class="nav-item {{ (request()->segment(1) === "#pengalaman") ? 'active' : '' }}">
                <a class="nav-link" href="#pengalaman">Pengalaman</a>
              </li>
              <li class="nav-item {{ (request()->segment(1) === "#pendidikan") ? 'active' : '' }}">
                <a class="nav-link" href="#pendidikan">Pendidikan</a>
              </li>
              <li class="nav-item {{ (request()->segment(1) === "#sertifikasi") ? 'active' : '' }}">
                <a class="nav-link" href="#sertifikasi">Lisensi dan Sertifikasi</a>
              </li>
              <li class="nav-item {{ (request()->segment(1) === "#portofolio") ? 'active' : '' }}">
                <a class="nav-link" href="#portofolio">Portofolio</a>
              </li>
              <li class="nav-item {{ (request()->segment(1) === "#penghargaan") ? 'active' : '' }}">
                <a class="nav-link" href="#penghargaan">Penghargaan</a>
              </li>
              <li class="nav-item {{ (request()->segment(1) === "#organisasi") ? 'active' : '' }}">
                <a class="nav-link" href="#organisasi">Organisasi</a>
              </li>
              <li class="nav-item {{ (request()->segment(1) === "#kontak") ? 'active' : '' }}">
                <a class="nav-link" href="#kontak">Kontak</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="card shadow mt-5 rounded" data-bs-spy="scroll" data-bs-target="#navbar-example2">
        <div class="card-body">
          <section id="profil">
            <div class="p-3">
              <div class="h4 pt-3 pb-2 mb-4 text-biru-1 border-bottom border-info">
                Profil
              </div>
              <div class="row">
                <div class="col-md-3 col-12 text-center">
                  <img src="{{ asset('storage/foto/profil.png') }}" alt="Foto diri Siswandito P. N." width="100%">
                  <span class="badge text-bg-info">
                    <?php
                      $mulai = new DateTime("1999-09-18");
                      $today = new DateTime();
                      $lama  = $today->diff($mulai);
                      echo $lama->y; echo " tahun";
                    ?>
                  </span>
                </div>
                <div class="col-md-9 col-12">
                  <h1 class="text-biru-1">Siswandito P. N.</h1>
                  <h5 class="text-biru-3">
                    <small>
                      Web Developer | Pengalaman di bidang TI 4+ tahun | Lulus SMK Rekayasa Perangkat Lunak (RPL)
                    </small>
                  </h5>
                  <p class="font-monospace">
                    Hai dunia! Perkenalkan, nama saya <strong>Siswandito</strong>, biasa dipanggil <strong>Tito</strong>. Saya telah menyelesaikan pembelajaran di jenjang SMK jurusan RPL pada tahun 2018 dengan nilai rata-rata 86. Saya juga telah bekerja sejak tahun 2018. Sampai dengan tulisan ini dibuat, saya memiliki pengalaman di bidang Teknologi Informasi (TI) selama lebih dari 4 tahun. Saat ini saya sedang bekerja sebagai programmer di PT Lumbung Karya Utama dan juga melanjutkan belajar di Universitas Terbuka program studi Sistem Informasi.
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section id="iklan1">
            <div class="row">
              <div class="col-12 p-3" align="center">
                <a href="https://www.dewaweb.com/aff.php?aff=28337" target="_blank">
                  <img class="img-fluid col-sm-5" src="https://www.dewaweb.com/templates/six/img/affiliatebanners/dewaweb-affiliate-banner-ninja-support-468x60px.gif" alt="Rekomendasi domain dan cloud hosting oleh SiswanditoPN">
                </a>
              </div>
            </div>
          </section>
          <section id="pengalaman">
            <div class="p-3">
              <div class="h4 pb-2 mb-4 text-biru-1 border-bottom border-info">
                Pengalaman
              </div>
              <div class="row">
                <div class="col-md-1 col-2">
                  <a href="https://lumbungkarya.com" target="_blank">
                    <img src="{{ asset('storage/logo/ptlumbungkaryautama.png') }}" alt="Logo PT Lumbung Karya Utama" width="100%">
                  </a>
                </div>
                <div class="col-md-11 col-10">
                  <h5 class="text-biru-1">
                    <a href="https://lumbungkarya.com" target="_blank" class="text-decoration-none">
                      Programmer
                    </a>
                  </h5>
                  <p>
                    <i class="fa-solid fa-building"></i>
                    <a href="https://lumbungkarya.com" target="_blank" class="text-decoration-none text-dark">
                      PT Lumbung Karya Utama
                    </a>
                    <i class="fa-solid fa-business-time"></i> 7 Januari 2019 - saat ini
                    <span class="badge text-bg-info">
                    <?php
                      $mulai = new DateTime("2019-01-07");
                      $today = new DateTime();
                      $lama  = $today->diff($mulai);
                      echo $lama->y; echo " tahun ".$lama->m." bulan ".$lama->d." hari";
                    ?>
                    </span>
                    <i class="fa-solid fa-location-dot"></i> Kota Malang, Jawa Timur, Indonesia
                  </p>
                  <p>
                    <ul>
                      <li>Menganalisis dasar masalah, memilih teknologi yang akan digunakan, merencanakan produksi sistem, memproduksi sistem, menguji coba hasil produksi, dan perbaikan kendala yang timbul pasca uji coba</li>
                      <li>Melayani pelanggan melalui telefon, pesan teks, surat elektronik, dan tatap muka</li>
                      <li>Membuat, mengoreksi, dan memperbaiki surat keluar serta melayani surat masuk</li>
                      <li>Merekrut Sumber Daya Manusia (SDM)</li>
                      <li>Membimbing peserta Praktik Kerja Lapangan (PKL)/Praktik Kerja Industri (Prakerin)/Praktik Kerja Nyata (PKN)/Magang</li>
                    </ul>
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-1 col-2">
                  <a href="http://cendana2000.co.id/" target="_blank">
                    <img src="{{ asset('storage/logo/c2000.png') }}" alt="Logo PT Cendana Teknika Utama" width="100%">
                  </a>
                </div>
                <div class="col-md-11 col-10">
                  <h5 class="text-biru-1">
                    <a href="http://cendana2000.co.id/" target="_blank" class="text-decoration-none">
                      Program Pendidikan Programmer
                    </a>
                  </h5>
                  <p>
                    <i class="fa-solid fa-building"></i>
                    <a href="http://cendana2000.co.id/" target="_blank" class="text-decoration-none text-dark">
                      PT Cendana Teknika Utama
                    </a>
                    <i class="fa-solid fa-business-time"></i> 3 September - Desember 2018 <span class="badge text-bg-info">4 bulan</span>
                    <i class="fa-solid fa-location-dot"></i> Kota Malang, Jawa Timur, Indonesia dan Jakarta Selatan, DKI Jakarta, Indonesia
                  </p>
                  <p>
                    <ul>
                      <li>Membuat web menggunakan CodeIgniter, Laravel, Bootstrap, dan CSS</li>
                      <li>Membuat aplikasi berbasis ERP Odoo</li>
                    </ul>
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-1 col-2">
                  <a href="https://assistindo.id/" target="_blank">
                    <img src="{{ asset('storage/logo/assistindo.png') }}" alt="Logo PT Assist Software Indonesia Pratama (Assistindo)" width="100%">
                  </a>
                </div>
                <div class="col-md-11 col-10">
                  <h5 class="text-biru-1">
                    <a href="https://assistindo.id/" target="_blank" class="text-decoration-none">
                      Praktik Kerja Lapangan (PKL) Rekayasa Perangkat Lunak (RPL) Sekolah Menengah Kejuruan (SMK)
                    </a>
                  </h5>
                  <p>
                    <i class="fa-solid fa-building"></i>
                    <a href="https://assistindo.id/" target="_blank" class="text-decoration-none text-dark">
                      PT Assist Software Indonesia Pratama
                    </a>
                    <i class="fa-solid fa-business-time"></i> Januari - Mei 2017 <span class="badge text-bg-info">5 bulan</span>
                    <i class="fa-solid fa-location-dot"></i> Kota Malang, Jawa Timur, Indonesia
                  </p>
                  <p>
                    <ul>
                      <li>Membuat aplikasi berbasis web</li>
                      <li>Melayani pelanggan melalui telefon dan tatap muka</li>
                      <li>Memperbaiki koneksi printer melalui kontrol jarak jauh/<i>remote</i></li>
                      <li>Mendesain poster undangan</li>
                    </ul>
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section id="iklan2">
            <div class="row">
              <div class="col-12 p-3" align="center">
                <a href="https://www.dewaweb.com/aff.php?aff=28337" target="_blank">
                  <img class="img-fluid col-sm-5" src="https://www.dewaweb.com/templates/six/img/affiliatebanners/dewaweb-affiliate-banner-slogan-468x60px.gif" alt="Rekomendasi domain dan cloud hosting oleh SiswanditoPN">
                </a>
              </div>
            </div>
          </section>
          <section id="pendidikan">
            <div class="p-3">
              <div class="h4 pt-3 pb-2 mb-4 text-biru-1 border-bottom border-info">
                Pendidikan
              </div>
              <div class="row">
                <div class="col-md-1 col-2">
                  <a href="https://lumbungkarya.com" target="_blank">
                    <img src="{{ asset('storage/logo/ut.png') }}" alt="Logo Universitas Terbuka" width="100%">
                  </a>
                </div>
                <div class="col-md-11 col-10">
                  <h5 class="text-biru-1">
                    <a href="https://lumbungkarya.com" target="_blank" class="text-decoration-none">
                      Sistem Informasi
                    </a>
                  </h5>
                  <p>
                    <i class="fa-solid fa-school"></i>
                    <a href="https://lumbungkarya.com" target="_blank" class="text-decoration-none text-dark">
                      Universitas Terbuka
                    </a>
                    <i class="fa-solid fa-business-time"></i> 2022 - saat ini
                    <i class="fa-solid fa-location-dot"></i> UPBJJ-UT Malang/Pembelajaran Non Tatap Muka
                  </p>
                  <p>
                    <ul>
                      <li>Masa registrasi 2022.2 tahun pelajaran 2022/2023</li>
                      <li>Jenjang sarjana (S1)</li>
                    </ul>
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-1 col-2">
                  <a href="https://lumbungkarya.com" target="_blank">
                    <img src="{{ asset('storage/logo/smkn8malang.png') }}" alt="Logo SMK Negeri 8 Malang" width="100%">
                  </a>
                </div>
                <div class="col-md-11 col-10">
                  <h5 class="text-biru-1">
                    <a href="https://lumbungkarya.com" target="_blank" class="text-decoration-none">
                      Rekayasa Perangkat Lunak (RPL)
                    </a>
                  </h5>
                  <p>
                    <i class="fa-solid fa-school-circle-check"></i>
                    <a href="https://lumbungkarya.com" target="_blank" class="text-decoration-none text-dark">
                      SMK Negeri 8 Malang
                    </a>
                    <i class="fa-solid fa-business-time"></i> 2015 - 2018
                    <i class="fa-solid fa-location-dot"></i> Kota Malang, Jawa Timur, Indonesia
                  </p>
                  <p>
                    Kegiatan :
                    <ul>
                      <li>Sekretaris I di Pengurus OSIS Masa Bakti 2016/2017</li>
                      <li>Sekretaris II di Pengurus OSIS Masa Bakti 2015/2016</li>
                      <li>Wartawan, penyiar radio, kepala subdivisi pengembangan sumber daya manusia, kepala subdivisi percetakan, dan kepala divisi redaksi/pemimpin redaksi di Lembaga Pers Siswa Commet (Ekstrakurikuler Jurnalistik)</li>
                      <li>Kader Perpustakaan</li>
                      <li>Kader Adiwiyata</li>
                    </ul>
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section id="iklan3">
            <div class="row">
              <div class="col-12 p-3" align="center">
                <a href="https://www.dewaweb.com/aff.php?aff=28337" target="_blank">
                  <img class="img-fluid col-sm-5" src="https://www.dewaweb.com/templates/six/img/affiliatebanners/dewaweb-affiliate-banner-ninja-support-468x60px.gif" alt="Rekomendasi domain dan cloud hosting oleh SiswanditoPN">
                </a>
              </div>
            </div>
          </section>
          <section id="sertifikasi">
            <div class="p-3">
              <div class="h4 pt-3 pb-2 mb-4 text-biru-1 border-bottom border-info">
                Lisensi dan Sertifikasi
              </div>
              <div class="row">
                <div class="col-md-1 col-2">
                  <a href="https://bnsp.go.id/" target="_blank">
                    <img src="{{ asset('storage/logo/bnsp.jpg') }}" alt="Logo Badan Nasional Sertifikasi Profesi" width="100%">
                  </a>
                </div>
                <div class="col-md-11 col-10">
                  <h5 class="text-biru-1">
                    <a href="https://bnsp.go.id/" target="_blank" class="text-decoration-none">
                      Lembaga Keuangan Mikro Pelaksanaaan Pemasaran UMKM
                    </a>
                  </h5>
                  <p>
                    <i class="fa-solid fa-building"></i>
                    <a href="https://bnsp.go.id/" target="_blank" class="text-decoration-none text-dark">
                      Badan Nasional Sertifikasi Profesi
                    </a>
                    <i class="fa-solid fa-business-time"></i> Desember 2019 - 2022
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-1 col-2">
                  <a href="https://bnsp.go.id/" target="_blank">
                    <img src="{{ asset('storage/logo/bnsp.jpg') }}" alt="Logo Badan Nasional Sertifikasi Profesi" width="100%">
                  </a>
                </div>
                <div class="col-md-11 col-10">
                  <h5 class="text-biru-1">
                    <a href="https://bnsp.go.id/" target="_blank" class="text-decoration-none">
                      Lembaga Keuangan Mikro Pengelola Usaha Mikro
                    </a>
                  </h5>
                  <p>
                    <i class="fa-solid fa-building"></i>
                    <a href="https://bnsp.go.id/" target="_blank" class="text-decoration-none text-dark">
                      Badan Nasional Sertifikasi Profesi
                    </a>
                    <i class="fa-solid fa-business-time"></i> Desember 2019 - 2022
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-1 col-2">
                  <a href="https://skillacademy.com/" target="_blank">
                    <img src="{{ asset('storage/logo/skillacademy.jpg') }}" alt="Logo Skill Academy by Ruangguru" width="100%">
                  </a>
                </div>
                <div class="col-md-11 col-10">
                  <h5 class="text-biru-1">
                    <a href="https://skillacademy.com/" target="_blank" class="text-decoration-none">
                      Bisnis Rumahan/UMKM Harus Tau: Menentukan Badan Usaha
                    </a>
                  </h5>
                  <p>
                    <i class="fa-solid fa-building"></i>
                    <a href="https://skillacademy.com/" target="_blank" class="text-decoration-none text-dark">
                      Skill Academy by Ruangguru
                    </a>
                    <i class="fa-solid fa-business-time"></i> November 2020
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-1 col-2">
                  <a href="https://skillacademy.com/" target="_blank">
                    <img src="{{ asset('storage/logo/skillacademy.jpg') }}" alt="Logo Skill Academy by Ruangguru" width="100%">
                  </a>
                </div>
                <div class="col-md-11 col-10">
                  <h5 class="text-biru-1">
                    <a href="https://skillacademy.com/" target="_blank" class="text-decoration-none">
                      Customer Service: Menguasai Teknik Pelayanan Terbaik
                    </a>
                  </h5>
                  <p>
                    <i class="fa-solid fa-building"></i>
                    <a href="https://skillacademy.com/" target="_blank" class="text-decoration-none text-dark">
                      Skill Academy by Ruangguru
                    </a>
                    <i class="fa-solid fa-business-time"></i> September 2020
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-1 col-2">
                  <a href="https://skillacademy.com/" target="_blank">
                    <img src="{{ asset('storage/logo/skillacademy.jpg') }}" alt="Logo Skill Academy by Ruangguru" width="100%">
                  </a>
                </div>
                <div class="col-md-11 col-10">
                  <h5 class="text-biru-1">
                    <a href="https://skillacademy.com/" target="_blank" class="text-decoration-none">
                      Dasar Korespondensi: Menulis email, chat, hingga laporan
                    </a>
                  </h5>
                  <p>
                    <i class="fa-solid fa-building"></i>
                    <a href="https://skillacademy.com/" target="_blank" class="text-decoration-none text-dark">
                      Skill Academy by Ruangguru
                    </a>
                    <i class="fa-solid fa-business-time"></i> September 2020
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-1 col-2">
                  <a href="https://skillacademy.com/" target="_blank">
                    <img src="{{ asset('storage/logo/skillacademy.jpg') }}" alt="Logo Skill Academy by Ruangguru" width="100%">
                  </a>
                </div>
                <div class="col-md-11 col-10">
                  <h5 class="text-biru-1">
                    <a href="https://skillacademy.com/" target="_blank" class="text-decoration-none">
                      Sukses Interview/Wawancara Kerja
                    </a>
                  </h5>
                  <p>
                    <i class="fa-solid fa-building"></i>
                    <a href="https://skillacademy.com/" target="_blank" class="text-decoration-none text-dark">
                      Skill Academy by Ruangguru
                    </a>
                    <i class="fa-solid fa-business-time"></i> September 2020
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-1 col-2">
                  <a href="https://skillacademy.com/" target="_blank">
                    <img src="{{ asset('storage/logo/skillacademy.jpg') }}" alt="Logo Skill Academy by Ruangguru" width="100%">
                  </a>
                </div>
                <div class="col-md-11 col-10">
                  <h5 class="text-biru-1">
                    <a href="https://skillacademy.com/" target="_blank" class="text-decoration-none">
                      Dasar Menjadi Public Speaker Andal
                    </a>
                  </h5>
                  <p>
                    <i class="fa-solid fa-building"></i>
                    <a href="https://skillacademy.com/" target="_blank" class="text-decoration-none text-dark">
                      Skill Academy by Ruangguru
                    </a>
                    <i class="fa-solid fa-business-time"></i> Agustus 2020
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-1 col-2">
                  <a href="https://skillacademy.com/" target="_blank">
                    <img src="{{ asset('storage/logo/skillacademy.jpg') }}" alt="Logo Skill Academy by Ruangguru" width="100%">
                  </a>
                </div>
                <div class="col-md-11 col-10">
                  <h5 class="text-biru-1">
                    <a href="https://skillacademy.com/" target="_blank" class="text-decoration-none">
                      Langkah Menjadi YouTuber Profesional Bersama Gita Savitri
                    </a>
                  </h5>
                  <p>
                    <i class="fa-solid fa-building"></i>
                    <a href="https://skillacademy.com/" target="_blank" class="text-decoration-none text-dark">
                      Skill Academy by Ruangguru
                    </a>
                    <i class="fa-solid fa-business-time"></i> Agustus 2020
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-1 col-2">
                  <a href="https://umm.ac.id/" target="_blank">
                    <img src="{{ asset('storage/logo/umm.jpg') }}" alt="Logo Universitas Muhammadiyah Malang" width="100%">
                  </a>
                </div>
                <div class="col-md-11 col-10">
                  <h5 class="text-biru-1">
                    <a href="https://umm.ac.id/" target="_blank" class="text-decoration-none">
                      Guru Pembina Lomba Debat Pancasila Tingkat SMA/MA/SMK Sederajat
                    </a>
                  </h5>
                  <p>
                    <i class="fa-solid fa-building"></i>
                    <a href="https://umm.ac.id/" target="_blank" class="text-decoration-none text-dark">
                      Universitas Muhammadiyah Malang
                    </a>
                    <i class="fa-solid fa-business-time"></i> Mei 2018
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-1 col-2">
                  <a href="https://www.oracle.com/" target="_blank">
                    <img src="{{ asset('storage/logo/oracle.jpg') }}" alt="Logo Oracle" width="100%">
                  </a>
                </div>
                <div class="col-md-11 col-10">
                  <h5 class="text-biru-1">
                    <a href="https://www.oracle.com/" target="_blank" class="text-decoration-none">
                      Java Foundations
                    </a>
                  </h5>
                  <p>
                    <i class="fa-solid fa-building"></i>
                    <a href="https://www.oracle.com/" target="_blank" class="text-decoration-none text-dark">
                      Oracle
                    </a>
                    <i class="fa-solid fa-business-time"></i> April 2018
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-1 col-2">
                  <a href="https://www.oracle.com/" target="_blank">
                    <img src="{{ asset('storage/logo/unmer.jpg') }}" alt="Logo Universitas Merdeka Malang" width="100%">
                  </a>
                </div>
                <div class="col-md-11 col-10">
                  <h5 class="text-biru-1">
                    <a href="https://www.oracle.com/" target="_blank" class="text-decoration-none">
                      Test of English as a Foreign Language (TOEFL)
                    </a>
                  </h5>
                  <p>
                    <i class="fa-solid fa-building"></i>
                    <a href="https://www.oracle.com/" target="_blank" class="text-decoration-none text-dark">
                      Language Center Merdeka University Malang
                    </a>
                    <i class="fa-solid fa-business-time"></i> April 2018
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-1 col-2">
                  <a href="https://www.oracle.com/" target="_blank">
                    <img src="{{ asset('storage/logo/oracle.jpg') }}" alt="Logo Oracle" width="100%">
                  </a>
                </div>
                <div class="col-md-11 col-10">
                  <h5 class="text-biru-1">
                    <a href="https://www.oracle.com/" target="_blank" class="text-decoration-none">
                      Java Fundamentals
                    </a>
                  </h5>
                  <p>
                    <i class="fa-solid fa-building"></i>
                    <a href="https://www.oracle.com/" target="_blank" class="text-decoration-none text-dark">
                      Oracle
                    </a>
                    <i class="fa-solid fa-business-time"></i> Maret 2018
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-1 col-2">
                  <a href="#" target="_blank">
                    <img src="{{ asset('storage/logo/pppptk.jpg') }}" alt="Logo PPPPTK BOE/VEDC Malang" width="100%">
                  </a>
                </div>
                <div class="col-md-11 col-10">
                  <h5 class="text-biru-1">
                    <a href="#" target="_blank" class="text-decoration-none">
                      JENI 1 : Java Programming 1 & Java Programming 2
                    </a>
                  </h5>
                  <p>
                    <i class="fa-solid fa-building"></i>
                    <a href="#" target="_blank" class="text-decoration-none text-dark">
                      PPPPTK BOE/VEDC Malang
                    </a>
                    <i class="fa-solid fa-business-time"></i> Februari 2018
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section id="iklan4">
            <div class="row">
              <div class="col-12 p-3" align="center">
                <a href="https://www.dewaweb.com/aff.php?aff=28337" target="_blank">
                  <img class="img-fluid col-sm-5" src="https://www.dewaweb.com/templates/six/img/affiliatebanners/dewaweb-affiliate-banner-slogan-468x60px.gif" alt="Rekomendasi domain dan cloud hosting oleh SiswanditoPN">
                </a>
              </div>
            </div>
          </section>
          <section id="portofolio">
            <div class="p-3">
              <div class="h4 pt-3 pb-2 mb-4 text-biru-1 border-bottom border-info">
                Portofolio
              </div>
              <!-- Prepare a container for your calendar. -->
              <script src="https://cdn.rawgit.com/IonicaBizau/github-calendar/gh-pages/dist/github-calendar.min.js"></script>

              <!-- Optionally, include the theme (if you don't want to struggle to write the CSS) -->
              <link rel="stylesheet" href="https://cdn.rawgit.com/IonicaBizau/github-calendar/gh-pages/dist/github-calendar.css"/>

              <!-- Prepare a container for your calendar. -->
              <div class="calendar">
                <!-- Loading stuff -->
                Memuat data...
              </div>

              <script>
                new GitHubCalendar(".calendar", "siswanditopn");
              </script>
            </div>
          </section>
          <section id="iklan5">
            <div class="row">
              <div class="col-12 p-3" align="center">
                <a href="https://www.dewaweb.com/aff.php?aff=28337" target="_blank">
                  <img class="img-fluid col-sm-5" src="https://www.dewaweb.com/templates/six/img/affiliatebanners/dewaweb-affiliate-banner-ninja-support-468x60px.gif" alt="Rekomendasi domain dan cloud hosting oleh SiswanditoPN">
                </a>
              </div>
            </div>
          </section>
          <section id="penghargaan">
            <div class="p-3">
              <div class="h4 pt-3 pb-2 mb-4 text-biru-1 border-bottom border-info">
                Penghargaan
              </div>
              <div class="row">
                <div class="col-md-1 col-2">
                  <a href="https://dinsos.jatimprov.go.id/" target="_blank">
                    <img src="{{ asset('storage/logo/dinsos.png') }}" alt="Logo PT Lumbung Karya Utama" width="100%">
                  </a>
                </div>
                <div class="col-md-11 col-10">
                  <h5 class="text-biru-1">
                    <a href="https://dinsos.jatimprov.go.id/" target="_blank" class="text-decoration-none">
                      Juara I Olympiade Pahlawan Indonesia
                    </a>
                  </h5>
                  <p>
                    <i class="fa-solid fa-building"></i>
                    <a href="https://dinsos.jatimprov.go.id/" target="_blank" class="text-decoration-none text-dark">
                      Dinas Sosial Provinsi Jawa Timur
                    </a>
                    <i class="fa-solid fa-business-time"></i> 2016
                    <i class="fa-solid fa-location-dot"></i> Skala Provinsi
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section id="iklan6">
            <div class="row">
              <div class="col-12 p-3" align="center">
                <a href="https://www.dewaweb.com/aff.php?aff=28337" target="_blank">
                  <img class="img-fluid col-sm-5" src="https://www.dewaweb.com/templates/six/img/affiliatebanners/dewaweb-affiliate-banner-slogan-468x60px.gif" alt="Rekomendasi domain dan cloud hosting oleh SiswanditoPN">
                </a>
              </div>
            </div>
          </section>
          <section id="organisasi">
            <div class="p-3">
              <div class="h4 pt-3 pb-2 mb-4 text-biru-1 border-bottom border-info">
                Organisasi
              </div>
              <div class="row">
                <div class="col-md-1 col-2">
                  <a href="https://www.smkn8malang.sch.id/" target="_blank">
                    <img src="{{ asset('storage/logo/oshivema.png') }}" alt="Logo OSIS SMK Negeri 8 Malang (Oshivema)" width="100%">
                  </a>
                </div>
                <div class="col-md-11 col-10">
                  <h5 class="text-biru-1">
                    <a href="https://www.smkn8malang.sch.id/" target="_blank" class="text-decoration-none">
                      Sekretaris I
                    </a>
                  </h5>
                  <p>
                    <i class="fa-solid fa-building"></i>
                    <a href="https://www.smkn8malang.sch.id/" target="_blank" class="text-decoration-none text-dark">
                      Pengurus OSIS SMK Negeri 8 Malang (Oshivema)
                    </a>
                    <i class="fa-solid fa-business-time"></i> Masa Bakti 2016/2017
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-1 col-2">
                  <a href="https://www.smkn8malang.sch.id/" target="_blank">
                    <img src="{{ asset('storage/logo/oshivema.png') }}" alt="Logo OSIS SMK Negeri 8 Malang (Oshivema)" width="100%">
                  </a>
                </div>
                <div class="col-md-11 col-10">
                  <h5 class="text-biru-1">
                    <a href="https://www.smkn8malang.sch.id/" target="_blank" class="text-decoration-none">
                      Sekretaris II
                    </a>
                  </h5>
                  <p>
                    <i class="fa-solid fa-building"></i>
                    <a href="https://www.smkn8malang.sch.id/" target="_blank" class="text-decoration-none text-dark">
                      Pengurus OSIS SMK Negeri 8 Malang (Oshivema)
                    </a>
                    <i class="fa-solid fa-business-time"></i> Masa Bakti 2015/2016
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-1 col-2">
                  <a href="https://www.smkn8malang.sch.id/" target="_blank">
                    <img src="{{ asset('storage/logo/smkn8malang.png') }}" alt="Logo Lembaga Pers Siswa Commet (Ekstrakurikuler Jurnalistik SMK Negeri 8 Malang)" width="100%">
                  </a>
                </div>
                <div class="col-md-11 col-10">
                  <h5 class="text-biru-1">
                    <a href="https://www.smkn8malang.sch.id/" target="_blank" class="text-decoration-none">
                      Jurnalis
                    </a>
                  </h5>
                  <p>
                    <i class="fa-solid fa-building"></i>
                    <a href="https://www.smkn8malang.sch.id/" target="_blank" class="text-decoration-none text-dark">
                      Lembaga Pers Siswa Commet (Ekstrakurikuler Jurnalistik SMK Negeri 8 Malang)
                    </a>
                    <i class="fa-solid fa-business-time"></i> 2015 - 2018
                  </p>
                  <p>
                    <ul>
                      <li>Wartawan</li>
                      <li>Penyiar radio</li>
                      <li>Kepala subdivisi pengembangan sumber daya manusia</li>
                      <li>Kepala divisi redaksi/pemimpin redaksi</li>
                    </ul>
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-1 col-2">
                  <a href="https://www.smkn8malang.sch.id/" target="_blank">
                    <img src="{{ asset('storage/logo/smkn8malang.png') }}" alt="Logo Kader Perpustakaan SMK Negeri 8 Malang" width="100%">
                  </a>
                </div>
                <div class="col-md-11 col-10">
                  <h5 class="text-biru-1">
                    <a href="https://www.smkn8malang.sch.id/" target="_blank" class="text-decoration-none">
                      Anggota
                    </a>
                  </h5>
                  <p>
                    <i class="fa-solid fa-building"></i>
                    <a href="https://www.smkn8malang.sch.id/" target="_blank" class="text-decoration-none text-dark">
                      Kader Perpustakaan SMK Negeri 8 Malang
                    </a>
                    <i class="fa-solid fa-business-time"></i> 2016 - 2018
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-1 col-2">
                  <a href="https://www.smkn8malang.sch.id/" target="_blank">
                    <img src="{{ asset('storage/logo/smkn8malang.png') }}" alt="Logo Kader Adiwiyata SMK Negeri 8 Malang" width="100%">
                  </a>
                </div>
                <div class="col-md-11 col-10">
                  <h5 class="text-biru-1">
                    <a href="https://www.smkn8malang.sch.id/" target="_blank" class="text-decoration-none">
                      Anggota
                    </a>
                  </h5>
                  <p>
                    <i class="fa-solid fa-building"></i>
                    <a href="https://www.smkn8malang.sch.id/" target="_blank" class="text-decoration-none text-dark">
                      Kader Adiwiyata SMK Negeri 8 Malang
                    </a>
                    <i class="fa-solid fa-business-time"></i> 2015 - 2018
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section id="iklan7">
            <div class="row">
              <div class="col-12 p-3" align="center">
                <a href="https://www.dewaweb.com/aff.php?aff=28337" target="_blank">
                  <img class="img-fluid col-sm-5" src="https://www.dewaweb.com/templates/six/img/affiliatebanners/dewaweb-affiliate-banner-ninja-support-468x60px.gif" alt="Rekomendasi domain dan cloud hosting oleh SiswanditoPN">
                </a>
              </div>
            </div>
          </section>
          <section id="kontak">
            <div class="p-3">
              <div class="h4 pt-3 pb-2 mb-4 text-biru-1 border-bottom border-info">
                Kontak
              </div>
              <div class="row mb-3">
                <div class="col-12">
                  <a href="mailto:kontak@siswanditopn.my.id" target="blank" class="text-decoration-none text-dark">
                    <img align="center" src="https://img.icons8.com/fluency/96/000000/cloud-mail.png" alt="Mail" height="30" width="40" />
                    kontak@siswanditopn.my.id
                  </a>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-12">
                  <a href="https://github.com/siswanditopn" target="blank" class="text-decoration-none text-dark">
                    <img align="center" src="https://github.com/fluidicon.png" alt="Github siswanditopn" height="30" width="40" />
                    https://github.com/siswanditopn
                  </a>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-12">
                  <a href="https://twitter.com/siswanditopn" target="blank" class="text-decoration-none text-dark">
                    <img align="center" src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/twitter.svg" alt="Twitter siswanditopn" height="30" width="40" />
                    https://twitter.com/siswanditopn
                  </a>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-12">
                  <a href="https://linkedin.com/in/siswanditopn" target="blank" class="text-decoration-none text-dark">
                    <img align="center" src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/linked-in-alt.svg" alt="LinkedIn siswanditopn" height="30" width="40" />
                    https://www.linkedin.com/in/siswanditopn/
                  </a>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-12">
                  <a href="https://fb.com/siswanditopn" target="blank" class="text-decoration-none text-dark">
                    <img align="center" src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/facebook.svg" alt="Facebook siswanditopn" height="30" width="40" />
                    https://www.facebook.com/SiswanditoPN/
                  </a>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-12">
                  <a href="https://instagram.com/siswanditopn" target="blank" class="text-decoration-none text-dark">
                    <img align="center" src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/instagram.svg" alt="Instagram siswanditopn" height="30" width="40" />
                    https://instagram.com/siswanditopn
                  </a>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-12">
                  <a href="https://www.youtube.com/c/siswanditopn" target="blank" class="text-decoration-none text-dark">
                    <img align="center" src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/youtube.svg" alt="YouTube siswanditopn" height="30" width="40" />
                    https://www.youtube.com/c/siswanditopn
                  </a>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-12">
                  <a href="https://discord.gg/SiswanditoPN#3082" target="blank" class="text-decoration-none text-dark">
                    <img align="center" src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/discord.svg" alt="Discord SiswanditoPN#3082" height="30" width="40" />
                    SiswanditoPN#3082
                  </a>
                </div>
              </div>
            </div>
          </section>
          <section id="iklan8">
            <div class="row">
              <div class="col-12 p-3" align="center">
                <a href="https://www.dewaweb.com/aff.php?aff=28337" target="_blank">
                  <img class="img-fluid col-sm-5" src="https://www.dewaweb.com/templates/six/img/affiliatebanners/dewaweb-affiliate-banner-slogan-468x60px.gif" alt="Rekomendasi domain dan cloud hosting oleh SiswanditoPN">
                </a>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-12 text-center">
        Dibuat dengan <i class="bi bi-heart-fill" style="color: red;"></i> oleh Siswandito P. N.
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>