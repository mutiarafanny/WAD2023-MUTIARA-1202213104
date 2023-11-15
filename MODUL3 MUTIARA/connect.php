<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
    $host = "localhost";
    $username = "root";
    $pass = "";
    $db_name = "wad_modul3_mutiara";
    $connect = mysqli_connect($host, $username, $pass, $db_name);
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
    if ($connect->connect_error) {
        die("Koneksi gagal: " . $connect->connect_error);
    }
// 
?>