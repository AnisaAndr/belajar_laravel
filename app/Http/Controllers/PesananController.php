<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function dataPesanan(){
        $pesanan = Pesanan::all();
        return view('pesanan', compact('pesanan'));
    }
}
