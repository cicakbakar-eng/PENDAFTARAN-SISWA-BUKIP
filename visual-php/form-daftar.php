<!DOCTYPE html>

<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru|SMK Coding</title>

</head>
<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>
    <form action="proses-pendaftaran.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" />
            </p>
            <p>
                <label for="alamat">alamat: </label>
                <textarea name="alamat"></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin:</label><br>
                <input type="radio" id="laki-laki" name="jenis_kelamin" value="laki-laki">
                <label for="laki-laki">Laki-laki</label><br>
                <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan">
                <label for="perempuan">Perempuan</label>
            </p>
            <p>
                <label for="agama">agama: </label>
                <select name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">sekolah_asal</label>
                <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
            </p>
            <p>
                <input type="submit" value="daftar" name="submit">
            </p>
        </fieldset>
    </form>
</body>
</html>