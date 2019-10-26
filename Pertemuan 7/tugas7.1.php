<?php
  if(isset($_GET['button']) and !empty($_GET['nama'])) {
  $datadiri = ['nama' => $_GET['nama'],
          'alamat' => $_GET[alamat],
          'jk' => $_GET['jk'],
          'goldar' => $_GET['goldar'],
          'hobi' => $_GET['hobi'],
          'ket' => $_GET['ket']
          ];

          echo "DATA DIRI </br>";
          echo "Nama : $datadiri[nama]</br>";
          echo "Alamat : $datadiri[alamat]</br>";
          echo "Jenis Kelamin : $datadiri[jk]</br>";
          echo "Golongan Darah : $datadiri[goldar]</br>";
          echo "Hobi : $datadiri[hobi]</br>";
          echo "Keterangan : $datadiri[ket]</br>";
    }
    else {
          echo " Anda harus mengisi Kolom nama sebelumnya";
    }
    ?>
