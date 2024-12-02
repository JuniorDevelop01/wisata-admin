<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/logo/&-2.png"/>

    <!-- Animate Style -->
    <link rel="stylesheet" href="h=mtps://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- Font Awesome CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Jonsuh Hamburger -->
    <link rel="stylesheet" href="dist/css/hamburgers.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="dist/css/style.css" />
    <title>ACEH PARIWISATA</title>
  </head>
  <body id="home">
    <!-- Header -->
    <section class="header">
      <div class="container">
        <div class="navbar">
          <div class="logo-nav">

          </div>
          <ul class="menu">
            <li>
              <a href="#home"> <i class="fa-solid fa-house"></i>Home</a>
            </li>
            <li>
              <a href="#services"><i class="fa-solid fa-star"></i>About Aceh</a>
            </li>
            <li>
              <a href="#best"><i class="fa-solid fa-list"></i>Tempat Wisata</a>
            </li>
            <li>
              <a href="#gallery"><i class="fa-solid fa-image"></i>Makanan Khas</a>
            </li>
            <li>
              <a href="Hotel.php"><i class="fa-solid fa-image"></i>Penginapan</a>
            </li>
            <li>
              <a href="Masjid.php"><i class="fa-solid fa-image"></i>Masjid</a>
            </li>
          </ul>

          <button class="hamburger hamburger--spin" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </div>

        <div class="hero">
          <h1 class="animate__animated animate__fadeInUp animate__delay-3s">
            <span id="t1">Beautiful of Aceh</span> <br/>
            <span id="t2">Pariwisata Guide</span>
          </h1>
          <div class="hero-jargon">
            <div class="animate__animated animate__fadeInUp animate__delay-1s">
              <p><span>Aceh</span> adalah sebuah provinsi di ujung barat Indonesia yang kaya akan sejarah dan memilik banyak tempat indah untuk berpariwisata</p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- Header -->




     <!-- Services -->
     <section class="services" id="services">
      <div class="container">
        <div class="services-box">
          <div class="box">
            <h1 data-aos="fade-up">About Aceh</h1>
            <p data-aos="fade-up" data-aos-delay="200">Fakta-fakta unik tentang Aceh</p>
          </div>
          <div class="box">
            <div class="service" data-aos="fade-down" data-aos-delay="400">
              <span>1</span>
              <p>
                Aceh adalah salah satu daerah penghasil kopi terbaik di dunia, terutama kopi Gayo dari dataran tinggi Gayo. Kopi ini memiliki cita rasa khas yang dikenal hingga mancanegara.
                </p>
            </div>
            <div class="service" data-aos="fade-up" data-aos-delay="400">
              <span>2</span>
              <p>Aceh dikenal sebagai pintu gerbang penyebaran Islam di Indonesia. Kerajaan Samudera Pasai di Aceh adalah kerajaan Islam pertama di Nusantara, yang berdiri pada abad ke-13. Kota Banda Aceh juga memiliki Masjid Raya Baiturrahman, simbol keagungan Islam di Aceh.</p>
            </div>
            <div class="service" data-aos="fade-down" data-aos-delay="400">
              <span>3</span>
              <p>Aceh memiliki pantai-pantai indah dengan panorama alam yang eksotis, seperti Pantai Iboih di Pulau Weh, yang terkenal dengan air lautnya yang jernih dan cocok untuk snorkeling serta diving.</p>
            </div>
            <div class="service" data-aos="fade-up" data-aos-delay="400">
              <span>4</span>
              <p>Aceh memiliki banyak budaya unik yang menjadi daya tarik wisata, seperti Tari Saman yang diakui UNESCO sebagai Warisan Budaya Takbenda Dunia.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services -->
    <?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "db_kebudayaan_pariwisata");

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
    }

    // Query untuk mengambil data wisata
    $sql = "SELECT * FROM wisata";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // Mulai bagian HTML
    ?>
    <!-- Best Destination -->
    <section class="best-destination" id="best">
      <div class="container">
        <div class="best-destination-box">
          <div class="box">
            <h1 data-aos="fade-up">Tempat Wisata</h1>
            <p data-aos="fade-up" data-aos-delay="200">Berikut ini Destinasi pilihan Terbaik yang dapat dikunjungi.</p>
          </div>
          <div class="box" data-aos="fade-up" data-aos-delay="400">
            <!-- Swiper -->
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <?php
                            // Loop data dari database
                            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="swiper-slide">
                <img src="http://localhost/wisata-admin/wisata-admin/<?php echo htmlspecialchars($row['gambar']); ?>" alt="<?php echo htmlspecialchars($row['nama']); ?>" />

                  <div class="loc">
                    <h3><?php echo htmlspecialchars($row['nama']); ?></h3>
                    <p><i class="fa-solid fa-location-dot"></i> <?php echo htmlspecialchars($row['alamat']); ?></p>
                  </div>
                </div>
                <?php
                  }
                  ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
} else {
    echo "<p>Belum ada data wisata tersedia.</p>";
    }

    // Tutup koneksi
    $conn->close();
    ?>


    <!-- Best Destination -->



    <!-- Gallery -->
    <?php
    // Koneksi ke database
    $conn = new mysqli("localhost", "root", "", "db_kebudayaan_pariwisata");

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Query untuk mengambil data kuliner
    $sql = "SELECT * FROM kuliner";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mulai bagian HTML
        ?>
        <section class="gallery" id="gallery">
            <div class="container">
                <div class="gallery-box">
                    <div class="box">
                        <h1 data-aos="fade-up">Makanan Khas</h1>
                        <p data-aos="fade-up" data-aos-delay="200">Berikut adalah preview makanan khas Aceh</p>
                    </div>
                    <div class="box">
                        <?php
                        // Loop data dari database
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <a href="http://localhost/wisata-admin/wisata-admin/<?php echo htmlspecialchars($row['gambar']); ?>" target="_blank" data-aos="fade-in" data-aos-delay="400">
                                <img src="http://localhost/wisata-admin/wisata-admin/<?php echo htmlspecialchars($row['gambar']); ?>" alt="<?php echo htmlspecialchars($row['nama']); ?>" />
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
    } else {
        echo "<p>Belum ada data makanan khas tersedia.</p>";
    }

    // Tutup koneksi
    $conn->close();
    ?>

    <!-- Gallery -->

    <!-- About Us -->

    <!-- About Us -->

    <!-- Footer -->
    <section class="footer">
      <div class="container">
        <div class="footer-box">
          <p>&copy; Copyright by <span>AMATSUKI</span> 2024, All Right Reserved.</p>
        </div>
      </div>
    </section>
    <!-- Footer -->

    <!-- Pre Loader -->
    <div class="loader">
      <img src="assets/loader/loader.svg" alt="loading.io" />
    </div>
    <!-- Pre Loader -->

    <!-- JS -->
    <script src="dist/js/script.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          type: "fraction",
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          992: {
            slidesPerView: 3,
            spaceBetween: 20,
          },
          1280: {
            slidesPerView: 4,
            spaceBetween: 20,
          },
        },
      });
    </script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
