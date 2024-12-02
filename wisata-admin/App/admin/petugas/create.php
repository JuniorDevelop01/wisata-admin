<?php 
// Ambil data dari form
$name = $_POST['name'];
$gmail = $_POST['email'];
$password = $_POST['password'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];

// Hash password menggunakan MD5
$hashed_password = md5($password);

// Query untuk menyimpan data ke database
$sql = "INSERT INTO petugas (id_petugas, nama, email, password, no_hp, alamat)
VALUE ('', '$name', '$gmail', '$hashed_password', '$no_hp', '$alamat')";

// Eksekusi query
$conn->query($sql);

// Redirect ke halaman index
header("Location: index.php?page=App/admin/petugas/index.php");

?>
