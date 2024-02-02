<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataDeviceController extends Controller
{
    public function delete(string $id) 
    {
        $data  = laptop::findOrFail($id);
        $data->delete();
        return redirect()->route('laptop')->with('success', 'Data berhasil dihapus');
    }
}
