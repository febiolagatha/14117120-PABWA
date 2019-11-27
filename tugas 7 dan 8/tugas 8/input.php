<html>
    <head>
        <title>Data Mahasiswa</title>
    </head>
    <body>
        <h1>TAMBAH DATA</h1>
        <form action="tambah.php" method="post" enctype="multipart/form-data">
        NRP : <input type="text" name="NRP"> <br>
        Nama : <input type="text" name="nama" ><br>
        Foto : <input type="file" name="foto" > <br>
        Jurusan : <select name="jurusan" >
            <option value="Informatika">Informatika</option>
            <option value="Elektro">Elektro</option>
            <option value="Mesin">Mesin</option>
            <option value="Sipil">Sipil</option>
        </select><br> <br>
        <input type="submit" value="Tambah">
    </form>
    <p>=============================================</p>
    <h1>SEARCH DATA</h1>
    <form action="cari.php" method="post">
    Nama : <input type="text" name="nama" >
    <input type="submit" value="Cari Data">
</form>
<P>=============================================</P>
<h1>HAPUS DATA </h1>
    <form action="hapus.php" method="post">
        Nama : <input type="text" name="nama">
        <input type="submit" value="Hapus Data">
    </form>
    </body>
</html>
