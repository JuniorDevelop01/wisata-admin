<h3 class="main--title">Daftar Tempat wisata</h3>
<div class="table">
  <table>
    <thead>
      <tr>
        <td>No</td>
        <td>nama</td>
        <td>alamat</td>
        <td>harga_tiket</td>
        <td>Jam Operasional</td>
        <td>Gambar</td>
        <td>Aksi</td>
      </tr>
    </thead>
    <tbody>
      <?php 
      $sql = "SELECT * FROM wisata";
      $tmp_wisata = $conn->query($sql);
      $urut = 1;

      foreach($tmp_wisata as $wisata) {

      ?>
    <tr>
      <td>
        <?php echo $urut++?>
      </td>
      <td>
        <?php echo $wisata['nama'] ?>
      </td>
      <td>
        <?php echo $wisata['alamat'] ?>
      </td>
      <td>
        <?php echo $wisata['harga_tiket'] ?>
      </td>
      <td>
        <?php echo $wisata['jam_operasional'] ?>
      </td>
      <td>
        <img src="<?php echo $wisata['gambar']; ?>" alt="Gambar Wisata" style="width: 100px; height: auto;">
      </td>
      <td>
        <a href="index.php?page=App/admin/wisata/edit.php&id=<?php echo $wisata['id_wisata']?>" class="btn edit">Ubah</a>
        <a href="index.php?page=App/admin/wisata/delete.php&id=<?php echo $wisata['id_wisata']?>" onclick="return confirm('anda yakin !!!');" class="btn delete">Hapus</a>
      </td>
    </tr>
        <?php } ?>
    </tbody>
  </table>
  <a href="index.php?page=App/admin/wisata/add.php" class="btn add">Tambah</a>

</div>