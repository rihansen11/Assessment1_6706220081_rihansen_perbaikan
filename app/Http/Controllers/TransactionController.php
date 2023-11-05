<?php

namespace App\Http\Controllers;

use App\Models\transactions;
use App\Models\vehicles;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(){
        $transaksi = transactions::all();
        return view('transaksi.daftarTransaksi' ,compact('transaksi'));
    }


    public function create()
    {
        $kendaraan = vehicles::all();
        $user = User::all();
        $transaksi = transactions::all();
        return view('transaksi.peminjaman', ['kendaraan' => $kendaraan, 'user' => $user, 'transaksi' => $transaksi]);
    }

    public function edit()
    {
        return view('transaksi.pengembalian');
    }

    public function store(Request $request)
    {

        $request->validate(
            [
                'peminjam' => 'required',
                'kendaraan' => 'required',
                'tanggal_pinjam' => 'required',
                'tanggal_selesai' => 'required',
            ]
        );

        $transaksi = transactions::create([
            'peminjam' => $request->peminjam,
            'kendaraan' => $request->kendaraan,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_selesai' => $request->tanggal_selesai,
        ]);

        $transaksi->save();

        return view('/dashboard');
    }

    public function update(Request $request)
    {
        return view('transaksi.daftarTransaksi');
    }

}
// RIHANSEN ULIHDO PURBA - 6706220081