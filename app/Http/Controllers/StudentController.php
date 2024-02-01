<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'class' => 'required',
        ]);

        DB::table('student')->insert([
            'name' => $request['name'],
            'class' => $request['class']
        ]);

        return redirect('/student');
    }

    public function index()
    {
        $student = DB::table('student')->get();

        return view('student.read', ['student' => $student]);
    }

    public function edit($id)
    {
        $student = DB::table('student')->where('id', $id)->first();

        return view('student.update', ['student' => $student]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'class' => 'required',
        ]);

        DB::table('student')
        ->where('id', $id)
        ->update(
            [
                'name' => $request->name,
                'class' => $request->class
            ],
        );
        Alert::success('Berhasil!', 'Data berhasil diupdate!');
        return redirect('/student');
    }

    public function delete($id)
    {
        DB::table('student')->where('id', $id)->delete();

        return redirect('/student');
    }
}
