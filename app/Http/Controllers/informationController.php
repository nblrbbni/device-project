<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class informationController extends Controller
{
  public function create()
  {
    return view('information.tambah');
  }

  public function store(Request$request)
  {
    $request->validate([
        'nama_pasal' => 'required',
        'descripsi' => 'required',
    ]);
    DB::table('information')->insert([
        'nama_pasal' => $request['nama_pasal'],
        'descripsi' => $request['descripsi']
    ]);

    return redirect('/information');
  }

  public function index()
  {
    $information = DB::table('information')->get();
    // dd($information);
    return view('information.tampil', ['information' =>   $information]);
  }

  public function show ($id)
  {
    $information = DB::table('information')->where('id', $id)->first();

    return view('information.detail', ['information' => $information]);
  }
  public function edit($id)
  {
    $information = DB::table('information')->where('id', $id)->first();

    return view('information.edit', ['information' => $information]);
  }
  public function update(Request $request, $id)
  {
        $request->validate([
            'nama_pasal' => 'required',
            'descripsi'=> 'required'
        ]);
        DB::table('information')
              ->where('id', $id)
              ->update(
                [
                    'nama_pasal' => $request->nama_pasal,
                    'descripsi' => $request->descripsi
                ]
            );
            return redirect('/information');
   }
   public function destroy($id)
   {
    DB::table('information')->where('id', $id)->delete();
    return redirect('/information');
   }
}
