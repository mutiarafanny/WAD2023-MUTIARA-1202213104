<?php 

// (1) Hapus cookie dengan key id 
setcookie("id", "", time() - 3600, "/wad_project2/PRAKTIKUM/WAD2023-MUTIARA-1202213104/MODUL4%20MUTIARA/views");
// 

// (2) Mulai session
session_start();
//

// (3) Hapus semua session yang berlangsung
session_destroy();
//

// (4) Lakukan redirect ke halaman login awal
header('Location:../views/login.php');
//

exit;

?>