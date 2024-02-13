<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;

use App\Models\Device;

use App\Models\pinjamcamera;
use App\Models\pinjamcomputer;
use App\Models\pinjamflashdisk;
use App\Models\pinjamhandphone;
use App\Models\pinjamhardisk;
use App\Models\pinjamhdmi;
use App\Models\pinjamheadphone;
use App\Models\pinjamlan;
use App\Models\pinjamlaptop;
use App\Models\pinjamprinter;
use App\Models\pinjamprojector;
use App\Models\pinjamtablet;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class pinjamController extends Controller
{
    // Laptop
    public function laptop()
    {
        $mapel = DB::table('mapel')->get();
        $guru = DB::table('guru')->get();
        $datalaptop = DB::table('datalaptop')->get();

        return view('laptop.sp-laptop', [
            'mapel' => $mapel,
            'guru' => $guru,
            'datalaptop' => $datalaptop,
        ]);
    }

    public function laptopstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'kode_device' => 'required',
            'mentoring_mapel' => 'required',
            'waktu_peminjaman' => 'required',
        ]);

        $pinjamLaptop = new pinjamlaptop();
        $pinjamLaptop->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pinjamLaptop->nama = $request->nama;
        $pinjamLaptop->mata_pelajaran = $request->mata_pelajaran;
        $pinjamLaptop->kode_device = $request->kode_device;
        $pinjamLaptop->mentoring_mapel = $request->mentoring_mapel;
        $pinjamLaptop->waktu_peminjaman = $request->waktu_peminjaman;
        $pinjamLaptop->save();

        // Simpan kode device yang dipinjam dalam session
        session(['kode_device_peminjaman' => $request->kode_device]);

        DB::table('datalaptop')
        ->where('kode_device', $request->kode_device)
        ->update(
            [
                'status' => 'Dipinjam',
            ],
        );

        Alert::success('Berhasil!', 'Jangan lupa kembalikan Perangkat Anda!');
        return redirect()->to('/');
    }

    // Earphon
    public function headset()
    {
        $mapel = DB::table('mapel')->get();
        $guru = DB::table('guru')->get();
        $dataheadphone = DB::table('dataheadphone')->get();

        return view('headphone.sp-headphone', [
            'mapel' => $mapel,
            'guru' => $guru,
            'dataheadphone' => $dataheadphone,
        ]);
    }

    public function headsetstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'kode_device' => 'required',
            'mentoring_mapel' => 'required',
            'waktu_peminjaman' => 'required',
        ]);

        $pinjamEarphone = new pinjamheadphone();
        $pinjamEarphone->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pinjamEarphone->nama = $request->nama;
        $pinjamEarphone->mata_pelajaran = $request->mata_pelajaran;
        $pinjamEarphone->kode_device = $request->kode_device;
        $pinjamEarphone->mentoring_mapel = $request->mentoring_mapel;
        $pinjamEarphone->waktu_peminjaman = $request->waktu_peminjaman;
        $pinjamEarphone->save();

        // Simpan kode device yang dipinjam dalam session
        session(['kode_device_peminjaman' => $request->kode_device]);

        DB::table('dataheadphone')
        ->where('kode_device', $request->kode_device)
        ->update(
            [
                'status' => 'Dipinjam',
            ],
        );

        Alert::success('Berhasil!', 'Jangan lupa kembalikan Perangkat Anda!');
        return redirect()->to('/');
    }

    // Projector
    public function projector()
    {
        $mapel = DB::table('mapel')->get();
        $guru = DB::table('guru')->get();
        $dataprojector = DB::table('dataprojector')->get();

        return view('projector.sp-projector', [
            'mapel' => $mapel,
            'guru' => $guru,
            'dataprojector' => $dataprojector,
        ]);
    }

    public function projectorstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'kode_device' => 'required',
            'mentoring_mapel' => 'required',
            'waktu_peminjaman' => 'required',
        ]);

        $pinjamProjector = new pinjamprojector();
        $pinjamProjector->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pinjamProjector->nama = $request->nama;
        $pinjamProjector->mata_pelajaran = $request->mata_pelajaran;
        $pinjamProjector->kode_device = $request->kode_device;
        $pinjamProjector->mentoring_mapel = $request->mentoring_mapel;
        $pinjamProjector->waktu_peminjaman = $request->waktu_peminjaman;
        $pinjamProjector->save();

        // Simpan kode device yang dipinjam dalam session
        session(['kode_device_peminjaman' => $request->kode_device]);

        DB::table('dataprojector')
        ->where('kode_device', $request->kode_device)
        ->update(
            [
                'status' => 'Dipinjam',
            ],
        );

        Alert::success('Berhasil!', 'Jangan lupa kembalikan Perangkat Anda!');
        return redirect()->to('/');
    }

    // Tablet
    public function tablet()
    {$mapel = DB::table('mapel')->get();
        $guru = DB::table('guru')->get();
        $datatablet = DB::table('datatablet')->get();
        $guru = DB::table('guru')->get();

        return view('tablet.sp-tablet', [
            'mapel' => $mapel,
            'guru' => $guru,
            'datatablet' => $datatablet,
        ]);
    }

    public function tabletstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'kode_device' => 'required',
            'mentoring_mapel' => 'required',
            'waktu_peminjaman' => 'required',
        ]);

        $pinjamTablet = new pinjamtablet();
        $pinjamTablet->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pinjamTablet->nama = $request->nama;
        $pinjamTablet->mata_pelajaran = $request->mata_pelajaran;
        $pinjamTablet->kode_device = $request->kode_device;
        $pinjamTablet->mentoring_mapel = $request->mentoring_mapel;
        $pinjamTablet->waktu_peminjaman = $request->waktu_peminjaman;
        $pinjamTablet->save();

        // Simpan kode device yang dipinjam dalam session
        session(['kode_device_peminjaman' => $request->kode_device]);

        DB::table('datatablet')
        ->where('kode_device', $request->kode_device)
        ->update(
            [
                'status' => 'Dipinjam',
            ],
        );

        Alert::success('Berhasil!', 'Jangan lupa kembalikan Perangkat Anda!');
        return redirect()->to('/');
    }

    // Camera
    public function camera()
    {
        $mapel = DB::table('mapel')->get();
        $guru = DB::table('guru')->get();
        $datacamera = DB::table('datacamera')->get();

        return view('camera.sp-camera', [
            'mapel' => $mapel,
            'guru' => $guru,
            'datacamera' => $datacamera,
        ]);
    }

    public function camerastr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'kode_device' => 'required',
            'mentoring_mapel' => 'required',
            'waktu_peminjaman' => 'required',
        ]);

        $pinjamCamera = new pinjamcamera();
        $pinjamCamera->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pinjamCamera->nama = $request->nama;
        $pinjamCamera->mata_pelajaran = $request->mata_pelajaran;
        $pinjamCamera->kode_device = $request->kode_device;
        $pinjamCamera->mentoring_mapel = $request->mentoring_mapel;
        $pinjamCamera->waktu_peminjaman = $request->waktu_peminjaman;
        $pinjamCamera->save();

        // Simpan kode device yang dipinjam dalam session
        session(['kode_device_peminjaman' => $request->kode_device]);

        DB::table('datacamera')
        ->where('kode_device', $request->kode_device)
        ->update(
            [
                'status' => 'Dipinjam',
            ],
        );

        Alert::success('Berhasil!', 'Jangan lupa kembalikan Perangkat Anda!');
        return redirect()->to('/');
    }

    // Handphone
    public function handphone()
    {
        $mapel = DB::table('mapel')->get();
        $guru = DB::table('guru')->get();
        $datahandphone = DB::table('datahandphone')->get();

        return view('handphone.sp-handphone', [
            'mapel' => $mapel,
            'guru' => $guru,
            'datahandphone' => $datahandphone,
        ]);
    }

    public function handphonestr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'kode_device' => 'required',
            'mentoring_mapel' => 'required',
            'waktu_peminjaman' => 'required',
        ]);

        $pinjamHandphone = new pinjamhandphone();
        $pinjamHandphone->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pinjamHandphone->nama = $request->nama;
        $pinjamHandphone->mata_pelajaran = $request->mata_pelajaran;
        $pinjamHandphone->kode_device = $request->kode_device;
        $pinjamHandphone->mentoring_mapel = $request->mentoring_mapel;
        $pinjamHandphone->waktu_peminjaman = $request->waktu_peminjaman;
        $pinjamHandphone->save();

        // Simpan kode device yang dipinjam dalam session
        session(['kode_device_peminjaman' => $request->kode_device]);

        DB::table('datahandphone')
        ->where('kode_device', $request->kode_device)
        ->update(
            [
                'status' => 'Dipinjam',
            ],
        );

        Alert::success('Berhasil!', 'Jangan lupa kembalikan Perangkat Anda!');
        return redirect()->to('/');
    }

    // Komputer/PC
    public function komputer()
    {
        $mapel = DB::table('mapel')->get();
        $guru = DB::table('guru')->get();
        $datacomputer = DB::table('datacomputer')->get();

        return view('computer.sp-komputer', [
            'mapel' => $mapel,
            'guru' => $guru,
            'datacomputer' => $datacomputer,
        ]);
    }

    public function komputerstr(Request $request)
    {

        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'kode_device' => 'required',
            'mentoring_mapel' => 'required',
            'waktu_peminjaman' => 'required',
        ]);

        $pinjamKomputer = new pinjamcomputer();
        $pinjamKomputer->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pinjamKomputer->nama = $request->nama;
        $pinjamKomputer->mata_pelajaran = $request->mata_pelajaran;
        $pinjamKomputer->kode_device = $request->kode_device;
        $pinjamKomputer->mentoring_mapel = $request->mentoring_mapel;
        $pinjamKomputer->waktu_peminjaman = $request->waktu_peminjaman;
        $pinjamKomputer->save();

        // Simpan kode device yang dipinjam dalam session
        session(['kode_device_peminjaman' => $request->kode_device]);

        DB::table('datacomputer')
        ->where('kode_device', $request->kode_device)
        ->update(
            [
                'status' => 'Dipinjam',
            ],
        );

        Alert::success('Berhasil!', 'Jangan lupa kembalikan Perangkat Anda!');
        return redirect()->to('/');
    }

    // Flashdisk
    public function flashdisk()
    {
        $mapel = DB::table('mapel')->get();
        $guru = DB::table('guru')->get();
        $dataflashdisk = DB::table('dataflashdisk')->get();

        return view('flashdisk.sp-flashdisk', [
            'mapel' => $mapel,
            'guru' => $guru,
            'dataflashdisk' => $dataflashdisk,
        ]);
    }

    public function flashdiskstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'kode_device' => 'required',
            'mentoring_mapel' => 'required',
            'waktu_peminjaman' => 'required',
        ]);

        $pinjamFlashdisk = new pinjamflashdisk();
        $pinjamFlashdisk->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pinjamFlashdisk->nama = $request->nama;
        $pinjamFlashdisk->mata_pelajaran = $request->mata_pelajaran;
        $pinjamFlashdisk->kode_device = $request->kode_device;
        $pinjamFlashdisk->mentoring_mapel = $request->mentoring_mapel;
        $pinjamFlashdisk->waktu_peminjaman = $request->waktu_peminjaman;
        $pinjamFlashdisk->save();

        // Simpan kode device yang dipinjam dalam session
        session(['kode_device_peminjaman' => $request->kode_device]);

        DB::table('dataflashdisk')
        ->where('kode_device', $request->kode_device)
        ->update(
            [
                'status' => 'Dipinjam',
            ],
        );

        Alert::success('Berhasil!', 'Jangan lupa kembalikan Perangkat Anda!');
        return redirect()->to('/');
    }

    // Hardisk
    public function hardisk()
    {
        $mapel = DB::table('mapel')->get();
        $guru = DB::table('guru')->get();
        $datahardisk = DB::table('datahardisk')->get();

        return view('hardisk.sp-hardisk', [
            'mapel' => $mapel,
            'guru' => $guru,
            'datahardisk' => $datahardisk,
        ]);

    }

    public function hardiskstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'kode_device' => 'required',
            'mentoring_mapel' => 'required',
            'waktu_peminjaman' => 'required',
        ]);

        $pinjamHardisk = new pinjamhardisk();
        $pinjamHardisk->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pinjamHardisk->nama = $request->nama;
        $pinjamHardisk->mata_pelajaran = $request->mata_pelajaran;
        $pinjamHardisk->kode_device = $request->kode_device;
        $pinjamHardisk->mentoring_mapel = $request->mentoring_mapel;
        $pinjamHardisk->waktu_peminjaman = $request->waktu_peminjaman;
        $pinjamHardisk->save();

        // Simpan kode device yang dipinjam dalam session
        session(['kode_device_peminjaman' => $request->kode_device]);

        DB::table('datahardisk')
        ->where('kode_device', $request->kode_device)
        ->update(
            [
                'status' => 'Dipinjam',
            ],
        );

        Alert::success('Berhasil!', 'Jangan lupa kembalikan Perangkat Anda!');
        return redirect()->to('/');
    }

    // Printer
    public function printer()
    {
        $mapel = DB::table('mapel')->get();
        $guru = DB::table('guru')->get();
        $dataprinter = DB::table('dataprinter')->get();

        return view('printer.sp-printer', [
            'mapel' => $mapel,
            'guru' => $guru,
            'dataprinter' => $dataprinter,
        ]);

    }

    public function printerstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'kode_device' => 'required',
            'mentoring_mapel' => 'required',
            'waktu_peminjaman' => 'required',
        ]);

        $pinjamPrinter = new pinjamprinter();
        $pinjamPrinter->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pinjamPrinter->nama = $request->nama;
        $pinjamPrinter->mata_pelajaran = $request->mata_pelajaran;
        $pinjamPrinter->kode_device = $request->kode_device;
        $pinjamPrinter->mentoring_mapel = $request->mentoring_mapel;
        $pinjamPrinter->waktu_peminjaman = $request->waktu_peminjaman;
        $pinjamPrinter->save();

        // Simpan kode device yang dipinjam dalam session
        session(['kode_device_peminjaman' => $request->kode_device]);

        DB::table('dataprinter')
        ->where('kode_device', $request->kode_device)
        ->update(
            [
                'status' => 'Dipinjam',
            ],
        );

        Alert::success('Berhasil!', 'Jangan lupa kembalikan Perangkat Anda!');
        return redirect()->to('/');
    }

    // HDMI
    public function hdmi()
    {
        $mapel = DB::table('mapel')->get();
        $guru = DB::table('guru')->get();
        $datahdmi = DB::table('datahdmi')->get();

        return view('hdmi.sp-hdmi', [
            'mapel' => $mapel,
            'guru' => $guru,
            'datahdmi' => $datahdmi,
        ]);
    }

    public function hdmistr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'kode_device' => 'required',
            'mentoring_mapel' => 'required',
            'waktu_peminjaman' => 'required',
        ]);

        $pinjamHdmi = new pinjamhdmi();
        $pinjamHdmi->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pinjamHdmi->nama = $request->nama;
        $pinjamHdmi->mata_pelajaran = $request->mata_pelajaran;
        $pinjamHdmi->kode_device = $request->kode_device;
        $pinjamHdmi->mentoring_mapel = $request->mentoring_mapel;
        $pinjamHdmi->waktu_peminjaman = $request->waktu_peminjaman;
        $pinjamHdmi->save();

        // Simpan kode device yang dipinjam dalam session
        session(['kode_device_peminjaman' => $request->kode_device]);

        DB::table('datahdmi')
        ->where('kode_device', $request->kode_device)
        ->update(
            [
                'status' => 'Dipinjam',
            ],
        );

        Alert::success('Berhasil!', 'Jangan lupa kembalikan Perangkat Anda!');
        return redirect()->to('/');
    }

    // LAN
    public function lan()
    {
        $mapel = DB::table('mapel')->get();
        $guru = DB::table('guru')->get();
        $datalan = DB::table('datalan')->get();

        return view('lan.sp-lan', [
            'mapel' => $mapel,
            'guru' => $guru,
            'datalan' => $datalan,
        ]);
    }

    public function lanstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'kode_device' => 'required',
            'mentoring_mapel' => 'required',
            'waktu_peminjaman' => 'required',
        ]);

        $pinjamLan = new pinjamlan();
        $pinjamLan->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pinjamLan->nama = $request->nama;
        $pinjamLan->mata_pelajaran = $request->mata_pelajaran;
        $pinjamLan->kode_device = $request->kode_device;
        $pinjamLan->mentoring_mapel = $request->mentoring_mapel;
        $pinjamLan->waktu_peminjaman = $request->waktu_peminjaman;
        $pinjamLan->save();

        // Simpan kode device yang dipinjam dalam session
        session(['kode_device_peminjaman' => $request->kode_device]);

        DB::table('datalan')
        ->where('kode_device', $request->kode_device)
        ->update(
            [
                'status' => 'Dipinjam',
            ],
        );

        Alert::success('Berhasil!', 'Jangan lupa kembalikan Perangkat Anda!');
        return redirect()->to('/');
    }

    public function pinjamlaptop()
    {
        $pinjamlaptop = DB::table('pinjamlaptop')->get();

        return view('admin.data-peminjaman.data-laptop', [
            'pinjamlaptop' => $pinjamlaptop,
        ]);
    }

    public function pinjamheadphone()
    {
        $pinjamheadphone = DB::table('pinjamheadphone')->get();

        return view('admin.data-peminjaman.data-earphone', ['pinjamheadphone' => $pinjamheadphone]);
    }

    public function pinjamtablet()
    {
        $pinjamtablet = DB::table('pinjamtablet')->get();

        return view('admin.data-peminjaman.data-tablet', ['pinjamtablet' => $pinjamtablet]);
    }

    public function pinjamcomputer()
    {
        $pinjamcomputer = DB::table('pinjamcomputer')->get();

        return view('admin.data-peminjaman.data-pc', ['pinjamcomputer' => $pinjamcomputer]);
    }

    public function pinjamhandphone()
    {
        $pinjamhandphone = DB::table('pinjamhandphone')->get();

        return view('admin.data-peminjaman.data-handphone', ['pinjamhandphone' => $pinjamhandphone]);
    }

    public function pinjamcamera()
    {
        $pinjamcamera = DB::table('pinjamcamera')->get();

        return view('admin.data-peminjaman.data-camera', ['pinjamcamera' => $pinjamcamera]);
    }

    public function pinjamflashdisk()
    {
        $pinjamflashdisk = DB::table('pinjamflashdisk')->get();

        return view('admin.data-peminjaman.data-flashdisk', ['pinjamflashdisk' => $pinjamflashdisk]);
    }

    public function pinjamhardisk()
    {
        $pinjamhardisk = DB::table('pinjamhardisk')->get();

        return view('admin.data-peminjaman.data-hardisk', ['pinjamhardisk' => $pinjamhardisk]);
    }

    public function pinjamprinter()
    {
        $pinjamprinter = DB::table('pinjamprinter')->get();

        return view('admin.data-peminjaman.data-printer', ['pinjamprinter' => $pinjamprinter]);
    }

    public function pinjamlan()
    {
        $pinjamlan = DB::table('pinjamlan')->get();

        return view('admin.data-peminjaman.data-lan', ['pinjamlan' => $pinjamlan]);
    }

    public function pinjamhdmi()
    {
        $pinjamhdmi = DB::table('pinjamhdmi')->get();

        return view('admin.data-peminjaman.data-hdmi', ['pinjamhdmi' => $pinjamhdmi]);
    }

    public function pinjamprojector()
    {
        $pinjamprojector = DB::table('pinjamprojector')->get();

        return view('admin.data-peminjaman.data-projector', ['pinjamprojector' => $pinjamprojector]);
    }
}
