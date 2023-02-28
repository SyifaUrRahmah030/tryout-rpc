<?php

  $host       = "localhost";
  $user       = "id20238889_rpc";
  $pass       = "30M1424h_sy1f4";
  $db         = "id20238889_tryout";

  $koneksi    = mysqli_connect($host, $user, $pass, $db);
  if (!$koneksi) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
  }
  
?>