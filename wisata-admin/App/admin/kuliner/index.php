<h3 class="main--title">Daftar makanan Daerah</h3>
<div class="table">
  <table>
    <thead>
      <tr>
        <td>No</td>
        <td>nama</td>
        <td>Asal</td>
        <td>Gambar</td>
        <td>Deskripsi</td>
        <td>Aksi</td>
      </tr>
    </thead>
    <tbody>
      <?php 
      $sql = "SELECT * FROM kuliner";
      $kuliner_daerah = $conn->query($sql);
      $urut = 1;

      foreach($kuliner_daerah as $kuliner) {

      ?>
    <tr>
      <td>
        <?php echo $urut++?>
      </td>
      <td>
        <?php echo $kuliner['nama'] ?>
      </td>
      <td>
        <?php echo $kuliner['asal_daerah'] ?>
      </td>
      <td>
        <img src="<?php echo $kuliner['gambar']; ?>" alt="Gambar Wisata" style="width: 100px; height: auto;">
      </td>
      <td>
        <?php echo $kuliner['deskripsi'] ?>
      </td>
      <td>
        <a href="index.php?page=App/admin/kuliner/edit.php&id=<?php echo $kuliner['id_kuliner']?>" class="btn edit">Ubah</a>
        <a href="index.php?page=App/admin/kuliner/delete.php&id=<?php echo $kuliner['id_kuliner']?>" onclick="return confirm('anda yakin !!!');" class="btn delete">Hapus</a>
      </td>
         
    </tr>
        <?php } ?>
    </tbody>
  </table>
  <a href="index.php?page=App/admin/kuliner/add.php" class="btn add">Tambah</a>

</div>