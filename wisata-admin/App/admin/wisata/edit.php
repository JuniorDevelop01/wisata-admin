<h3 class="main--title">Dasboard</h3>

<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM `wisata` WHERE id_wisata=$id";
    $wisata = $conn->query($sql);
    $wst = mysqli_fetch_array($wisata);

?>

<form method="post" action="index.php?page=App/admin/wisata/update.php" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?php echo $wst['id_wisata']; ?>">
    <!-- Input Name -->
    <div class="inputBx">
        <label for="name">Name :</label>
        <input type="text" id="name" name="name" value="<?php echo $wst['nama']?>">
    </div>
    <!-- Input Jam Operasional -->
    <div class='inputBx'>
        <label for="jam_operasional">Jam Operasional :</label>
        <input type="time" id="jam" name="jam" value="<?php echo $wst['jam_operasional']?>">
    </div>
    
    <!-- Input Harga Tiket -->
    <div class="inputBx">
        <label for="tiket">Harga Tiket :</label>
        <input type="text" id="tiket" name="tiket" value="<?php echo $wst['harga_tiket']?>">
    </div>

    <!-- Input Gambar --> 
    <div class="inputBx">
        <label for="gambar">Unggah Gambar :</label>
        <input type="file" id="gambar" name="gambar" value="<?php echo $wst['gambar']?>">
    </div>
    
    <!-- Input Alamat -->
    <div class="textareaBx">
        <label for="alamat">Alamat :</label>
        <textarea name="alamat" id="alamat" rows="7" ><?php echo $wst['alamat']?></textarea>
    </div>
    
    <!-- Tombol Submit -->
    <input type="submit" value="Edit" class="btn edit">
</form>


