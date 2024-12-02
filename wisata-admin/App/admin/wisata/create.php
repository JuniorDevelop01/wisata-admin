<?php
// Ambil data dari form
$name = $_POST['name'];
$time = $_POST['jam'];
$tiket = $_POST['tiket'];
$alamat = $_POST['alamat'];

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
    $gambar_db_path = 'App/admin/wisata/gambar/' . basename($gambar_name);
} else {
    die("Gagal mengunggah gambar. Pastikan direktori $upload_dir memiliki izin tulis.");
}

// Simpan data ke database
$sql = "INSERT INTO wisata (id_wisata, nama, alamat, harga_tiket, jam_operasional, gambar)
        VALUES ('', '$name', '$alamat', '$tiket', '$time', '$gambar_db_path')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php?page=App/admin/wisata/index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
