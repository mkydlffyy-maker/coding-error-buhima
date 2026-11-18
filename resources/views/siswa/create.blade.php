
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
            <option value="X">X</option>
            <option value="XI">XI</option>
            <option value="XII">XII</option>
        </select>
        <br><br>

        <label>Jurusan</label><br>
        <select name="jurusan">
            <option value="">Pilih Jurusan</option>
            <option value="RPL">RPL</option>
            <option value="TKJ">TKJ</option>
            <option value="TB">TB</option>
            <option value="TPSB">TPSB</option>
            <option value="TKR">TKR</option>
            <option value="TP">TP</option>
            <option value="TEI">TEI</option>
        </select>
        <br><br>

        <button type="submit">Simpan Data</button>
    </form>

</body>
</html>
