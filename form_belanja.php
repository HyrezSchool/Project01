<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Belanja</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="fixed-sidebar.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="class_pasien.php" class="nav-link">Project 01</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="fixed-sidebar.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Project UTS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="fixed-sidebar.html" class="d-block">Restu Hidayatullah</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tugas Praktikum
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="array_buah.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 1 - Array</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="form_belanja.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 2 - Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="artikel1.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 3 - Startup</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tugas4_persegipanjang.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 4 - Kalkulator</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="class_dispenser.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 5 - Dispenser</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Project
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="class_pasien.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kalkulator BMI</p>
                  </a>
                </a>
              </li>
            </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
<div class="row" style="padding:10px">
  <div class="col-8">
      <h4><div class="shadow p-2 mb-3 bg-body rounded">Form Belanja</div></h4>
      <hr>
    <form method="POST" action="form_belanja.php" >
        <div class="form-group row">
            <label for="customer" class="col-4 col-form-label">Customer</label> 
            <div class="col-8">
            <input id="customer" name="customer" placeholder="Customer Name" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Choose Your Product</label> 
            <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="RAM 16GB"> 
                <label for="produk_0" class="custom-control-label">RAM 16GB</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="HDD Sumsang 1TB"> 
                <label for="produk_1" class="custom-control-label">HDD Sumsang 1TB</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Flashdisk 16GB"> 
                <label for="produk_2" class="custom-control-label">Flashdisk 16GB</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_3" type="radio" class="custom-control-input" value="SSD Sumsang 1TB"> 
                <label for="produk_3" class="custom-control-label">SSD Sumsang 1TB</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_4" type="radio" class="custom-control-input" value="MESIN CUCI"> 
                <label for="produk_4" class="custom-control-label">PC Gaming Case</label>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Amount</label> 
            <div class="col-8">
            <input id="jumlah" name="jumlah" placeholder="Amount" type="text" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <input type="submit" class="btn btn-primary" value="Purchase"/>
            </div>
        </div>
    </form>
  </div>
  <div class="col-4">
  <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">Price List</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">RAM 16GB : $100</th>

    </tr>
    <tr>
      <th scope="row">HDD Sumsang 1TB : $40</th>
    </tr>
    <tr>
      <th scope="row">Flashdisk 16GB : $10</th>
    </tr>
    <tr>
      <th scope="row">SSD Sumsang 1TB : $149</th>
    </tr>
    <tr>
      <th scope="row">PC Gaming Case : $27</th>
    </tr>
  </tbody>
  <thead class="table-primary">
    <tr>
      <th scope="col">Limited Prices!</th>

    </tr>
  </thead>
</table>

  </div>
</div>
<hr>
<div class="col-4">
<div class="shadow p-2 mb-4 bg-body rounded">Your Order</div>

  </div>
</fieldset>
<?php
    $proses = $_POST["proses"];
    $customer = $_POST["customer"];
    $produk = $_POST["produk"];
    $jumlah = $_POST["jumlah"];

    switch ($produk) {
      case 'RAM 16GB':
        $harga = 100;
        $harga = $harga * $jumlah;
        echo "Costumer Name : " .$customer;
        echo "<br> Your Product : " .$produk;
        echo "<br> Buy Amount : " .$jumlah;
        echo "<br> Total : $ " .number_format($harga,0,',','.') . ",-";
        break;

      case 'HDD Sumsang 1TB':
        $harga = 40;
        $harga = $harga * $jumlah;
        echo "Costumer Name : " .$customer;
        echo "<br> Your Product : " .$produk;
        echo "<br> Buy Amount : " .$jumlah;
        echo "<br> Total : $ " .number_format($harga,0,',','.') . ",-";
        break;
        
      case 'Flashdisk 16GB':
        $harga = 10;
        $harga = $harga * $jumlah;
        echo "Costumer Name : " .$customer;
        echo "<br> Your Product : " .$produk;
        echo "<br> Buy Amount : " .$jumlah;
        echo "<br> Total : $ " .number_format($harga,0,',','.') . ",-";
        break;
          
      case 'SSD Sumsang 1TB':
        $harga = 149;
        $harga = $harga * $jumlah;
        echo "Costumer Name : " .$customer;
        echo "<br> Your Product : " .$produk;
        echo "<br> Buy Amount : " .$jumlah;
        echo "<br> Total : $ " .number_format($harga,0,',','.') . ",-";
        break;
      case 'PC Gaming Case':
        $harga = 27;
        $harga = $harga * $jumlah;
        echo "Costumer Name : " .$customer;
        echo "<br> Your Product : " .$produk;
        echo "<br> Buy Amount : " .$jumlah;
        echo "<br> Total : $ " .number_format($harga,0,',','.') . ",-";
        break;
        default:
    }
    ?>
          </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
