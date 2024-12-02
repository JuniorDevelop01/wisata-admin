<?php
$nama = $_POST['name'];
$jam = $_POST['jam'];
$harga = $_POST['harga'];
$alamat = $_POST['alamat'];
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
        $gambar_db_path = 'App/admin/hotel/gambar/' . basename($gambar_name);

        // Query update dengan gambar baru
        $sql = "UPDATE `hotel` SET 
                nama='$nama', 
                alamat='$alamat', 
                deskripsi='$deskripsi', 
                jam_operasional='$jam', 
                perkiraan_harga='$harga', 
                gambar='$gambar_db_path' 
                WHERE id_hotel=$id";
    } else {
        die("Gagal mengunggah gambar.");
    }
} else {
    // Query update tanpa mengubah gambar
    $sql = "UPDATE `hotel` SET 
            nama='$nama', 
            alamat='$alamat', 
            deskripsi='$deskripsi', 
            jam_operasional='$jam', 
            perkiraan_harga='$harga'
            WHERE id_hotel=$id";
}

// Eksekusi query
if ($conn->query($sql) === TRUE) {
    header("Location: index.php?page=App/admin/hotel/index.php");
} else {
    echo "Error: " . $conn->error;
}
?>
