<?php

namespace App\Http\Controllers;

use App\Tambah;
use Illuminate\Http\Request;

class TambahController extends Controller
{
    public function tambah()
    {
        $tambah = Tambah::all();
        return view('biaya.tambah', compact('tambah'));
    }
}
