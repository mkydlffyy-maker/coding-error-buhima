<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Siswa</title>
</head>
<body>

    <h2>FORM EDIT DATA SISWA</h2>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    <form action="/siswa/{{ $siswa->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>NIS</label><br>
        <input type="text" name="nis" value="{{ $siswa->nis }}">
        <br><br>

        <label>Nama</label><br>
        <input type="text" name="nama" value="{{ $siswa->nama }}">
        <br><br>

        <label>Kelas</label><br>
        <select name="kelas">
            <option value="X" {{ $siswa->kelas == 'X' ? 'selected' : '' }}>X</option>
            <option value="XI" {{ $siswa->kelas == 'XI' ? 'selected' : '' }}>XI</option>
            <option value="XII" {{ $siswa->kelas == 'XII' ? 'selected' : '' }}>XII</option>
        </select>
        <br><br>

        <label>Jurusan</label><br>
        <select name="jurusan">
            <option value="RPL" {{ $siswa->jurusan == 'RPL' ? 'selected' : '' }}>RPL</option>
            <option value="TKJ" {{ $siswa->jurusan == 'TKJ' ? 'selected' : '' }}>TKJ</option>
            <option value="TB" {{ $siswa->jurusan == 'TB' ? 'selected' : '' }}>TB</option>
            <option value="TPSB" {{ $siswa->jurusan == 'TPSB' ? 'selected' : '' }}>TPSB</option>
            <option value="TKR" {{ $siswa->jurusan == 'TKR' ? 'selected' : '' }}>TKR</option>
            <option value="TP" {{ $siswa->jurusan == 'TP' ? 'selected' : '' }}>TP</option>
            <option value="TEI" {{ $siswa->jurusan == 'TEI' ? 'selected' : '' }}>TEI</option>
        </select>
        <br><br>

        <label>Alamat</label><br>
        <textarea name='alamat'></textarea>
        <br><br>

        <button type="submit">Update Data</button>
    </form>

</body>
</html>
