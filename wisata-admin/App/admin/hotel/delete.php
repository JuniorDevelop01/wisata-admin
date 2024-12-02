<?php
$id = $_GET['id'];

$sql = "DELETE FROM hotel WHERE id_hotel=$id";
$conn->query($sql);
header("Location: index.php?page=App/admin/hotel/index.php");

?>