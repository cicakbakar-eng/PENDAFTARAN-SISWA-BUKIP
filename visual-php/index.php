
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pendaftaran Siswa Baru | SMK CODING</title>
</head>
<body>
    <header>
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>SMK CODING GANTENG</h1>
    </header>
    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>
   <?php if (isset($_GET['status'])):?>
    <P>
        <?php if ($_GET['status'] = 'sukses'){
           echo "Pendaftaran Siswa Baru Berhasil!"; 
        } else {
            echo "Pendaftaran Siswa Baru Gagal!";
        }
         ?>
    </P>
    <?php endif; ?>
</body>
</html>