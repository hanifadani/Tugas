<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    
    // Upload gambar
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);

    $stmt = $conn->prepare("INSERT INTO pendaftar (nama, email, telepon, alamat, tanggal_lahir, gambar) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $nama, $email, $telepon, $alamat, $tanggal_lahir, $target_file);
    $stmt->execute();
    echo "Pendaftaran berhasil!";
}
?>

<form method="POST" enctype="multipart/form-data">
    Nama: <input type="text" name="nama" required><br>
    Email: <input type="email" name="email" required><br>
    Telepon: <input type="text" name="telepon" required><br>
    Alamat: <textarea name="alamat" required></textarea><br>
    Tanggal Lahir: <input type="date" name="tanggal_lahir" required><br>
    Gambar: <input type="file" name="gambar" required><br>
    <input type="submit" value="Daftar">
</form>