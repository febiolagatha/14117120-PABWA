<!DOCTYPE html>
<html>
<head>
  <title> Harga bet </title>
</head>
<body>
  <form action="latihan2.php" method="get">
    <input type="text" name="nama"></input><br>
    <input type="text" name="color"></input><br>
    <input type="submit" name="submit" value="submit"></input>
  </form>

  <?php
    function nama($nama,$color="red"){
      $jumlah=strlen($nama);
      if($jumlah<=10){
        $jumlah = $jumlah*300;
      }
      else if ($jumlah>10 and $jumlah<=20){
        $jumlah = $jumlah*500;
      }
      else if ($jumlah>20){
        $jumlah = $jumlah*700;
      }
      echo " harga bet = Rp. $jumlah ";
      echo "<br>";
      echo '<fonr color="'.$color.'">'.$nama.'</font>';
    }
    nama($_GET['nama'], $_GET['color']);
    ?>
</body>
</html>
