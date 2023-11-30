<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
            $users = Auth::id();
            $detailprofile = User::where('id', $users)->first();

            return view('profile.index', ['detailprofile' => $detailprofile]);
        }
    public function update(Request $request){

        $request->validate([
            'name'  => '',
            'class'  => '',
            'email' => '',
            'password' => '',
        ]);

        $user = User::find(Auth::id());

        $user->update([
            'name' => $request->name,
            'class' => $request->class,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
        ]);

        return redirect('/profile')->with('success', 'Profile updated successfully!');
    }

    // public function index(){
    //     $users = Auth::id();
    //     $detailprofile = User::where('id', $users)->first();

    //     return view('profile.index', ['detailprofile' => $detailprofile]);
    // }

    // public function update(Request $request){

    //     $request->validate([
    //         'name'  => 'required',
    //         'class'  => 'required',
    //         'email' => 'required',
    //         'password' => '',
    //     ]);

    //         dd($request->name);

    //     $users= User::find();

    //     $users->name = $request->name;
    //     $users->class = $request->class;
    //     $users->email = $request->email;
    //     $users->password = $request->password;
    //     $users->update();


    //     return redirect('/profile');
    // }

}
