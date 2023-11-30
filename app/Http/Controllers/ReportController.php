<?php

namespace App\Http\Controllers;

use App\Models\reportTugas;
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
            'link' => 'required',
            'email' => 'required',
        ]);

        $reportTugas = new reportTugas();
        $reportTugas->foto = $request->foto;
        $reportTugas->link = $request->link;
        $reportTugas->email = $request->email;
        $reportTugas->save();
        return redirect()->to('/');
    }
}
