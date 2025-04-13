<?php
include("config.php");

// Pastikan tombol submit telah ditekan
if(isset($_POST['submit'])) {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];

    // Insert data ke database
    $sql = "INSERT INTO calonsiswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')";
    $query = mysqli_query($conn, $sql);

    // Cek apakah query berhasil dijalankan
    if ($query) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
        // Tambahkan logging error untuk membantu debugging
        error_log("Error saat menyimpan data: " . mysqli_error($conn));
    }


} else {
    // Jika akses langsung ke file ini tanpa submit form
    die("Akses dilarang...");
}
?>