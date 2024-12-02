<?php
$id = $_GET['id'];

$sql = "DELETE FROM wisata WHERE id_wisata=$id";
$conn->query($sql);

header("Location: index.php?page=App/admin/wisata/index.php");

?>
