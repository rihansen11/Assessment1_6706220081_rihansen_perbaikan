<?php

namespace App\Http\Controllers;

use App\Models\vehicles;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        $kendaraan = vehicles::all();
        return view('kendaraan.daftarkendaraan', compact('kendaraan'));
    }

}
// RIHANSEN ULIHDO PURBA - 6706220081