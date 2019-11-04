<html>
<head>
  <title>Tabel Mahasiswa</title>
</head>
<body>
<h1>Data mahasiswa</h1>
<?php
$nrp= $_POST["nrp"];
$nama = $_POST["nama"];
$foto = $_POST["foto"];
$jurusan = $_POST["jurusan"];
$conn=mysqli_connet ("localhost","root","")
      or die ("koneksi gagal");
mysqli_select_db($conn,"latihanpabw");
echo "NRP       : $nrp  <br>";
echo "Nama      : $nama <br>";
echo "Foto      : $foto <br>";
echo "jurusan   : $jurusan <br>";
$sqlstr="insert into tabelmahasiswa (nrp,nama,foto,jurusan)
          values ('$nrp','$nama','$foto','$jurusan')";
$hasil = mysqli_query($conn,$sqlstr);
echo " data di tambahkan ";

$row = mysqli_fetch_array($hasil);


?>
</body>
</html>
