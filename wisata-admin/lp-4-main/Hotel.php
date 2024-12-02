<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "db_kebudayaan_pariwisata");

// Periksa koneksi
if ($conn->connect_error) {
die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data hotel
$sql = "SELECT * FROM hotel";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hotel Listings</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="dist/css/css/bootstrap.css">
	<link rel="stylesheet" href="dist/css/css/style.css">
</head>
<body>
<div id="fh5co-blog">
	<div class="row">
		<?php
            // Loop data dari database
            while ($row = $result->fetch_assoc()) {
		?>
		<div class="col-md-4">
			<div class="fh5co-blog animate-box">
				<a href="#" class="blog-bg" style="background-image: url('http://localhost/wisata-admin/wisata-admin/<?php echo htmlspecialchars($row['gambar']); ?>');"></a>
				<div class="blog-text">
					<span class="posted_on"><?php echo htmlspecialchars($row['jam_operasional']); ?></span>
					<h3><a href="#"><?php echo htmlspecialchars($row['nama']); ?></a></h3>
					<p><?php echo htmlspecialchars($row['deskripsi']); ?></p>
					<ul class="stuff">	
						<li><i class="icon-heart3"></i><?php echo htmlspecialchars($row['perkiraan_harga']); ?> / malam</li>
						<li><i class="icon-eye2"></i><?php echo htmlspecialchars($row['alamat']); ?></li>
						<li><a href="Hotel-detail.php?id=<?php echo $row['id_hotel']; ?>">Read More<i class="icon-arrow-right22"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php
            }
            ?>
	</div>
</div>
</body>
</html>
<?php
} else {
    echo "<p>Belum ada data hotel tersedia.</p>";
}

// Tutup koneksi
$conn->close();
?>
