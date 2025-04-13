<?php
include("config.php");
$id = $_GET['id'];
$sql = "SELECT * FROM calonsiswa WHERE id='$id'";
$query = mysqli_query($conn, $sql);
$siswa = mysqli_fetch_array($query);
if (!$siswa) {
    die("Data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa | SMK CODING</title>
</head>
<body>
    <header>
        <h3>Edit Siswa</h3>
    </header>
    <form action="edit-siswa.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
        <fieldset>
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $siswa['nama'] ?>" />
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin:</label><br>
                <?php $jk = $siswa['jenis_kelamin']; ?>
                <input type="radio" id="laki-laki" name="jenis_kelamin" value="laki-laki" <?php if ($jk == 'laki-laki') echo 'checked'; ?>>
                <label for="laki-laki">Laki-laki</label><br>
                <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan" <?php if ($jk == 'perempuan') echo 'checked'; ?>>
                <label for="perempuan">Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama: </label>
                <select name="agama">
                    <option value="Islam" <?php if ($siswa['agama'] == 'Islam') echo 'selected'; ?>>Islam</option>
                    <option value="Kristen" <?php if ($siswa['agama'] == 'Kristen') echo 'selected'; ?>>Kristen</option>
                    <option value="Hindu" <?php if ($siswa['agama'] == 'Hindu') echo 'selected'; ?>>Hindu</option>
                    <option value="Budha" <?php if ($siswa['agama'] == 'Budha') echo 'selected'; ?>>Budha</option>
                    <option value="Atheis" <?php if ($siswa['agama'] == 'Atheis') echo 'selected'; ?>>Atheis</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal: </label>
                <input type="text" name="sekolah_asal" placeholder="Nama Sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
            </p>
            <p>
                <input type="submit" value="Update" name="update">  
            </p>    
        </fieldset>
    </form> 
    <p><a href="list-siswa.php">Kembali ke daftar siswa</a></p>
</body> 
</html>