<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        #section1 {
            min-height: 30vh;
            background-color: #124173;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #text-1 {
            color: aliceblue;
        }
        #section2 {
            padding: 40px 0;
        }
        #portal {
            color: #124173;
            font-weight: bold;
        }
        .section2-img {
            width: 100%;
            max-width: 300px;
        }
        .section2-title {
            color: #124173;
            font-weight: bold;
        }
        .section2-text {
            color: #333;
            text-align: justify;
        }
        #section3 {
            padding: 40px 0;
            text-align: center;
        }
        .icon-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .card-custom {
            background-color: #124173;
            color: white;
            width: 10rem;
            margin: 10px;
        }
        .card-custom .bi {
            font-size: 30px;
        }
        .card-custom .card-text {
            margin-top: 5px;
            font-weight: bold;
        }
        .navbar-dark .navbar-nav .nav-link {
            color: rgb(255, 255, 255);
            font-size: 20px;
        }
        .navbar-dark .navbar-nav .nav-link:hover {
            color: rgba(255, 255, 255, 0.541);
        }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('/assets/images/bg/APMI.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
          Sistem Tata Kelola APMI
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#tatakelola">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Keanggotaan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kegiatan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sekretariat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Keuangan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Arsip</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Tentang</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Sections -->
    <section id="section1">
        <h1 id="text-1"><strong>#MembumikanPenelitian</strong></h1>
    </section>

    <section id="section2" class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <img src="{{ asset('/assets/1.png') }}" class="section2-img">
        </div>
        <div class="col-md-8">
          <h2 class="section2-title"><strong>Apa itu Sistem Tata Kelola?</strong></h2>
          <p class="section2-text">
            Setiap komunitas memerlukan sistem yang baik dalam pelaksanaannya. APMI menerapkan sistem Tata Kelola yang diadaptasi dari prinsip good organization governance (GOG). Adapun lima pilar utama GOG yaitu transparency (transparansi), accountability (akuntabilitas), responsibility (responsibilitas), independence (kebebasan), dan fairness (keadilan).
            <br>
            <br>
            Sistem Tata Kelola ini dipadukan menjadi satu portal manajemen yang mana seluruh anggota APMI diwajibkan untuk menggunakan portal website ini untuk mengakses, menginput data, melihat agenda, dan hal-hal lainnya yang berkaitan. Secara garis besar, portal ini dapat diakses untuk keanggotaan, agenda kegiatan, kemitraan, secretariat, keuangan, dan arsip.
          </p>
        </div>
      </div>
    </section>

    <section id="section3" class="container">
        <h1 id="portal">Portal Manajemen APMI</h1>
        <div class="icon-container">
            <div class="card card-custom text-center">
                <div class="card-body">
                  <i class="bi bi-person-badge"></i>
                  <p class="card-text">Keanggotaan</p>
                </div>
              </div>
              <div class="card card-custom text-center">
                <div class="card-body">
                    <i class="bi bi-people"></i>
                    <p class="card-text">Kemitraan</p>
                </div>
              </div>

              <div class="card card-custom text-center">
                <div class="card-body">
                    <i class="bi bi-calendar-event"></i>
                    <p class="card-text">Agenda Kegiatan</p>
                </div>
              </div>

              <div class="card card-custom text-center">
                <div class="card-body">
                    <i class="bi bi-file-earmark-text"></i>
                    <p class="card-text">Sekretariat</p>
                </div>
              </div>

              <div class="card card-custom text-center">
                <div class="card-body">
                    <i class="bi bi-currency-dollar"></i>
                    <p class="card-text">Keuangan</p>
                </div>
              </div>
              <div class="card card-custom text-center">
                <div class="card-body">
                    <i class="bi bi-folder"></i>
                    <p class="card-text">Arsip</p>    
                </div>
              </div>
        </div>
    </section>

    <section id="section2" class="container">
        <div class="row align-items-center">
          <div class="col-md-4">
            <img src="{{ asset('/assets/images/bg/APMI.png') }}" class="section2-img">
          </div>
          <div class="col-md-8">
            <h2 class="section2-title"><strong>Apa itu APMI?</strong></h2>
            <p class="section2-text">
                Asosiasi Peneliti Muda Indonesia (APMI) adalah wadah berbentuk komunitas yang menaungi seluruh generasi muda yang memiliki minat dan bakat di bidang penelitian. APMI memiliki tujuan untuk membumikan penelitian di seluruh tanah air melalui berbagai program. Di kepengurusan tahun 2024 ini, APMI memiliki 74 anggota yang berasal dari berbagai daerah di Indonesia.
            </p>
          </div>
        </div>
      </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
