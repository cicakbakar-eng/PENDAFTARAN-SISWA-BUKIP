<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENDAFTARAN SISWA BARU | AYO NGODING GANTENG</title>
</head>
<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>
    <nav>
        <a href="form-daftar.php">[+]Tambah Baru</a>
    </nav>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Asal Sekolah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM calonsiswa";
            $query = mysqli_query($conn, $sql);

            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . ($siswa['id']) . "</td>";
                echo "<td>" . ($siswa['nama']) . "</td>";
                echo "<td>" . ($siswa['alamat']) . "</td>";
                echo "<td>" . ($siswa['jenis_kelamin']) . "</td>";
                echo "<td>" . ($siswa['agama']) . "</td>";
                echo "<td>" . ($siswa['sekolah_asal']) . "</td>";
                echo "<td><a href='form-edit.php?id=" . ($siswa['id']) . "'>Edit</a> | <a href='hapus-siswa.php?id=" . htmlspecialchars($siswa['id']) . "' onclick=\"return confirm('Yakin ingin menghapus data ini?')\">Hapus</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p>Total Siswa: <?php echo mysqli_num_rows($query); ?></p>
    <p><a href="index.php">Kembali ke halaman utama</a></p>
</body>
</html>