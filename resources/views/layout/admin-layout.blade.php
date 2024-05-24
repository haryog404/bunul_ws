<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sequel+Sans%3A400"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C600%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans%3A400%2C500%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia+Pro%3A600"/>

  <link rel="stylesheet" href="{{url('/css/bootstrap.min.css')}}"/>
  <style>
    .footer {
        margin-top: 20%;
        text-align: left;
    }

    /* Atur ukuran gambar */
    .footer img {
        width: 100%; /* Atur lebar gambar */
        height: auto; /* Biarkan tinggi gambar menyesuaikan proporsi */
        margin: 10px; /* Atur margin di sekitar gambar */
    }
    .socmed {
      width: 15%;
      height: auto;
      text-align: start;
    }
    .navbar-brand {
        padding: 10pt;
        margin: 0;
        padding-left: 7%;
      }
      .nav-item {
        margin-left: 30pt;
        margin-right: -10pt;
      }
      h1 {
        font-size: 60px;
      }
      .page-title {
          position: relative; /* Menjadikan posisi elemen absolute */
          margin-top: 120px; /* Sesuaikan dengan tinggi navbar *//* Sesuaikan ukuran teks */
          color: transparent; /* Warna teks transparan */
          background: -webkit-linear-gradient(#000000, #e0e0e0); /* Efek gradient sebagai background teks */
          -webkit-background-clip: text; /* Menggunakan teks sebagai clip pada background */
          -webkit-text-fill-color: transparent; /* Membuat warna teks transparan */
          font-weight: bold; /* Menambahkan tebal pada teks */
          z-index: 999; /* Membuat teks berada di atas konten lain */
          text-align: center;
      }
      .image-container {
        width: 10%; /* Sesuaikan dengan lebar container */
        height: auto;
        position: relative;
      }
      .image-container img {
        width: 100%;
      }
</style>
  
  
</head>
 <div class="container fixed">
 <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container-fluid vertically-aligned">
    <a class="navbar-brand" href="#"><b>ADMIN BUNULREJO</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-1" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link @yield('active1')" href="{{url('/admin-laporan')}}">Laporan Pengaduan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('active2')" href="{{url('/admin-pengajuan')}}">Laporan Pengajuan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/logout-admin')}}">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  </div>

@yield('content')

<div class="container footer">
  <img class="" src="./assets/kel-bunulrejo-2.png"/>
  <div class="socmed">
    <img class="" src="./assets/auto-group-qcsj.png"/>
  </div>
</div>
<script src="{{url('/js/bootstrap.min.js')}}"></script>
</body>