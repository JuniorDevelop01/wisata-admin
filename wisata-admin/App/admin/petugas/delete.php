<?php
$id = $_GET['id'];

$sql = "DELETE FROM petugas WHERE id_petugas=$id";
$conn->query($sql);

header("Location: index.php?page=App/admin/petugas/index.php");

?>