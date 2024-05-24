@extends('layout.base-layout')
@section('title', 'Taman Anak-Anak')
@section('active2', 'active')
@section('active5', 'bab')
@section('content')

<link rel=stylesheet href="{{url('css/ks.css')}}">
<link rel=stylesheet href="{{url('css/stylenyamasjid.css')}}">
<div class="containeran">
    <div class="cardan">
        <img src="{{url('assets/oleholeh.jpg')}}" alt="Gambar 1">
            <div class="descriptionnn"><h3>Toko Oleh-Oleh dan Cemilan</h3>
                <p>
                    Untuk Anda yang ingin beli aneka camilan di Malang, Anda bisa datang ke outlet Camilan dan oleh-Oleh 99.
                    Berbagai camilan atau jajanan tersedia lengkap di sini. Seperti aneka keripik, kripik tempe, keripik buah hingga jajanan pasar ada semua.
                    <br><br><br><br><br>
                    <p><i class="fas fa-map-marker-alt"></i> Provinsi: Jawa Timur</p>
        <p><i class="fas fa-city"></i> Kota: Malang</p>
        <p><i class="fas fa-map-marked-alt"></i> Kecamatan: Blimbing</p>
        <p><i class="fas fa-map-pin"></i> Kelurahan: Bunulrejo</p>
        <p><i class="fas fa-address-card"></i> Alamat: Jl. Lekso No.20, Bunulrejo, Kec. Blimbing, Kota Malang, Jawa Timur 65123</p>
        <p><i class="fas fa-phone"></i> Telepon: (0341) 498-280</p>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.3375172730816!2d112.6398075253793!3d-7.964028538522282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62835c40a0e65%3A0x8143db4ecf575331!2sCamilan%20Dan%20Oleh-oleh%2099!5e0!3m2!1sid!2sid!4v1711466051485!5m2!1sid!2sid" width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
</div>
@endsection  