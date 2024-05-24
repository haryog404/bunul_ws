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
      nav {
        position: fixed;
        align-items: center;
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
  </style>
</head>
<body>
<div class="fixed">
 <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container-fluid vertically-aligned">
    <a class="navbar-brand" href="#"><b>BUNULREJO</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-1" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link @yield('active1')" href="{{url('/home')}}">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('active2')" href="{{url('/user-aset')}}">Aset-aset</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('active3')" href="{{url('/user-laporan')}}">Laporan Pengaduan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('active4')" href="{{url('/user-pengajuan')}}">Surat Administrasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('active5')" href="{{url('/login-admin')}}">Admin</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>

@yield('content')


@sectionMissing('active5')
<div class="container footer">
  <img class="" src="./assets/kel-bunulrejo-2.png"/>
  <div class="socmed">
    <img class="" src="./assets/auto-group-qcsj.png"/>
  </div>
</div>
<script src="{{url('/js/bootstrap.min.js')}}"></script>
<script>
  var docWidth = document.documentElement.offsetWidth;

  [].forEach.call(
    document.querySelectorAll('*'),
    function(el) {
      if (el.offsetWidth > docWidth) {
        console.log(el);
      }
    }
  );
</script>
@endif
</body>