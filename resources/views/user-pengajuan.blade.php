@extends('layout.base-layout')
@section('title',  'Surat Administrasi')
@section('active4', 'active')
@section('content')

<link rel="stylesheet" href="{{url("css/ks.css")}}">

<div class="main-bima">
  
  <div class="row page-title">
    <h1 class="col-12"><b>Surat Administrasi</b></h1>
  </div>
  
  <div class="bima row">
    <div class="container-report col-9">
      
    <div class="report-form">
        <h2>Buat Pengajuan Anda</h2>
        <form method="post" action="{{url('/tambah-pengajuan')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="report-classification">Pilih Jenis Surat</label>
            <select id="report-classification" name="jenis_pengajuan">
              <option value="0">Surat Pengantar</option>
              <option value="1">Surat Keterangan Domisili</option>
              <option value="2">Surat Keterangan Tidak Mampu</option>
              <option value="3">Surat Keterangan Kelahiran</option>
              <option value="4">Surat Keterangan Kematian</option>
              <option value="5">Surat Izin Tempat Usaha</option>
              <option value="6">Surat Izin Mendirikan Bangunan (IMB)</option>
              <option value="7">Surat Keterangan Ahli Waris</option>
              <option value="8">Surat Keterangan Pindah</option>
              <option value="9">Surat Keterangan Kehilangan</option>
            </select>
          </div>
          <div class="form-group">
            <label for="report-title">Ketik Nama Anda *</label>
            <input type="text" required placeholder="" name="nama_pengajuan">
          </div>
          <div class="form-group">
            <label for="report-content">Ketik NIK Anda *</label>
            <input type="text" id="report-location" required name="nik_pengajuan">
          </div>
          <div class="form-group">
            <label for="report-location">Ketik No. KK Anda *</label>
            <input type="text" id="report-location" required name="kk_pengajuan">
          </div>
          <div class="form-group">
            <label for="report-location">Ketik No. HP (Whatsapp) Anda *</label>
            <input type="text" id="report-location" required name="no_hp">
          </div>
          <div class="form-group">
            <label for="report-content">Ketik Alamat Anda *</label>
            <textarea required name="alamat_pengajuan"></textarea>
          </div>
          <div class="form-group">
            <label for="report-location">Tulis Tujuan Dibuatnya Surat *</label>
            <textarea required name="tujuan_pengajuan"></textarea>
          </div>
          <div class="form-group">
            <label for="report-location">Catatan</label>
            <textarea name="catatan_pengajuan"></textarea>
          </div>
          <div class="form-group">
            <p>* : Kolom wajib diisi</p>
          </div>
          <button type="submit">Kirim Pengajuan</button>
        </form>
      </div>
    </div>
    <div class="container-report col-3">
      
      <div class="report-form-right">
      <div class="report">
        <h2>Status Pengajuan</h2>
        @forelse($laporans as $l)
        <div class="report-item">
            <h3>Nama pemohon: {{$l['nama_pengajuan']}}</h3>
            <p>Tanggal diajukan: {{$l['dibuat']}}</p>
            <div class="admin-reply row p-0">
              <div class="col-8 p-0 d-flex my-auto">
                  <p class="m-0">Status Pengajuan: </p>  
              </div>
              <div class="col-4 p-0">
                @if($l['verifikasi_pengajuan']==1)
                <button class="btn btn-success p-0 w-75" disabled="true">✓</button>
                @else
                <button class="btn btn-secondary p-0 w-75" disabled="true">✓</button>
                @endif
              </div>
            </div>
        </div>
        @empty
        <div class="report-item">
            <h3>Pengajuan Kosong</h3>
            <p>Belum ada pengajuan yang masuk di database!</p>
        </div>
        @endforelse
    </div>
    </div>
  </div>
</div>
</div>


@endsection