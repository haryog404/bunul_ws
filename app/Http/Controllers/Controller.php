<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\Laporan;
use App\Models\Admin;
use App\Models\Administratif;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function userHome(){
        if(Auth::check()){
            return redirect()->route('admin-laporan');
        }
        return redirect()->route('home');
    }
    public function userLaporan(){
        $laporans = Laporan::get()->sortByDesc('created_at');
        foreach($laporans as $i => $l){
            $laporans[$i]['tgl_kejadian'] = Carbon::parse($l['tgl_kejadian'])->format('d-m-Y');
            $laporans[$i]['dibuat'] = Carbon::parse($l['created_at'])->format('d-m-Y');
        }
        return view('user-laporan')->with('laporans', $laporans);
    }
    public function tambahLaporan(Request $request){
        $request->validate([
            'klasifikasi_laporan' => 'required',
            'judul_laporan' => 'required',
            'isi_laporan' => 'required',
            'tgl_kejadian' => 'required',
            'lokasi_kejadian' => 'required',
        ]);
        $input = $request->all();
        $laporan = new Laporan();
        $laporan->klasifikasi_laporan = $input['klasifikasi_laporan'];
        $laporan->judul_laporan = $input['judul_laporan'];
        $laporan->isi_laporan = $input['isi_laporan'];
        $laporan->tgl_kejadian = $input['tgl_kejadian'];
        $laporan->lokasi_kejadian = $input['lokasi_kejadian'];
        if($request->gambar!=null){ 
            // Get the uploaded file
            $image = $request->file('gambar');

            // dd($image);

            // Set a unique name for the file
            $imageName = time().'.'.$image->extension();

            // Move the uploaded file to the storage path
            $image->move(public_path('assets'), $imageName);
            $laporan->gambar = $imageName;
        }
        if($input['nama_pelapor']!=null) $laporan->nama_pelapor = $input['nama_pelapor'];
        $laporan->save();
        return redirect()->route('user-laporan');
    }
    public function userPengajuan(){
        $laporans = Administratif::get()->sortByDesc('created_at');
        foreach($laporans as $i => $l){
            $laporans[$i]['dibuat'] = Carbon::parse($l['created_at'])->timezone('Asia/Jakarta')->format('d-m-Y');
        }
        return view('user-pengajuan')->with('laporans', $laporans);
    }
    public function tambahPengajuan(Request $request){
        $request->validate([
            'jenis_pengajuan' => 'required',
            'nama_pengajuan' => 'required',
            'nik_pengajuan' => 'required',
            'kk_pengajuan' => 'required',
            'no_hp' => 'required',
            'alamat_pengajuan' => 'required',
            'tujuan_pengajuan' => 'required',
        ]);
        $input = $request->all();
        $laporan = new Administratif();
        $laporan->jenis_pengajuan = $input['jenis_pengajuan'];
        $laporan->nama_pengajuan = $input['nama_pengajuan'];
        $laporan->nik_pengajuan = $input['nik_pengajuan'];
        $laporan->kk_pengajuan = $input['kk_pengajuan'];
        $laporan->no_hp = $input['no_hp'];
        $laporan->alamat_pengajuan = $input['alamat_pengajuan'];
        $laporan->tujuan_pengajuan = $input['tujuan_pengajuan'];
        $laporan->catatan_pengajuan = $input['catatan_pengajuan'];
        $laporan->save();
        return redirect()->route('user-pengajuan');
    }
    public function userAset(){
        return view('user-aset');
    }
    public function showAset($i){
        return view('aset'.$i);
    }
}
