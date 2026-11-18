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
        $request->validate([
            'nis' => 'required|max:20|unique:siswas,nis',
            'nama' => 'required|max:100',
            'kelas' => 'required|in:X,XI,XII',
            'jurusan' => 'required|in:RPL,TKJ,TB,TPSB,TKR,TP,TEI',
            'alamat' => 'nullable|max:150'
        ]);

        Siswa::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'alamat' => $request->alamat
        ]);

        return redirect('/siswa/create')
            ->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);

        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);

        $request->validate([
            'nis' => 'required|max:20|unique:siswas,nis,' . $siswa->id,
            'nama' => 'required|max:100',
              'kelas' => 'required|in:X,XI,XII',
            'jurusan' => 'required|in:RPL,TKJ,TB,TPSB,TKR,TP,TEI',
            'alamat' => 'nullable|max:150'
        ]);

        $siswa->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'alamat' => $request->alamat
        ]);

        return redirect('/siswa/' . $id . '/edit')
            ->with('success', 'Data berhasil diperbarui!');
    }
}