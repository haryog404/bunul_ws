@extends('layout.base-layout')
@section('title', 'Sewa Aset')
@section('active2', 'active')
@section('content')

<link rel=stylesheet href="{{url('/css/stylenya.css')}}">

<style>
    h1 {
          font-size: 60px;
        }
        .page-title {
            position: relative; /* suaikan dengan tinggi navbar *//* Sesuaikan ukuran teks */
            color: transparent; /* Warna teks transparan */
            background: -webkit-linear-gradient(#000000, #e0e0e0); /* Efek gradient sebagai background teks */
            -webkit-background-clip: text; /* Menggunakan teks sebagai clip pada background */
            -webkit-text-fill-color: transparent; /* Membuat warna teks transparan */
            font-weight: bold; /* Menambahkan tebal pada teks */
            z-index: 999; /* Membuat teks berada di atas konten lain */
            text-align: center;
            margin-top: 120px;
        }
    body {
        background-image: url('/assets/bg-laporan.jpeg');
        background-size: 50%; /* Mengatur ukuran gambar menjadi lebih kecil */
        background-attachment: fixed;
        background-repeat: no-repeat; /* Untuk menghindari pengulangan gambar */
        background-position: center; /* Memposisikan gambar di tengah */
        position: absolute;
        width: 100%;
        min-height: 100vh;
    }
</style>

<div class="page-title">
    <h1><b>Aset-aset</b></h1>
</div>


<div class="containeran mt-0">
    <div class="cardan">
        <img src="{{url('/assets/masjid2.jpg')}}" alt="Gambar 1">
        <div class="descriptionnn"><h3>Masjid Al-Jihad</h3>
            <p>
                Jl. Bondoyudo No.7, RW.3, Keduyo, Bunulrejo, Kec. Blimbing, Kota Malang, Jawa Timur 65123, Indonesia
                Telepon:(0341) 404217 Web:www.masjidaljihad.net
                <a href="{{url('aset/3')}}">Read More</a>
        </div>
    </div>
    <div class="cardan">
        <img src="{{url('/assets/tamanamprong.jpg')}}" alt="Gambar 1">
        <div class="descriptionnn"><h3>Taman Amprong</h3>
            <p>Alamat: 2JPR+CX6, Jl. Amprong, Bunulrejo, Kec. Blimbing, Kota Malang, Jawa Timur 65123
                Jam: 
                Buka 24 jam
                <a href="{{url('aset/6')}}">Read More</a></p>
        </div>
    </div>
    <div class="cardan">
        <img src="{{url('/assets/anakanak.jpg')}}" alt="Gambar 2">
        <div class="descriptionnn"><h3>Taman Anak-Anak</h3>
            <p>Taman umum untuk anak anak, berada di sekitar taman Amprong
                <a href="{{url('aset/1')}}">Read More</a>
            </p>
        </div>
    </div>
    <div class="cardan">
        <img src="{{url('/assets/baskettini.jpg')}}" alt="Gambar 3">
        <div class="descriptionnn"><h3>Lapangan Basket</h3>
            <p>Dibuka untuk umum, dan gunakan sebaik mungkin dengan tidak merusak fasilitas ataupun membuang sampah sembarang tempat
                <a href="{{url('aset/2')}}">Read More</a>
            </p>
        </div>
    </div>
    <div class="cardan">
        <img src="{{url('/assets/sdn2.jpg')}}" alt="Gambar 1">
        <div class="descriptionnn"><h3>SDN 2 Bunulrejo</h3>
            <p>Alamat: Jl. Bedadung No.3, RT.7/RW.3, Bunulrejo, Kec. Blimbing, Kota Malang, Jawa Timur 65123
                Telepon: (0341) 4384670
                Jam: 
                Selasa  06.30–14.30
                Rabu    06.30–14.30
                Kamis   06.30–14.30
                Jumat   06.30–14.30
                Sabtu   Tutup
                Minggu  Tutup
                Senin   06.30–14.30
                <a href="{{url('aset/5')}}">Read More</a></p>
        </div>
    </div>
    <div class="cardan">
        <img src="{{url('/assets/pasartakjil.jpg')}}" alt="Gambar 2">
        <div class="descriptionnn"><h3>Pasar Takjil</h3>
            <p>Pasar takjil bulan ramadhan
                <a href="{{url('aset/7')}}">Read More</a>
            </p>
        </div>
    </div>
    <div class="cardan">
        <img src="{{url('/assets/oleholeh.jpg')}}" alt="Gambar 3">
        <div class="descriptionnn"><h3>Pusat Oleh Oleh</h3>
            <p>Alamat: Jl. Lekso No.20, Bunulrejo, Kec. Blimbing, Kota Malang, Jawa Timur 65123
                Telepon: 0817-5748-899
                Jam: 
                Selasa  06.30–20.00
                Rabu    06.30–20.00
                Kamis   06.30–20.00
                Jumat   06.30–20.00
                Sabtu   06.30–20.00
                Minggu  06.30–20.00
                Senin   06.30–20.00
                <a href="{{url('aset/4')}}">Read More</a></p>
        </div>
    </div>
    <!-- Tambahkan card dan deskripsi lainnya sesuai kebutuhan -->
</div>

@endsection