<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    public function index()
    {
        $siswa = Siswa::latest()->get();
        return view('admin.index', compact('siswa'));
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('admin.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
         $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);

        Siswa::findOrFail($id)->update($request->all());
        return redirect()->route('admin.index')->with('success', 'Data berhasil di perbaharui');
    }

    public function destroy($id)
    {
        $data = Siswa::findOrFail($id);
        $data->delete();
        return redirect()->route('admin.index')->with('success', 'Data berhasil di hapus');
    }

    public function print($id) {
        $siswa = Siswa::findOrFail($id);
        return view('admin.print',  compact('siswa'));
    }

    public function printSemua() {
        $siswa = Siswa::latest()->get();
        return view('admin.printSemua',  compact('siswa'));
    }
}
