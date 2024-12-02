<?php
$name = $_POST['name'];
$asal = $_POST['asal'];
$deskripsi = $_POST['deskripsi'];

// Proses upload gambar
$upload_dir = __DIR__ . '/gambar/'; // Direktori tempat menyimpan gambar
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0755, true); // Buat folder jika belum ada
}

$gambar_name = $_FILES['gambar']['name'];
$gambar_tmp_name = $_FILES['gambar']['tmp_name'];
$gambar_path = $upload_dir . basename($gambar_name);

// Pastikan file diunggah dengan sukses
if (move_uploaded_file($gambar_tmp_name, $gambar_path)) {
    // Simpan path relatif gambar ke database
    $gambar_db_path = 'App/admin/kuliner/gambar/' . basename($gambar_name);
} else {
    die("Gagal mengunggah gambar. Pastikan direktori $upload_dir memiliki izin tulis.");
}

$sql = "INSERT INTO kuliner (id_kuliner, nama, asal_daerah, deskripsi, gambar)
VALUE ('', '$name', '$asal', '$deskripsi','$gambar_db_path')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php?page=App/admin/kuliner/index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>



