@extends('layout.base-layout')
@section('title', 'Taman Anak-Anak')
@section('active2', 'active')
@section('active5', 'bab')
@section('content')

<link rel=stylesheet href="{{url('css/ks.css')}}">
<link rel=stylesheet href="{{url('css/stylenyamasjid.css')}}">

<div class="containeran">
    <div class="cardan">
        <img src="{{url('assets/anakanak.jpg')}}" alt="Gambar 2">
            <div class="descriptionnn"><h3>Taman Anak-anak</h3>
                <p>
                    Fasilitas anak-anak di Kelurahan Bunulrejo, Malang, merupakan tempat yang dirancang khusus untuk memberikan hiburan dan kegiatan edukatif bagi anak-anak. 
                    Untuk menggunakan fasilitas anak-anak dengan baik, pastikan untuk menjaga keselamatan dan kebersihan. Awasi anak-anak Anda selama bermain dan pastikan mereka menggunakan peralatan dengan benar. Ajari mereka untuk menghormati ruang bersama dan merapikan setiap mainan setelah selesai digunakan. Dengan demikian, kita dapat menciptakan lingkungan yang aman.
                    Taman ini berada disekitar taman Amprong
                </p>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d807.0180565864326!2d112.64156452675203!3d-7.96448243977634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629edb0685e83%3A0x722c2dde09a7b617!2sTaman%20Amprong!5e0!3m2!1sid!2sid!4v1711464050160!5m2!1sid!2sid" width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
</div>
@endsection