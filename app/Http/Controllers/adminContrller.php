<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class adminContrller extends Controller
{
    public function admin()
    {
        return view('admin.main.dashboard');
    }

    public function siswa()
    {
        return view('admin.main.DataSiswa');
    }
    public function device()
    {
        return view('admin.main.DataDevice');
    }
    public function laporan()
    {
        return view('admin.main.laporan');
    }
    public function Devicert ()
    {
        return view('admin.main.device');
    }
    public function tugas ()
    {
        return view('admin.main.tugas');
    }
    public function calendar ()
    {
        return view('admin.main.calendar');
    }

   public function Form ()
   {
    return view('admin.main.Form');
   }
}
