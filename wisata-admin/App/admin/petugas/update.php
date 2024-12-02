<?php
$name = $_POST['name'];
$gmail = $_POST['email'];
$password = $_POST['password'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$id = $_POST['id'];

$hashed_password = md5($password);

$sql = "UPDATE `petugas` SET nama='$name', email='$gmail' ,password='$hashed_password', no_hp='$no_hp', alamat='$alamat' WHERE id_petugas=$id";
$conn->query($sql); 
header("Location: index.php?page=App/admin/petugas/index.php");


?>






