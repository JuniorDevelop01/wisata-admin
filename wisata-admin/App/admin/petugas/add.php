<h3 class="main--title">Tambah Petugas</h3>
<form method="post" action="index.php?page=App/admin/petugas/create.php">
    <!-- <div class="inputBx">
        <label for="kode_petugas">kode petugas :</label>
        <input type="text" id="kode_petugas" name="kode_petugas" placeholder="Kode Petugas">
    </div> -->
    <div class="inputBx">
        <label for="Username">Name :</label>
        <input type="text" id="name" name="name" placeholder="Name">
    </div>
    <div class='inputBx'>
        <label for="Gmail">Gmail :</label>
        <input type="email" id="email" name="email" placeholder="admin@gamail.com">
    </div>
    <div class="inputBx">
        <label for="password">Password :</label>
        <input type="password" id="password" name="password" placeholder="password">
    </div>
    <div class="inputBx">
        <label for="no_hp">no HP :</label>
        <input type="tel" id="no_hp" name="no_hp" 
        placeholder="Masukkan nomor HP" 
        pattern="^\+?[0-9\s\-]+$" 
        title="Masukkan nomor telepon yang valid (hanya angka, spasi, tanda +, atau -)" 
        required>
    </div>
    <div class="textareaBx">
        <label for="alamat">Alamat :</label>
        <textarea name="alamat" id="alamat" rows="7"></textarea>
    </div>
    <input type="submit" value="Edit" class="btn add">
</form>