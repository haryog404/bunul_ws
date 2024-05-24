@extends('layout.admin-layout')
@section('title', 'Admin Laporan Pengaduan')
@section('active1', 'active')
@section('content')

<style type="text/css" media="screen">
	table {
		font-size: 18px;
        width: 50%;
	}
	.title-admin {
		position: relative;
		margin-top: 7%;
		margin-bottom: 3%;
	}
	.btn {
		font-size: 14px;
	}
</style>

<div class="page-title">
	<h1>
		<b>Daftar Laporan Pengaduan</b>   
	</h1>	
</div>

<div class="container mt-5">
    <p>Data diurutkan dari laporan yang terbaru</p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Data Pengaduan</th>
                <th scope="col">Isi</th>
            </tr>
        </thead>
        <tbody>
        	@php
        	$i = 0
        	@endphp
        	@forelse($laporans as $l)
        	@php
           		$rep = $l['balasan_admin'];
           		$rep = explode('>', $rep);
           		$firstIteration = true;
           		$i++;
       		@endphp
            <!-- Baris pertama -->
            <tr>
                <th rowspan="{{8+count($rep)}}" class="bg-secondary bg-gradient" style="width: 4%">{{$i}}</th>
                <th scope="row" style="width: 25%;">Nama Pengadu</th>
                <th scope="row">: {{$l['nama_pelapor']}}</th>
            </tr>
            <tr>
            	<td scope="row">Klasifikasi Laporan</td>
            	@if($l['klasifikasi_laporan']==1)
            	<td scope="row">: Pengaduan</td>
            	@else
            	<td scope="row">: Aspirasi</td>
            	@endif
            </tr>
            <tr>
            	<td scope="row">Judul Laporan</td>
            	<td scope="row">: {{$l['judul_laporan']}}</td>
            </tr>
            <tr>
            	<td scope="row">Isi Laporan</td>
            	<td scope="row"><div class="wrapping">
                    : {{$l['isi_laporan']}}
                </div></td>
            </tr>
            <tr>
            	<td scope="row">Tanggal Kejadian</td>
            	<td scope="row">: {{$l['tgl_kejadian']}}</td>
            </tr>
            <tr>
            	<td scope="row">Lokasi Kejadian</td>
            	<td scope="row">: {{$l['lokasi_kejadian']}}</td>
            </tr>
            <tr>
            	<td scope="row">Gambar</td>
                <td scope="row">: 
            	@if($l['gambar']!=null)
                <div class="image-container align-left">
                  
                  <img src="{{url('/assets/'.$l['gambar'])}}" alt="">
                 
                </div>
                @endif
            </td>
            </tr>
            <tr>
            	<td scope="row">Aksi</td>
            	<td scope="row">
            		<form action="{{url('/edit-laporan')}}" method="post">
            		@csrf
		                <div style="width: 100%;">
		                	<div class="mb-3" style="width: 100%;">
		                		<input style="font-size: 14px;" type="text" class="form-control" name="balasan">
		                	</div>
		                </div>
		                <button type="submit" class="btn btn-secondary" value="{{'1'.$l['id_laporan']}}" name="button">Balas</button>
            			<button type="submit" class="btn btn-danger" value="{{'2'.$l['id_laporan']}}" name="button">Hapus</button>
		            </form>
            	</td>   	
            </tr>
            <tr>
            	<td scope="row" rowspan="{{count($rep)}}">Balasan</td>
            	<td scope="row">: {{$rep[0]}}</td>
            </tr>
            @if(count($rep)>1)
            @foreach($rep as $r)
            @php
            	if($firstIteration){
            		$firstIteration = false;
            		continue;
            	}
            @endphp
            <tr>
            	<td scope="row">: {{$r}}</td>
            </tr>
            @endforeach
            @endif
            @empty
            <td colspan="3">Belum ada laporan pengaduan yang masuk!</td>
            @endforelse
            <!-- Baris kedua -->
            <!-- Anda dapat menambahkan atau menghapus baris lainnya sesuai kebutuhan -->
        </tbody>
    </table>
</div>

@endsection