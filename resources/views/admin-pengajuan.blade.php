@extends('layout.admin-layout')
@section('title', 'Admin Laporan Pengajuan')
@section('active2', 'active')
@section('content')

<style type="text/css" media="screen">
	table {
		font-size: 18px;
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
		<b>Daftar Laporan Pengajuan</b>
	</h1>	
</div>

<div class="container mt-5">
    <p>Data diurutkan dari laporan yang terbaru</p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Data Pengajuan</th>
                <th scope="col">Isi</th>
            </tr>
        </thead>
        <tbody>
        	@php
        	$i = 0
        	@endphp
        	@forelse($laporans as $l)
        	@php
           		$i++;
       		@endphp
            <!-- Baris pertama -->
            <tr>
                <th rowspan="{{11}}" class="bg-secondary bg-gradient" style="width: 4%">{{$i}}</th>
                <th scope="row" style="width: 25%;">Nama Pengaju</th>
                <th scope="row">{{$l['nama_pengajuan']}}</th>
            </tr>
            <tr>
                <td scope="row">Surat yang Diajukan</td>
                <td scope="row">{{$l['jenis_pengajuan']}}</td>
            </tr>
            <tr>
            	<td scope="row">NIK</td>
            	<td scope="row">{{$l['nik_pengajuan']}}</td>
            </tr>
            <tr>
            	<td scope="row">No. KK</td>
            	<td scope="row">{{$l['kk_pengajuan']}}</td>
            </tr>
            <tr>
            	<td scope="row">Alamat</td>
            	<td scope="row">{{$l['alamat_pengajuan']}}</td>
            </tr>
            <tr>
            	<td scope="row">Tujuan Pengajuan</td>
            	<td scope="row">{{$l['tujuan_pengajuan']}}</td>
            </tr>
            <tr>
            	<td scope="row">No. HP</td>
            	<td scope="row">{{$l['no_hp']}}</td>
            </tr>
            <tr>
                <td scope="row">Tanggal Pengajuan</td>
                <td scope="row">{{$l['tgl_pengajuan']}}</td>
            </tr>
            <tr>
                <td scope="row">Catatan</td>
                <td scope="row">{{$l['catatan_pengajuan']}}</td>
            </tr>
            <tr>
                <td scope="row">Verifikasi</td>
                <td scope="row">
                    @if($l['verifikasi_pengajuan']==1)
                    <button type="submit" class="btn btn-success" disabled="true">Telah Ditangani</button>
                    @else
                    <button type="submit" class="btn btn-secondary" disabled="true">Belum Ditangani</button>
                    @endif
                </td>
            </tr>
            <tr>
            	<td scope="row">Aksi</td>
            	<td scope="row">
            		<form action="{{url('/edit-pengajuan')}}" method="post">
            		@csrf
		                <button type="submit" class="btn btn-success" value="{{'1'.$l['id_pengajuan']}}" name="button">Verifikasi</button>
            			<button type="submit" class="btn btn-danger" value="{{'2'.$l['id_pengajuan']}}" name="button">Hapus</button>
		            </form>
            	</td>   	
            </tr>
            @empty
            <td colspan="3">Belum ada laporan pengajuan yang masuk!</td>
            @endforelse
            <!-- Baris kedua -->
            <!-- Anda dapat menambahkan atau menghapus baris lainnya sesuai kebutuhan -->
        </tbody>
    </table>
</div>

@endsection