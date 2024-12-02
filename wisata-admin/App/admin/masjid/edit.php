<h3 class="main--title">Edit Daftar Masjid</h3>

<?php
$id = $_GET['id'];
$sql = "SELECT * FROM `masjid` WHERE id_masjid=$id";
$masjid = $conn->query($sql);
$msjdd = mysqli_fetch_array($masjid);

?>

<form method="post" action="index.php?page=App/admin/masjid/update.php" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?php echo $msjdd['id_masjid']; ?>">

    <!-- Input Name -->
    <div class="inputBx">
        <label for="name">Name :</label>
        <input type="text" id="name" name="name" value="<?php echo $msjdd['nama']?>">
    </div>

    <!-- Input Gambar --> 
    <div class="inputBx">
        <label for="gambar">Unggah Gambar :</label>
        <input type="file" id="gambar" name="gambar" accept="image/*">
    </div>
    
    <div class="textareaBx">
        <label for="alamat">Alamat :</label>
        <textarea name="alamat" id="alamat" rows="7">
        <?php echo $msjdd['alamat']?>
        </textarea>
    </div>

    
    <!-- Tombol Submit -->
    <input type="submit" value="Edit" class="btn edit">
</form>
