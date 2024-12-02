<h3 class="main--title">Daftar Hotel</h3>

<div class="table">
  <table>
    <thead>
      <tr>
        <td>No</td>
        <td>Nama</td>
        <td>jam_operasional</td>
        <td>harga</td>
        <td>gambar</td>
        <td>Alamat</td>
        <td>Aksi</td>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM hotel";
      $hotel = $conn->query($sql);
      $urut = 1;

      foreach($hotel as $htl) {
      
      ?>
    <tr>
      <td>
        <?php echo $urut++ ?>
      </td>
      <td>
        <?php echo $htl['nama'] ?>
      </td>
      <td>
        <?php echo $htl['jam_operasional'] ?>
      </td>
      <td>
        <?php echo $htl['perkiraan_harga'] ?>
      </td>
      <td>
      <img src="<?php echo $htl['gambar']; ?>" alt="Gambar Wisata" style="width: 100px; height: auto;">
      </td>
      <td>
        <?php echo $htl['alamat'] ?>
      </td>
      <td>
        <a href="index.php?page=App/admin/hotel/edit.php&id=<?php echo $htl['id_hotel']?>" class="btn edit">Ubah</a>
        <a href="index.php?page=App/admin/hotel/delete.php&id=<?php echo $htl['id_hotel']?>" onclick="return confirm('anda yakin !!!');" class="btn delete">Hapus</a>
      </td>
    
    </tr>
        <?php } ?>
    </tbody>
  </table>
  <a href="index.php?page=App/admin/hotel/add.php" class="btn add">Tambah</a>
</div>