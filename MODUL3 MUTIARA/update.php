<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include("connect.php");
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
if (isset($_GET["id"])) {
    $id = $_GET["id"];
}
    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter
    function update($connect, $data) {}
        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        $id = $data['id'];
        $nama_mobil= $data['nama_mobil'];
        $brand_mobil= $data['brand_mobil'];
        $warna_mobil= $data['warna_mobil'];
        $tipe_mobil= $data['tipe_mobil'];
        $harga_mobil= $data['harga_mobil'];
        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil

        // Eksekusi perintah SQL

        // Buatkan kondisi jika eksekusi query berhasil
        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya

    // Panggil fungsi update dengan data yang sesuai

// Tutup koneksi ke database setelah selesai menggunakan database

?>