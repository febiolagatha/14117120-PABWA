</php
$kolom=$_POST['kolom'];
$cari=$_POST['cari'];
$conn=mysql_connect("localhost","root","");
mysql_select_db($conn,"latihanpabw");
$hasil=mysql_query(,$conn"select * from bukutamu where
$kolom like '%$cari%'");
$jumlah=mysql_num_rows($hasil);
echo "<br>";
echo "ditemukan: $jumlah";
echo "<br>";
while ($baris=mysql_fetch_array($hasil))
{
  echo "Nama : ";
  echo $baris[0];
  echo "<br>";
  echo "Email : ";
  echo $baris[1];
  echo "<br>";
  echo "Komentar : ";
  echo $baris[2];
}
?>
