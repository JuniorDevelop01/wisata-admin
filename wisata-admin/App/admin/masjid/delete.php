<?php
$id = $_GET['id'];

$sql = "DELETE FROM masjid WHERE id_masjid=$id";
$conn->query($sql);
header("Location: index.php?page=App/admin/masjid/index.php");

?>