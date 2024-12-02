<h3 class="main--title">Daftar Masjid</h3>

<div class="table">
  <table>
    <thead>
      <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>gambar</td>
        <td>Aksi</td>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM masjid";
      $masjid = $conn->query($sql);
      $urut = 1;

      foreach($masjid as $msjd) {
      
      ?>
    <tr>
      <td>
        <?php echo $urut++ ?>
      </td>
      <td>
        <?php echo $msjd['nama'] ?>
      </td>
      <td>
        <?php echo $msjd['alamat'] ?>
      </td>
      <td>
      <img src="<?php echo $msjd['gambar']; ?>" alt="Gambar Wisata" style="width: 100px; height: auto;">
      </td>
      <td>
        <a href="index.php?page=App/admin/masjid/edit.php&id=<?php echo $msjd['id_masjid']?>" class="btn edit">Ubah</a>
        <a href="index.php?page=App/admin/masjid/delete.php&id=<?php echo $msjd['id_masjid']?>" onclick="return confirm('anda yakin !!!');" class="btn delete">Hapus</a>
      </td>
    
    </tr>
        <?php } ?>
    </tbody>
  </table>
  <a href="index.php?page=App/admin/masjid/add.php" class="btn add">Tambah</a>
</div>