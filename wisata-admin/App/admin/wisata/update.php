<?php
// Ambil data dari form
$id = $_POST['id'];
$name = $_POST['name'];
$time = $_POST['jam'];
$tiket = $_POST['tiket'];
$alamat = $_POST['alamat'];
$upload_dir = __DIR__ . '/gambar/'; // Direktori gambar

// Periksa apakah ada file gambar yang diunggah
if (!empty($_FILES['gambar']['name'])) {
    // Proses upload gambar baru
    $gambar_name = $_FILES['gambar']['name'];
    $gambar_tmp_name = $_FILES['gambar']['tmp_name'];
    $gambar_path = $upload_dir . basename($gambar_name);

    if (move_uploaded_file($gambar_tmp_name, $gambar_path)) {
        $gambar_db_path = 'App/admin/wisata/gambar/' . basename($gambar_name);
        // Tambahkan ke query SQL jika ada gambar baru
        $sql = "UPDATE `wisata` SET 
                nama='$name', 
                alamat='$alamat', 
                harga_tiket='$tiket', 
                jam_operasional='$time', 
                gambar='$gambar_db_path' 
                WHERE id_wisata=$id";
    } else {
        die("Gagal mengunggah gambar. Pastikan direktori $upload_dir memiliki izin tulis.");
    }
} else {
    // Jika tidak ada gambar baru, hanya perbarui data lainnya
    $sql = "UPDATE `wisata` SET 
            nama='$name', 
            alamat='$alamat', 
            harga_tiket='$tiket', 
            jam_operasional='$time' 
            WHERE id_wisata=$id";
}

// Eksekusi query
if ($conn->query($sql) === TRUE) {
    header("Location: index.php?page=App/admin/wisata/index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
