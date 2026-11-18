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
            <option value="X RPL 1" {{ $siswa->kelas == 'X RPL 1' ? 'selected' : '' }}>X RPL 1</option>
            <option value="X RPL 2" {{ $siswa->kelas == 'X RPL 2' ? 'selected' : '' }}>X RPL 2</option>
            <option value="X TKJ 1" {{ $siswa->kelas == 'X TKJ 1' ? 'selected' : '' }}>X TKJ 1</option>
        </select>
        <br><br>

        <label>Jurusan</label><br>
        <select name="jurusan">
            <option value="RPL" {{ $siswa->jurusan == 'RPL' ? 'selected' : '' }}>RPL</option>
            <option value="TKJ" {{ $siswa->jurusan == 'TKJ' ? 'selected' : '' }}>TKJ</option>
        </select>
        <br><br>

        <button type="submit">Update Data</button>
    </form>

</body>
</html>
