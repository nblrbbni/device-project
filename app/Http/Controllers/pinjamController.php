<?php

namespace App\Http\Controllers;

use App\Models\pinjamLan;
use App\Models\pinjamHdmi;
use App\Models\pinjamCamera;
use App\Models\pinjamLaptop;
use App\Models\pinjamTablet;
use Illuminate\Http\Request;
use App\Models\pinjamHardisk;
use App\Models\pinjamPrinter;
use App\Models\pinjamEarphone;
use App\Models\pinjamKomputer;
use App\Models\pinjamFlashdisk;
use App\Models\pinjamHandphone;
use App\Models\pinjamProjector;

class pinjamController extends Controller
{
    // Laptop
    public function laptop()
    {
        return view('laptop.sp-laptop');
    }

    public function laptopstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'nomor_laptop' => 'required',
            'mentoring_mapel' => 'required',
            'waktu_peminjaman' => 'required',
        ]);

        $pinjamLaptop = new pinjamLaptop();
        $pinjamLaptop->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pinjamLaptop->nama = $request->nama;
        $pinjamLaptop->mata_pelajaran = $request->mata_pelajaran;
        $pinjamLaptop->nomor_laptop = $request->nomor_laptop;
        $pinjamLaptop->mentoring_mapel = $request->mentoring_mapel;
        $pinjamLaptop->waktu_peminjaman = $request->waktu_peminjaman;
        $pinjamLaptop->save();
        return redirect()->to('/');
    }
    
    // Earphone
    public function headset()
    {
        return view('headphone.sp-headphone');
    }

    public function headsetstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'nomor_earphone' => 'required',
            'mentoring_mapel' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $pinjamEarphone = new pinjamEarphone();
        $pinjamEarphone->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pinjamEarphone->nama = $request->nama;
        $pinjamEarphone->mata_pelajaran = $request->mata_pelajaran;
        $pinjamEarphone->nomor_earphone = $request->nomor_earphone;
        $pinjamEarphone->mentoring_mapel = $request->mentoring_mapel;
        $pinjamEarphone->waktu_pengembalian = $request->waktu_pengembalian;
        $pinjamEarphone->save();
        return redirect()->to('/');
    }

    // Projector
    public function projector()
    {
        return view('projector.sp-projector');
    }

    public function projectorstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'nomor_projector' => 'required',
            'mentoring_mapel' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $pinjamProjector = new pinjamProjector();
        $pinjamProjector->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pinjamProjector->nama = $request->nama;
        $pinjamProjector->mata_pelajaran = $request->mata_pelajaran;
        $pinjamProjector->nomor_projector = $request->nomor_projector;
        $pinjamProjector->mentoring_mapel = $request->mentoring_mapel;
        $pinjamProjector->waktu_pengembalian = $request->waktu_pengembalian;
        $pinjamProjector->save();
        return redirect()->to('/');
    }

    // Tablet
    public function tablet()
    {
        return view('tablet.sp-tablet');
    }

    public function tabletstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'nomor_tablet' => 'required',
            'mentoring_mapel' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $pinjamTablet = new pinjamTablet();
        $pinjamTablet->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pinjamTablet->nama = $request->nama;
        $pinjamTablet->mata_pelajaran = $request->mata_pelajaran;
        $pinjamTablet->nomor_tablet = $request->nomor_tablet;
        $pinjamTablet->mentoring_mapel = $request->mentoring_mapel;
        $pinjamTablet->waktu_pengembalian = $request->waktu_pengembalian;
        $pinjamTablet->save();
        return redirect()->to('/');
    }

    // Camera
    public function camera()
    {
        return view('camera.sp-camera');
    }

    public function camerastr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'nomor_camera' => 'required',
            'mentoring_mapel' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $pinjamCamera = new pinjamCamera();
        $pinjamCamera->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pinjamCamera->nama = $request->nama;
        $pinjamCamera->mata_pelajaran = $request->mata_pelajaran;
        $pinjamCamera->nomor_camera = $request->nomor_camera;
        $pinjamCamera->mentoring_mapel = $request->mentoring_mapel;
        $pinjamCamera->waktu_pengembalian = $request->waktu_pengembalian;
        $pinjamCamera->save();
        return redirect()->to('/');
    }

    // Handphone
    public function handphone()
    {
        return view('handphone.sp-handphone');
    }

    public function handphonestr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'nomor_handphone' => 'required',
            'mentoring_mapel' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $pinjamHandphone = new pinjamHandphone();
        $pinjamHandphone->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pinjamHandphone->nama = $request->nama;
        $pinjamHandphone->mata_pelajaran = $request->mata_pelajaran;
        $pinjamHandphone->nomor_handphone = $request->nomor_handphone;
        $pinjamHandphone->mentoring_mapel = $request->mentoring_mapel;
        $pinjamHandphone->waktu_pengembalian = $request->waktu_pengembalian;
        $pinjamHandphone->save();
        return redirect()->to('/');
    }

    // Komputer/PC
    public function komputer()
    {
        return view('computer.sp-komputer');
    }

    public function komputerstr(Request $request)
    {
        
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'nomor_komputer' => 'required',
            'mentoring_mapel' => 'required',
            'waktu_peminjaman' => 'required',
        ]);

        $pinjamKomputer = new pinjamKomputer();
        $pinjamKomputer->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pinjamKomputer->nama = $request->nama;
        $pinjamKomputer->mata_pelajaran = $request->mata_pelajaran;
        $pinjamKomputer->nomor_komputer = $request->nomor_komputer;
        $pinjamKomputer->mentoring_mapel = $request->mentoring_mapel;
        $pinjamKomputer->waktu_peminjaman = $request->waktu_peminjaman;
        $pinjamKomputer->save();
        return redirect()->to('/');
    }

    // Flashdisk
    public function flashdisk()
    {
        return view('flashdisk.sp-flashdisk');
    }

    public function flashdiskstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'nomor_flashdisk' => 'required',
            'mentoring_mapel' => 'required',
            'waktu_peminjaman' => 'required',
        ]);

        $pinjamFlashdisk = new pinjamFlashdisk();
        $pinjamFlashdisk->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pinjamFlashdisk->nama = $request->nama;
        $pinjamFlashdisk->mata_pelajaran = $request->mata_pelajaran;
        $pinjamFlashdisk->nomor_flashdisk = $request->nomor_flashdisk;
        $pinjamFlashdisk->mentoring_mapel = $request->mentoring_mapel;
        $pinjamFlashdisk->waktu_peminjaman = $request->waktu_peminjaman;
        $pinjamFlashdisk->save();
        return redirect()->to('/');
    }

    // Hardisk
    public function hardisk()
    {
        return view('hardisk.sp-hardisk');
    }

    public function hardiskstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'nomor_hardisk' => 'required',
            'mentoring_mapel' => 'required',
            'waktu_peminjaman' => 'required',
        ]);

        $pinjamHardisk = new pinjamHardisk();
        $pinjamHardisk->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pinjamHardisk->nama = $request->nama;
        $pinjamHardisk->mata_pelajaran = $request->mata_pelajaran;
        $pinjamHardisk->nomor_hardisk = $request->nomor_hardisk;
        $pinjamHardisk->mentoring_mapel = $request->mentoring_mapel;
        $pinjamHardisk->waktu_peminjaman = $request->waktu_peminjaman;
        $pinjamHardisk->save();
        return redirect()->to('/');
    }

    // Printer
    public function printer()
    {
        return view('printer.sp-printer');
    }

    public function printerstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'nomor_printer' => 'required',
            'mentoring_mapel' => 'required',
            'waktu_peminjaman' => 'required',
        ]);

        $pinjamPrinter = new pinjamPrinter();
        $pinjamPrinter->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pinjamPrinter->nama = $request->nama;
        $pinjamPrinter->mata_pelajaran = $request->mata_pelajaran;
        $pinjamPrinter->nomor_printer = $request->nomor_printer;
        $pinjamPrinter->mentoring_mapel = $request->mentoring_mapel;
        $pinjamPrinter->waktu_peminjaman = $request->waktu_peminjaman;
        $pinjamPrinter->save();
        return redirect()->to('/');
    }

    // HDMI
    public function hdmi()
    {
        return view('hdmi.sp-hdmi');
    }

    public function hdmistr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'nomor_hdmi' => 'required',
            'mentoring_mapel' => 'required',
            'waktu_peminjaman' => 'required',
        ]);

        $pinjamHdmi = new pinjamHdmi();
        $pinjamHdmi->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pinjamHdmi->nama = $request->nama;
        $pinjamHdmi->mata_pelajaran = $request->mata_pelajaran;
        $pinjamHdmi->nomor_hdmi = $request->nomor_hdmi;
        $pinjamHdmi->mentoring_mapel = $request->mentoring_mapel;
        $pinjamHdmi->waktu_peminjaman = $request->waktu_peminjaman;
        $pinjamHdmi->save();
        return redirect()->to('/');
    }

    // LAN
    public function lan()
    {
        return view('lan.sp-lan');
    }

    public function lanstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'nomor_lan' => 'required',
            'mentoring_mapel' => 'required',
            'waktu_peminjaman' => 'required',
        ]);

        $pinjamLan = new pinjamLan();
        $pinjamLan->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pinjamLan->nama = $request->nama;
        $pinjamLan->mata_pelajaran = $request->mata_pelajaran;
        $pinjamLan->nomor_lan = $request->nomor_lan;
        $pinjamLan->mentoring_mapel = $request->mentoring_mapel;
        $pinjamLan->waktu_peminjaman = $request->waktu_peminjaman;
        $pinjamLan->save();
        return redirect()->to('/');
    }
}
