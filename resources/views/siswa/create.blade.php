
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
            <option value="X RPL 1">X</option>
            <option value="X RPL 2">XI</option>
            <option value="X TKJ 1">XII</option>
        </select>
        <br><br>

        <label>Jurusan</label><br>
        <select name="jurusan">
            <option value="">Pilih Jurusan</option>
            <option value="RPL">RPL</option>
            <option value="TKJ">TKJ</option>
            <option value="TKJ">TB</option>
            <option value="TKJ">TPSB</option>
            <option value="TKJ">TKR</option>
            <option value="TKJ">TP</option>
            <option value="TKJ">TEI</option>
        </select>
        <br><br>

        <button type="submit">Simpan Data</button>
    </form>

</body>
</html>
