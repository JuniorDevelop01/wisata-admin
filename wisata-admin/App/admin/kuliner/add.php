<h3 class="main--title">Tambah Daftar Kuliner</h3>
<form method="post" action="index.php?page=App/admin/kuliner/create.php" enctype="multipart/form-data">
    <!-- Input Name -->
    <div class="inputBx">
        <label for="name">Name :</label>
        <input type="text" id="name" name="name" placeholder="Name">
    </div>
    
    
    <!-- Input Harga Tiket -->
    <div class="inputBx">
        <label for="Asal">Asal :</label>
        <input type="text" id="asal" name="asal" placeholder="masukkan asal makanan">
    </div>

    <!-- Input Gambar --> 
    <div class="inputBx">
        <label for="gambar">Unggah Gambar :</label>
        <input type="file" id="gambar" name="gambar" accept="image/*">
    </div>
    
    <!-- Input Alamat -->
    <div class="textareaBx">
        <label for="deskripsi">Deskripsi :</label>
        <textarea name="deskripsi" id="deskripsi" rows="7"></textarea>
    </div>
    
    <!-- Tombol Submit -->
    <input type="submit" value="Tambah" class="btn add">
</form>
