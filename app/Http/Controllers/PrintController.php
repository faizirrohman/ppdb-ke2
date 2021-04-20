<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function index($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.print',  compact('siswa'));
    }
}
