<h3 class="main--title">Tambah Tempat Wisata</h3>
<form method="post" action="index.php?page=App/admin/wisata/create.php" enctype="multipart/form-data">
    <!-- Input Name -->
    <div class="inputBx">
        <label for="name">Name :</label>
        <input type="text" id="name" name="name" placeholder="Name">
    </div>
    <!-- Input Jam Operasional -->
    <div class='inputBx'>
        <label for="jam_operasional">Jam Operasional :</label>
        <input type="time" id="jam" name="jam" placeholder="Masukkan jam operasional">
    </div>
    
    <!-- Input Harga Tiket -->
    <div class="inputBx">
        <label for="tiket">Harga Tiket :</label>
        <input type="text" id="tiket" name="tiket" placeholder="Masukkan harga tiket">
    </div>

    <!-- Input Gambar --> 
    <div class="inputBx">
        <label for="gambar">Unggah Gambar :</label>
        <input type="file" id="gambar" name="gambar" accept="image/*">
    </div>
    
    <!-- Input Alamat -->
    <div class="textareaBx">
        <label for="alamat">Alamat :</label>
        <textarea name="alamat" id="alamat" rows="7"></textarea>
    </div>
    
    <!-- Tombol Submit -->
    <input type="submit" value="Tambah" class="btn add">
</form>
