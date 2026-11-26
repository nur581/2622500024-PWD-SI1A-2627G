<?php
include "fungsi.php";

if (isset($_POST['kirim'])) {
    if (simpanKontak($koneksi, $_POST)) {
        echo "<p style='color:green'>Data berhasil disimpan!</p>";
    } else {
        echo "<p style='color:red'>Gagal simpan!</p>";
    }
}
$dataKontak = tampilKontak($koneksi);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Kontak - Pertemuan 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Form Kontak</h2>
    <form method="POST" action="">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Semester:</label><br>
        <input type="number" name="semester" required><br><br>

        <label>Tanggal:</label><br>
        <input type="date" name="tanggal" required><br><br>

        <label>Jenis Pesan:</label><br>
        <select name="jenis_pesan" required>
            <option value="Saran">Saran</option>
            <option value="Kritik">Kritik</option>
            <option value="Pertanyaan">Pertanyaan</option>
        </select><br><br>

        <label>Minat:</label><br>
        <input type="checkbox" name="minat[]" value="Coding"> Coding
        <input type="checkbox" name="minat[]" value="Desain"> Desain
        <input type="checkbox" name="minat[]" value="Musik"> Musik<br><br>

        <label>Prodi:</label><br>
        <input type="radio" name="prodi" value="Informatika" required> Informatika
        <input type="radio" name="prodi" value="Sistem Informasi"> Sistem Informasi<br><br>

        <label>Pesan:</label><br>
        <textarea name="pesan" required></textarea><br><br>

        <button type="submit" name="kirim">Kirim</button>
    </form>

    <hr>
    <h2>Data Kontak Tersimpan</h2>
    <table border="1" cellpadding="8">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Semester</th>
            <th>Tanggal</th>
            <th>Jenis Pesan</th>
            <th>Minat</th>
            <th>Prodi</th>
            <th>Pesan</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($dataKontak)) { ?>
        <tr>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['semester'] ?></td>
            <td><?= $row['tanggal'] ?></td>
            <td><?= $row['jenis_pesan'] ?></td>
            <td><?= $row['minat'] ?></td>
            <td><?= $row['prodi'] ?></td>
            <td><?= $row['pesan'] ?></td>
        </tr>
        <?php } ?>
    </table>

    <script src="script.js"></script>
</body>
</html>