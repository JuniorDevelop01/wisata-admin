<h3 class="main--title">petugas</h3>
<div class="table">
  <table>
    <thead>
      <tr>
        <td>NO.</td>
        <td>id</td>
        <td>Name</td>
        <td>Email</td>
        <td>password</td>
        <td>no HP</td>
        <td>Alamat</td>
        <td>Aksi</td>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM petugas";
      $petugas = $conn->query($sql);
      $urut = 1;

      foreach($petugas as $tugas) {

      ?>
    <tr>
      <td>
        <?php echo $urut++ ?>
      </td>
      <td>
        <?php echo $tugas['id_petugas'] ?>
      </td>
      <td>
        <?php echo $tugas['nama'] ?>
      </td>
      <td>
        <?php echo $tugas['email'] ?>
      </td>
      <td>
        <?php echo $tugas['password'] ?>
      </td>
      <td>
        <?php echo $tugas['no_hp'] ?>
      </td>
      <td>
        <?php echo $tugas['alamat'] ?>
      </td>
      <td>
        <a href="index.php?page=App/admin/petugas/edit.php&id=<?php echo $tugas['id_petugas']?>" class="btn edit">Ubah</a>
        <a href="index.php?page=App/admin/petugas/delete.php&id=<?php echo $tugas['id_petugas']?>" onclick="return confirm('anda yakin !!!');" class="btn delete">Hapus</a>
      </td>
    
    </tr>
    <?php } ?>

    </tbody>
  </table>
  <a href="index.php?page=App/admin/petugas/add.php" class="btn add">Tambah</a>

</div>