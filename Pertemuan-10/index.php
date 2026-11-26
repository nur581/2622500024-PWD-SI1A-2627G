<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Kontak - Pertemuan 10</title>
</head>
<body>
    <h2>Form Kontak</h2>
    <form method="POST" action="">
        <label>Nama:</label><br>
        <input type="text" name="nur alizah" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="2622500024@mahasiswa.atamaluhur.ac.id" required><br><br>

        <label>Pesan:</label><br>
        <textarea name="terserah" required></textarea><br><br>

        <button type="submit" name="kirim">Kirim</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['kirim'])) {
        $nama = $_POST['nur alizah'];
        $email = $_POST['2622500024@mahasiswa.atamaluhur.ac.id'];
        $pesan = $_POST['terserah'];

        echo "<h3>Hasil yang dikirim:</h3>";
        echo "Nama: $nama <br>";
        echo "Email: $email <br>";
        echo "Pesan: $pesan <br>";
    }
    ?>
</body>
</html>