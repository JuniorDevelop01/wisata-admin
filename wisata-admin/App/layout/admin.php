<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aplikasi Wisata</title>
    <!-- my css -->
    <link rel="stylesheet" href="asset/css/style.css" />
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  </head>
  <body>
    <div class="sidebar">
      <div class="logo">
        <i class="fa-solid fa-mountain-city" style="font-size: 50px;"></i>
        <p>Sistem Informasi Kebudayaan dan Pariwisata Aceh</p>
      </div>
      <ul class="menu">
        <li class="">
          <a href="index.php?page=App/admin/dasboard/index.php">
            <i class="fa-solid fa-house"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="index.php?page=App/admin/petugas/index.php">
            <i class="fas fa-user"></i>
            <span>Petugas</span>
          </a>
        </li>
        <li>
          <a href="index.php?page=App/admin/wisata/index.php">
            <i class="fa-solid fa-tree-city"></i>
            <span>Wisata</span>
          </a>
        </li>
        <li>
          <a href="index.php?page=App/admin/kuliner/index.php">
            <i class="fa-solid fa-utensils"></i>
            <span>Kuliner</span>
          </a>
        </li>
        <li>
          <a href="index.php?page=App/admin/hotel/index.php">
            <i class="fa-solid fa-hotel"></i>
            <span>Hotel</span>
          </a>
        </li>
        <li>
          <a href="index.php?page=App/admin/masjid/index.php">
            <i class="fa-solid fa-mosque"></i>
            <span>Masjid</span>
          </a>
        </li>
        <li class="infoApp">
          <a href="index.php?page=App/admin/infoApp/index.php">
            <i class="fa-solid fa-circle-info"></i>
            <span>Info App</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="main--content">
      <div class="header--wrapper">
        <div class="header--title">
          <span style="color: black;">Aplikasi Sistem Informasi Kebudayaan dan Pariwisata Aceh</span>
          <h2 style="color:cornflowerblue;">Kebudayaan & Parawisata</h2>
        </div>
        <!-- <div class="user--info">
          <div class="search--box">
            <i class="fa-solid fa-search"></i>
            <input type="text" placeholder="search" />
          </div>
        </div> -->
      </div>

      <div class="card--container">
      <?php 
        include $_GET['page'];
      ?>
      </div>
    </div>
  </body>
</html>
