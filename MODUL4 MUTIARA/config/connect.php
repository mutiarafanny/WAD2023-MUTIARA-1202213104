<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$host = "localhost";
$username = "root";
$pass = "";
$db_name = "wad_modul4_mutiara";
$connect = mysqli_connect($host, $username, $pass, $db_name);
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if ($connect->connect_error) {
    die("Koneksi gagal: " . $connect->connect_error);
}
// 
 
?>