<h3 class="main--title">Tambah daftar masjid</h3>
<form method="post" action="index.php?page=App/admin/masjid/create.php" enctype="multipart/form-data">
    <!-- Input Name -->
    <div class="inputBx">
        <label for="name">Name :</label>
        <input type="text" id="name" name="name" placeholder="Name">
    </div>

    <!-- Input Gambar --> 
    <div class="inputBx">
        <label for="gambar">Unggah Gambar :</label>
        <input type="file" id="gambar" name="gambar" accept="image/*">
    </div>
    
    <div class="textareaBx">
        <label for="alamat">Alamat :</label>
        <textarea name="alamat" id="alamat" rows="7"></textarea>
    </div>

    
    <!-- Tombol Submit -->
    <input type="submit" value="Tambah" class="btn add">
</form>
