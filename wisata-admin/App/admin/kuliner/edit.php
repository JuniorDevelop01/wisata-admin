<h3 class="main--title">Dasboard</h3>

<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM `kuliner` WHERE id_kuliner=$id";
    $Kuliner_daerah = $conn->query($sql);
    $kuliner = mysqli_fetch_array($Kuliner_daerah);

?>
<form method="post" action="index.php?page=App/admin/kuliner/update.php" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?php echo $kuliner['id_kuliner']; ?>">
    <!-- Input Name -->
    <div class="inputBx">
        <label for="name">Name :</label>
        <input type="text" id="name" name="name" value="<?php echo $kuliner['nama']?>">
    </div>
    <!-- Input Harga Tiket -->
    <div class="inputBx">
        <label for="Asal">Asal :</label>
        <input type="text" id="asal" name="asal" value="<?php echo $kuliner['asal_daerah']?>">
    </div>

    <!-- Input Gambar --> 
    <div class="inputBx">
        <label for="gambar">Unggah Gambar :</label>
        <input type="file" id="gambar" name="gambar" accept="image/*">
    </div>
    
    <!-- Input Alamat -->
    <div class="textareaBx">
        <label for="deskripsi">Deskripsi :</label>
        <textarea name="deskripsi" id="deskripsi" rows="7">
        <?php echo $kuliner['deskripsi']?>
        </textarea>
    </div>
    
    <!-- Tombol Submit -->
    <input type="submit" value="Edit" class="btn edit">
</form>


