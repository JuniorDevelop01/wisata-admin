<h3 class="main--title">Edit Hotel</h3>

<?php
$id = $_GET['id'];
$sql = "SELECT * FROM `hotel` WHERE id_hotel=$id";
$hotel = $conn->query($sql);
$htl = mysqli_fetch_array($hotel);

?>

<form method="post" action="index.php?page=App/admin/hotel/update.php" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?php echo $htl['id_hotel']; ?>">

    <!-- Input Name -->
    <div class="inputBx">
        <label for="name">Name :</label>
        <input type="text" id="name" name="name" value="<?php echo $htl['nama']?>">
    </div>
    <!-- Input Jam Operasional -->
    <div class='inputBx'>
        <label for="jam_operasional">Jam Operasional :</label>
        <input type="time" id="jam" name="jam" value="<?php echo $htl['jam_operasional']?>">
    </div>
    
    <!-- Input Harga Tiket -->
    <div class="inputBx">
        <label for="harga">Harga :</label>
        <input type="text" id="harga" name="harga" value="<?php echo $htl['perkiraan_harga']?>">
    </div>

    <!-- Input Gambar --> 
    <div class="inputBx">
        <label for="gambar">Unggah Gambar :</label>
        <input type="file" id="gambar" name="gambar" accept="image/*">
    </div>

    <div class="inputBx">
        <label for="alamat">Alamat :</label>
        <input type="text" id="alamat" name="alamat" value="<?php echo $htl['alamat']?>">
    </div>
    
    <div class="textareaBx">
        <label for="deskripsi">Deskripsi :</label>
        <textarea name="deskripsi" id="deskripsi" rows="7">
        <?php echo $htl['deskripsi']?>
        </textarea>
    </div>

    
    <!-- Tombol Submit -->
    <input type="submit" value="Edit"   class="btn edit">
</form>
