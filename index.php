<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Schedule</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/style3.css">

</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LOGO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Form Regist</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Jadwal Dokter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
    <a href="#" class="login-button">Login</a>
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-doctor">
                <div class="card-body">
                    <img src="doctor1.jpg" alt="Doctor">
                    <div class="card-info">
                        <h5 class="card-title">Dr. John Doe</h5>
                        <p class="card-text">Cardiologist</p>
                        <p class="schedule">Mon-Fri: 9 AM - 5 PM</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-doctor">
                <div class="card-body">
                    <img src="doctor2.jpg" alt="Doctor">
                    <div class="card-info">
                        <h5 class="card-title">Dr. Jane Smith</h5>
                        <p class="card-text">Pediatrician</p>
                        <p class="schedule">Tue-Thu: 10 AM - 3 PM</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-doctor">
                <div class="card-body">
                    <img src="doctor3.jpg" alt="Doctor">
                    <div class="card-info">
                        <h5 class="card-title">Dr. Alice Brown</h5>
                        <p class="card-text">Dentist</p>
                        <p class="schedule">Mon-Wed: 1 PM - 6 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="home">
        <h2>Informasi Klinik</h2>
        <p>Selamat datang di Klinik XYZ, pusat layanan kesehatan terdepan yang menyediakan perawatan medis berkualitas tinggi bagi masyarakat. Klinik kami memiliki tim dokter dan tenaga medis profesional yang berkomitmen untuk memberikan pelayanan terbaik. Kami juga dilengkapi dengan fasilitas modern dan layanan farmasi yang lengkap.</p>
        <p>Kami menawarkan berbagai layanan kesehatan, mulai dari pemeriksaan umum, layanan spesialis, hingga konsultasi kesehatan. Klinik XYZ juga didukung oleh teknologi terbaru dalam diagnosa medis untuk memastikan akurasi hasil pemeriksaan dan pengobatan yang tepat.</p>
        <p><strong>Jam Operasional:</strong></p>
        <ul>
            <li>Senin - Jumat: 08.00 - 17.00</li>
            <li>Sabtu: 08.00 - 14.00</li>
            <li>Minggu: Tutup</li>
        </ul>
        <p><strong>Lokasi:</strong> Jalan Sehat No. 123, Jakarta</p>
        <p><strong>Telepon:</strong> (021) 1234567</p>
    </section>

    <section id="services">
    <h2>Layanan Kami</h2>
    <div class="service-grid">
        <div class="service-item">
            <img src="img/pemeriksaan.jpeg" alt="Pemeriksaan Umum" width="250">
            <h3>Pemeriksaan Umum</h3>
            <p>Layanan pemeriksaan umum oleh dokter berpengalaman untuk segala usia.</p>
        </div>
        <div class="service-item">
            <img src="img/dokter.jpeg" alt="Spesialis Kesehatan" width="300">
            <h3>Layanan Spesialis</h3>
            <p>Konsultasi dengan dokter spesialis untuk kebutuhan kesehatan khusus.</p>
        </div>
        <div class="service-item">
            <img src="img/farmasi.jpeg" alt="Layanan Farmasi" width="300">
            <h3>Layanan Farmasi</h3>
            <p>Tersedia obat-obatan lengkap dan konsultasi penggunaan obat dengan apoteker.</p>
        </div>
    </div>
</section>


    <footer>
        <p>&copy; 2024 Klinik XYZ</p>
    </footer>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
