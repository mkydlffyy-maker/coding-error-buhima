
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Siswa</title>
</head>
<body>

    <h2>FORM TAMBAH DATA SISWA</h2>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    <form action="/siswa" method="POST">
        @csrf

        <label>NIS</label><br>
        <input type="text" name="nis">
        <br><br>

        <label>Nama</label><br>
        <input type="text" name="nama">
        <br><br>

        <label>Kelas</label><br>
        <select name="kelas">
            <option value="">Pilih Kelas</option>
            <option value="X RPL 1">X RPL 1</option>
            <option value="X RPL 2">X RPL 2</option>
            <option value="X TKJ 1">X TKJ 1</option>
        </select>
        <br><br>

        <label>Jurusan</label><br>
        <select name="jurusan">
            <option value="">Pilih Jurusan</option>
            <option value="RPL">RPL</option>
            <option value="TKJ">TKJ</option>
        </select>
        <br><br>

        <button type="submit">Simpan Data</button>
    </form>

</body>
</html>
