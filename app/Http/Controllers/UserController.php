<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UpdateProfileRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

class UserController extends Controller
{
    // public function edit() {
    //     return view('user.edit')->with('user', auth()->user());
    // }

    // public function update(UpdateProfileRequest $request) {
    //     $user = auth()->user();

    //     $user ->update([
    //         'name' => $request->name,
    //         'class' => $request->class,
    //         'email' => $request->email
    //     ]);

    //     session()->flash('sucsess', 'User Update Sucsessfully');

    //     return redirect()->back();
    // }

    public function up() {
        Schema::table('user', function (Blueprint $table) {
            $table->text('password')->nullable();
        });
    }
}
