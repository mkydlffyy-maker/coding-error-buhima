<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function create()
    {
        return view('siswa.create');
    }
    public function store(Request $request)
    {
        $request->validate(['nis' => 'required|unique:siswas,nis', 'nama' => 'required', 'kelas' => 'required', 'jurusan' => 'required']);
        Siswa::create(['nis' => $request->nis, 'nama' => $request->nama, 'kelas' => $request->kelas, 'jurusan' => $request->jurusan]);
        return redirect('/siswa/create')->with('success', 'Data berhasil ditambahkan!');
    }
    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);
        $request->validate(['nis' => 'required|unique:siswas,nis,' . $id, 'nama' => 'required', 'kelas' => 'required', 'jurusan' => 'required']);
        $siswa->update(['nis' => $request->nis, 'nama' => $request->nama, 'kelas' => $request->kelas, 'jurusan' => $request->jurusan]);
        return redirect('/siswa/' . $id . '/edit')->with('success', 'Data berhasil diperbarui!');
    }
}
