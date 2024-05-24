@extends('layout.base-layout')
@section('title',  'Laporan Pengaduan')
@section('active3', 'active')
@section('content')

<link rel="stylesheet" href="{{url("css/ks.css")}}">
<div class="main-bima">
  
  <div class="row page-title">
    <h1 class="col-12"><b>Laporan Pengaduan</b></h1>
  </div>
  
  <div class="bima row">
    <div class="container-report col-9">
      
    <div class="report-form">
        <h2>Sampaikan Laporan Anda</h2>
        <form method="post" action="{{url('/tambah-laporan')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="report-classification">Pilih Klasifikasi Laporan</label>
            <select id="report-classification" name="klasifikasi_laporan">
              <option value="1">PENGADUAN</option>
              <option value="2">ASPIRASI</option>
            </select>
          </div>
          <div class="form-group">
            <label for="report-title">Ketik Judul Laporan Anda *</label>
            <input type="text" required placeholder="" name="judul_laporan">
          </div>
          <div class="form-group">
            <label for="report-content">Ketik Isi Laporan Anda *</label>
            <textarea required name="isi_laporan"></textarea>
          </div>
          <div class="form-group">
            <label for="report-date">Pilih Tanggal Kejadian *</label>
            <input type="date" id="report-date" required name="tgl_kejadian">
          </div>
          <div class="form-group">
            <label for="report-location">Ketik Lokasi Kejadian *</label>
            <input type="text" id="report-location" required name="lokasi_kejadian">
          </div>
          <div class="form-group">
            <label for="anonymity">Ingin Laporan Anda Tetap Anonim?</label>
            <input type="checkbox" id="anonymity">
          </div>
          <div class="form-group" id="name">
            <label for="secrecy">Ingin Menulis Nama Pelapor?</label>
            <input type="text" id="name" name="nama_pelapor">
          </div>
          <div class="form-group">
            <label for="report-image">Unggah Gambar (Opsional)</label>
            <input type="file" name="gambar">
          </div>
          <div class="form-group">
            <p>* : Kolom wajib diisi</p>
          </div>
          <button type="submit">Kirim Laporan</button>
        </form>
      </div>
    </div>
    <div class="container-report col-3">
      
      <div class="report-form-right">
      <div class="report">
        <h2>Laporan Warga</h2>
        @forelse($laporans as $l)
        @php
          $rep = $l['balasan_admin'];
          $rep = explode('>', $rep);
        @endphp
        <div class="report-item">
            <h3>{{$l['nama_pelapor']}}</h3>
            <h4>Judul laporan: {{$l['judul_laporan']}}</h4>
            <h4>Tanggal kejadian: {{$l['tgl_kejadian']}}</h4>
            <p class="mb-0">{{$l['isi_laporan']}}</p>
            @if($l['gambar']!=null)
            <div class="image-container">
              
              <img src="{{url('/assets/'.$l['gambar'])}}" alt="">
             
            </div>
            @endif
            
            <p class="date">Laporan dibuat: {{$l['dibuat']}}</p>
            @foreach($rep as $r)
            <p class="admin-reply">Balasan Admin: {{$r}}</p>
            @endforeach
        </div>
        @empty
        <div class="report-item">
            <h3>Laporan Kosong</h3>
            <p>Belum ada laporan yang masuk di database!</p>
        </div>
        @endforelse
    </div>
    </div>
  </div>
</div>
</div>

<script>
    // Mendapatkan referensi elemen
    var checkbox = document.getElementById("anonymity");
    var formContainer = document.getElementById("name");

    // Fungsi untuk menampilkan atau menyembunyikan form
    function toggleForm(display) {
        formContainer.style.display = display ? "block" : "none";
    }

    // Event listener untuk checkbox
    checkbox.addEventListener("change", function() {
        toggleForm(!this.checked);
    });
</script>


@endsection