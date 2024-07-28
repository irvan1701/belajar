<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .icon-item {
            text-align: center;
            margin: 20px;
        }
        .icon-item i {
            font-size: 50px;
            color: #124173;
        }
        .icon-item p {
            margin-top: 10px;
            color: #124173;
            font-weight: bold;
        }
    </style>
  </head>
  <body>
    <section id="section1">
        <h1 id="text-1">Management APMI</h1>
    </section>

    <section id="section2" class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <img src="{{ asset('/assets/1.png') }}" class="section2-img">
        </div>
        <div class="col-md-8">
          <h2 class="section2-title">Apa itu Sistem Tata Kelola?</h2>
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
        <h2>Portal Manajemen APMI</h2>
        <div class="icon-container">
            <div class="icon-item">
                <i class="bi bi-person-badge"></i>
                <p>Keanggotaan</p>
            </div>
            <div class="icon-item">
                <i class="bi bi-calendar-event"></i>
                <p>Agenda Kegiatan</p>
            </div>
            <div class="icon-item">
                <i class="bi bi-people"></i>
                <p>Kemitraan</p>
            </div>
            <div class="icon-item">
                <i class="bi bi-file-earmark-text"></i>
                <p>Sekretariat</p>
            </div>
            <div class="icon-item">
                <i class="bi bi-currency-dollar"></i>
                <p>Keuangan</p>
            </div>
            <div class="icon-item">
                <i class="bi bi-folder"></i>
                <p>Arsip</p>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
