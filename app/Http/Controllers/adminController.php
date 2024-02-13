<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function admin ()
    {
        return view('admin.main.dashboard');
    }
    public function siswa ()
    {
        return view('admin.main.DataSiswa');
    }
    public function device ()
    {
        return view('admin.main.DataDevice');
    }
    public function laporan ()
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
    public function laptop ()
    {
        return view('admin.main.data-laptop');
    }
    public function earphone ()
    {
        return view('admin.main.data-earphone');
    }
    public function tablet ()
    {
        return view('admin.main.data-tablet');
    }
    public function pc ()
    {
        return view('admin.main.data-pc');
    }
    public function handphone ()
    {
        return view('admin.main.data-handphone');
    }
    public function camera ()
    {
        return view('admin.main.data-camera');
    }
    public function flashdisk ()
    {
        return view('admin.main.data-flashdisk');
    }
    public function hardisk ()
    {
        return view('admin.main.data-hardisk');
    }
    public function printer ()
    {
        return view('admin.main.data-printer');
    }
    public function lan ()
    {
        return view('admin.main.data-lan');
    }
    public function hdmi ()
    {
        return view('admin.main.data-hdmi');
    }
    public function projector ()
    {
        return view('admin.main.data-projector');
    }
}
