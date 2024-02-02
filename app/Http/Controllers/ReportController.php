<?php

namespace App\Http\Controllers;

use App\Models\reportTugas;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function tugas()
    {
        return view('report-tugas');
    }

    public function tugasstr(Request $request)
    {
        $request->validate([
            'foto' => 'required',
            'link' => '',
            'email' => '',
        ]);

        $nama  = Auth::user()->name;;

        $reportTugas = new reportTugas();
        $reportTugas->nama = $nama;
        $reportTugas->foto = $request->foto;
        $reportTugas->link = $request->link;
        $reportTugas->email = $request->email;
        $reportTugas->save();
        Alert::success('Berhasil!', 'Tugas Anda sudah masuk!');
        return redirect()->to('/');
    }
}
