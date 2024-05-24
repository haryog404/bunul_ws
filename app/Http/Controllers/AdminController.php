<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Admin;
use App\Models\Administratif;
use App\Models\Laporan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function submitAdmin(Request $request)
    {
        $input = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($input)) {
            return redirect()->route('admin-laporan');
        }

        return redirect()->route('login-admin');
    }

    public function adminLaporan()
    {
        $laporans = Laporan::get()->sortByDesc('created_at');

        return view('admin-laporan')->with('laporans', $laporans);
    }

    public function editLaporan(Request $request)
    {
        $input = $request->all();
        $id = $input['button'][1];
        if ($input['button'][0] == '1' and $input['balasan'] != null) {
            $balasan = Laporan::where('id_laporan', $id)->first()['balasan_admin'];
            if($balasan==null) $balasan .= $input['balasan'];
            else $balasan .= ' >'.$input['balasan'];
            Laporan::where('id_laporan', $id)->update(['balasan_admin' => $balasan]);

            return redirect()->route('admin-laporan');
        } elseif ($input['button'][0] == '2') {
            Laporan::where('id_laporan', $id)->delete();

            return redirect()->route('admin-laporan');
        }

        return redirect()->route('admin-laporan');
    }

    public function adminPengajuan()
    {
        $laporans = Administratif::get()->sortByDesc('created_at');
        $jenis_surat = [
            'Surat Pengantar',
            'Surat Keterangan Domisili',
            'Surat Keterangan Tidak Mampu',
            'Surat Keterangan Kelahiran',
            'Surat Keterangan Kematian',
            'Surat Izin Tempat Usaha',
            'Surat Izin Mendirikan Bangunan (IMB)',
            'Surat Keterangan Ahli Waris',
            'Surat Keterangan Pindah',
            'Surat Keterangan Kehilangan',
        ];
        foreach ($laporans as $i => $l) {
            $tanggal_ini = Carbon::parse($l['created_at'])->format('d-m-Y');
            $laporans[$i]['tgl_pengajuan'] = $tanggal_ini;
            $jenis_ini = $l['jenis_pengajuan'];
            $laporans[$i]['jenis_pengajuan'] = $jenis_surat[$jenis_ini];
        }

        return view('admin-pengajuan')->with('laporans', $laporans);
    }

    public function editPengajuan(Request $request)
    {
        $input = $request->all();
        $id = $input['button'][1];
        if ($input['button'][0] == '1') {
            Administratif::where('id_pengajuan', $id)->update(['verifikasi_pengajuan' => 1]);

            return redirect()->route('admin-pengajuan');
        } elseif ($input['button'][0] == '2') {
            Administratif::where('id_pengajuan', $id)->delete();

            return redirect()->route('admin-pengajuan');
        }

        return redirect()->route('admin-pengajuan');
    }

    public function logoutAdmin()
    {
        Auth::logout();

        return redirect()->route('home');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
