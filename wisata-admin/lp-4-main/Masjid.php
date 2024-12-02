<?php
// Konfigurasi koneksi database
$servername = "localhost";
$username = "root"; // Ganti sesuai dengan username database Anda
$password = ""; // Ganti sesuai dengan password database Anda
$dbname = "db_kebudayaan_pariwisata"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data masjid
$sql = "SELECT * FROM masjid";
$result = $conn->query($sql);
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Daftar Masjid</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="dist/css/css/animate.css">
    <!-- Icomoon Icon Fonts -->
    <link rel="stylesheet" href="dist/css/css/icomoon.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="dist/css/css/bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/css/style.css">
    <script src="js/modernizr-2.6.2.min.js"></script>
    <style>
        #back {
            position: relative;
            width: 100px;
            height: 100px;
            bottom: 100px;
            font-size: 20px;
            top: 100px;
            left: 100px;
        }
        button {
            width: 100px;
            height: 60px;
        }
    </style>
</head>
<body>

<div id="back">
    <a href="index.php">← Back</a>
</div>

<div id="fh5co-work">
    <div class="row">
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="col-md-4 text-center animate-box">
                    <a href="Masjid-detail.php?id=<?= $row['id_masjid'] ?>" class="work" style="background-image: url('http://localhost/wisata-admin/wisata-admin/<?= htmlspecialchars($row['gambar']) ?>');">   
                        <div class="desc">
                            <h3><?= htmlspecialchars($row['nama']) ?></h3>
                            <span><?= htmlspecialchars($row['alamat']) ?></span>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p class="text-center">Tidak ada data masjid ditemukan.</p>
        <?php endif; ?>
    </div>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/main.js"></script>

</body>
</html>

<?php
// Menutup koneksi database
$conn->close();
?>
