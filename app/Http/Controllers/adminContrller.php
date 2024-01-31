<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminContrller extends Controller
{
    public function admin()
    {
        return view('admin.main.dashboard');
    }
}
