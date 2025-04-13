<?php
include("config.php");
$id = $_GET['id'];
$sql = "DELETE FROM calonsiswa WHERE id='$id'";
$query = mysqli_query($conn, $sql);
if ($query) {
    header('Location: list-siswa.php?status=sukses');
} else {
    header('Location: list-siswa.php?status=gagal');
    // Tambahkan logging error untuk membantu debugging
    error_log("Error saat menghapus data: " . mysqli_error($conn));
}