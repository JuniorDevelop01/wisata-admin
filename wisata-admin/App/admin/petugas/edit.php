<div class="contentHeader">
    <h2>Petugas &gt; Edit</h2>
</div>

<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM `petugas` WHERE id_petugas=$id";
    $petugas = $conn->query($sql);
    $tugas = mysqli_fetch_array($petugas);
?>

<form method="post" action="index.php?page=App/admin/petugas/update.php">
<div class="inputBx">
        <label for="kode_petugas">kode petugas :</label>
        <input type="text" id="id" name="id" value="<?php echo $tugas['id_petugas']?>">
    </div>
    <div class="inputBx">
        <label for="name">Name :</label>
        <input type="text" id="name" name="name" value="<?php echo $tugas['nama'] ?>">
    </div>
    <div class='inputBx'>
        <label for="Gmail">Gmail :</label>
        <input type="email" id="email" name="email" value="<?php echo $tugas['email']?>">
    </div>
    <div class="inputBx">
        <label for="password">Password :</label>
        <input type="password" id="password" name="password" value="<?php echo $tugas['password'] ?>">
    </div>
    <div class="inputBx">
        <label for="no_hp">no HP :</label>
        <input type="tel" id="no_hp" name="no_hp" value="<?php echo $tugas['no_hp']?>">
    </div>              
    <div class="textareaBx">
        <label for="alamat">Alamat :</label>
        <textarea name="alamat" id="alamat" rows="7" > <?php echo $tugas['alamat']?> </textarea>
    </div>
    <input type="submit" value="ubah" class="btn add">
</form>


