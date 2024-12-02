<?php
$id = $_GET['id'];

$sql = "DELETE FROM kuliner WHERE id_kuliner=$id";
$conn->query($sql);

header("Location: index.php?page=App/admin/kuliner/index.php");

?>
