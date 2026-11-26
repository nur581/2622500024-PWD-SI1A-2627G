<?php
include "koneksi.php";

function tampilKontak($koneksi) {
    $query = "SELECT * FROM tbl_kontak_2622500024 ORDER BY id DESC";
    return mysqli_query($koneksi, $query);
}

function simpanKontak($koneksi, $data) {
    $nama = $data['nama'];
    $email = $data['email'];
    $semester = $data['semester'];
    $tanggal = $data['tanggal'];
    $jenis_pesan = $data['jenis_pesan'];
    $minat = isset($data['minat']) ? implode(", ", $data['minat']) : "";
    $prodi = $data['prodi'];
    $pesan = $data['pesan'];

    $query = "INSERT INTO tbl_kontak_2622500024 (nama, email, semester, tanggal, jenis_pesan, minat, prodi, pesan) 
              VALUES ('$nama', '$email', '$semester', '$tanggal', '$jenis_pesan', '$minat', '$prodi', '$pesan')";
    return mysqli_query($koneksi, $query);
}
?>