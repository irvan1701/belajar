<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asosiasi Peneliti Muda Indonesia</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/bg/APMI.png">
    {{-- line icon --}}
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets\css/styleside.css">
</head>

<body>
    


    <div class="wrapper">
      <!-- sidebar -->
      <aside id="sidebar">
        <div class="d-flex">
            <button class="toggle-btn" type="button">
                <img src="assets\images\bg\APMI.png" alt="APMI" width="35" height="35">
            </button>
            <div class="sidebar-logo">
                <a href="#">APMI</a>
            </div>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a href="index.html" class="sidebar-link">
                  <i class="lni lni-display-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="Table.html" class="sidebar-link">
                    <i class="lni lni-agenda"></i>
                    <span>Absensi</span>
                </a>
            </li>
            <li class="sidebar-item">
              <a href="DataAslab.html" class="sidebar-link">
                  <i class="lni lni-user"></i>
                  <span>Data Aslab</span>
              </a>
          </li>
          <li class="sidebar-item">
            <a href="index.html" class="sidebar-link">
                <i class="lni lni-calendar"></i>
                <span>Data Peminjaman</span>
            </a>
        </li>
        </ul>
        
        <div class="sidebar-footer">
            <a href="logout" class="sidebar-link">
                <i class="lni lni-exit"></i>
                <span>Logout</span>
            </a>
        </div>
    </aside>
        <div class="container-fluid">
            @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="assets\js/scriptside.js"></script>
</body>

</html>


