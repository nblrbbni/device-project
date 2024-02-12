<?php

namespace App\Http\Controllers;

use App\Models\reportTugas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ReportController extends Controller
{
    public function tugas()
    {
        return view('report-tugas');
    }

    public function tugasstr(Request $request)
    {
        $request->validate([
            'foto' => 'required|mimes:png,jpg,jpeg,webp|max:2048',
            'link' => 'required',
            'email' => 'required|email',
        ]);

        $foto = $request->file('foto');
        $filename = date('y-m-d').$foto->getClientOriginalName();
        $path = 'foto-user/'.$filename;

        Storage::disk('public')->put($path,file_get_contents($foto));

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
    
    public function show()
    {
        $reportTugas = reportTugas::get();

        return view('admin.main.tugas', compact('reportTugas'));
    }
}
