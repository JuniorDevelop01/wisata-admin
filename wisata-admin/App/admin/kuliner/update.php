<?php
$name = $_POST['name'];
$asal = $_POST['asal'];
$deskripsi = $_POST['deskripsi'];
$id = $_POST['id'];

// Lokasi folder untuk menyimpan gambar
$upload_dir = __DIR__ . '/gambar/';

// Periksa apakah ada file gambar yang diunggah
if (!empty($_FILES['gambar']['name'])) {
    $gambar_name = $_FILES['gambar']['name'];
    $gambar_tmp_name = $_FILES['gambar']['tmp_name'];
    $gambar_path = $upload_dir . basename($gambar_name);

    // Pindahkan file ke folder tujuan
    if (move_uploaded_file($gambar_tmp_name, $gambar_path)) {
        // Path gambar untuk disimpan di database
        $gambar_db_path = 'App/admin/kuliner/gambar/' . basename($gambar_name);

        // Query update termasuk gambar baru
        $sql = "UPDATE `kuliner` SET 
                nama='$name', 
                asal_daerah='$asal', 
                deskripsi='$deskripsi', 
                gambar='$gambar_db_path' 
                WHERE id_kuliner=$id";
    } else {
        die("Gagal mengunggah gambar.");
    }
} else {
    // Query update tanpa mengubah gambar
    $sql = "UPDATE `kuliner` SET 
            nama='$name', 
            asal_daerah='$asal', 
            deskripsi='$deskripsi'
            WHERE id_kuliner=$id";
}

// Eksekusi query
if ($conn->query($sql) === TRUE) {
    header("Location: index.php?page=App/admin/kuliner/index.php");
} else {
    echo "Error: " . $conn->error;
}
?>
