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
        #tombol {
          min-width: 100%;
          min-height: 20%;
          background-color: #124173;
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
        footer {
            background-color: #124173;
            color: white;
            padding: 20px 0;
        }
        .footer-icon {
            font-size: 20px;
            margin-right: 10px;
        }
        .footer-text {
            margin-bottom: 0;
        }
        a {
            text-decoration: none;
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
              <a class="nav-link" href="/tatakelola">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/keanggotaan">Keanggotaan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/kegiatan">Kegiatan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/sekretariat">Sekretariat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/keuangan">Keuangan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/arsip">Arsip</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/apmi">Tentang</a>
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
          <h2 class="section2-title" style="font-size: 40px"><strong>Formulir Kesekretaritan</strong></h2>
          <p class="section2-text" style="font-size: 30px">
            Bila kamu membutuhkan dokumen/layanan seperti: <br>
            <ol class="list-group list-group-numbered list-group-flush">
              <li class="list-group-item border-0 py-0"><strong>Surat Keterangan Anggota Aktif</strong></li>
              <li class="list-group-item border-0 py-0"><strong>Surat Tugas</strong></li>
              <li class="list-group-item border-0 py-0"><strong>Peminjaman Zoom</strong></li>
            </ol>
            Kamu dapat mengisi formulir kesekretaritan untuk mengajukan dokumen/layanan tersebut.
            Setelah mengisi formulis segera hubungi Sekretaris untuk segera ditindaklanjuti!
          </p>
          <button type="button" class="btn btn-outline-primary " id="button" style="width: 100%">Isi Formulir</button>
        </div>
      </div>
    </section>


    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p class="footer-text">
                </i>asosiasipenelitimudaindonesia@gmail.com | +62878 9790 4966 | Jakarta
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
