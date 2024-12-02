<?php
// Ambil data dari form
$name = $_POST['name'];
$alamat = $_POST['alamat'];

// Direktori tujuan upload
$upload_dir_main = __DIR__ . '../../lp-4-main/image/Masjid'; // Folder lp-4-main/gambar
$upload_dir_admin = __DIR__ . '/gambar/';               // Folder App/admin/masjid/gambar

// Pastikan folder utama ada
if (!is_dir($upload_dir_main)) {
    mkdir($upload_dir_main, 0755, true); // Buat folder jika belum ada
}

// Pastikan folder admin ada
if (!is_dir($upload_dir_admin)) {
    mkdir($upload_dir_admin, 0755, true); // Buat folder jika belum ada
}

// Proses upload file
$gambar_name = $_FILES['gambar']['name'];
$gambar_tmp_name = $_FILES['gambar']['tmp_name'];
$gambar_main_path = $upload_dir_main . basename($gambar_name);
$gambar_admin_path = $upload_dir_admin . basename($gambar_name);

// Upload ke folder utama
if (move_uploaded_file($gambar_tmp_name, $gambar_main_path)) {
    // Salin file ke folder admin
    if (!copy($gambar_main_path, $gambar_admin_path)) {
        die("Gagal menyalin gambar ke folder admin ($upload_dir_admin).");
    }

    // Simpan path relatif gambar (misalnya path di folder admin) ke database
    $gambar_db_path = 'App/admin/masjid/gambar/' . basename($gambar_name);
} else {
    die("Gagal mengunggah gambar. Pastikan folder $upload_dir_main memiliki izin tulis.");
}

// Simpan data ke database
$sql = "INSERT INTO masjid (id_masjid, nama, alamat, gambar)
        VALUES ('', '$name', '$alamat', '$gambar_db_path')";

if ($conn->query($sql) === TRUE) {
    // Redirect ke halaman index
    header("Location: index.php?page=App/admin/masjid/index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
