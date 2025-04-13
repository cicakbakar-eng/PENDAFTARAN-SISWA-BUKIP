<?php
include("config.php");

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = ($conn, $_POST['nama']);
    $alamat = ($conn, $_POST['alamat']);
    $jenis_kelamin = ($conn, $_POST['jenis_kelamin']);
    $agama = ($conn, $_POST['agama']);
    $sekolah_asal = ($conn, $_POST['sekolah_asal']);

    $sql = "UPDATE calonsiswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah_asal='$sekolah_asal' WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
    
    if ($query) {
        header('Location: list-siswa.php?status=sukses');
        exit();
    } else {
        header('Location: index.php?status=gagal');
        error_log("Error saat mengupdate data: " . mysqli_error($conn));
        exit();
    }
} else {
    die("Akses dilarang");
}
