<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class ReturnDeviceControll extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('returndevice');
    }

    /**
     * Show the form for creating a new resource.   
     */
    public function create()
    {
        // $kategori = 
        return view('laptop.return-laptop');
        

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
