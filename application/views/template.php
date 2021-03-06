<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shards Dashboard Lite - Free Bootstrap Admin Template – DesignRevision</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.0.0" href="<?php echo base_url(); ?>/assets/styles/shards-dashboards.1.0.0.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/styles/extras.1.0.0.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/styles/vendor/main.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </head>
  <body class="h-100">
    <div class="container-fluid bg-white">
        <div class="row">
            <main class="main-content col-lg-12 col-md-12 col-sm-12 p-0">
                <div class="main-navbar nav-up">
                  <div class="container p-0">
                    <!-- Main Navbar -->
                    <nav class="navbar align-items-stretch navbar-light  flex-md-nowrap p-0">
                      <a class="navbar-brand" href="#" style="line-height: 25px;">
                        <div class="d-table m-auto">
                          <img id="main-logo" class="d-inline-block align-top mr-1 ml-3" style="max-width: 25px;" src="<?php echo base_url(); ?>/assets/images/ub.png" alt="Shards Dashboard">
                          <span class="d-none d-md-inline ml-1 text-white">FEB UB</span>
                        </div>
                      </a>
                     
                      <ul class="navbar-nav flex-row  ml-auto">
                        <li class="nav-item dropdown text-white">
                          <a class="nav-link text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle mr-2" src="<?php echo base_url(); ?>/assets/images/avatars/0.jpg" alt="User Avatar"> <span class="d-none d-md-inline-block text-white">Mahasiswa Pintar</span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-small text-white">
                            <a class="dropdown-item" href="edit-user-profile.html"><i class="material-icons"></i> Edit Password</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#">
                              <i class="material-icons text-danger"></i> Logout </a>
                          </div>
                        </li>
                      </ul>
                      <nav class="nav">
                        <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center " data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                          <i class="material-icons text-white"></i>
                        </a>
                      </nav>
                    </nav>
                  </div> <!-- / .container -->
                </div> <!-- / .main-navbar -->
                <div class="header-navbar collapse d-lg-flex p-0 nav-down ">
                  <div class="container">
                    <div class="row">
                      <div class="col">
                        <ul class="nav  border-0 flex-column flex-lg-row ">
                          <li class="nav-item">
                            <a href="home.html" class="nav-link  text-white"><i class="material-icons">toc</i> Jadwal Kuliah</a>
                          </li>
                          <li class="nav-item">
                            <a href="agenda.html" class="nav-link  text-white"><i class="material-icons">event</i> Agenda</a>
                          </li>
                          <li class="nav-item">
                            <a href="ruangan.html" class="nav-link  text-white"><i class="material-icons">picture_in_picture</i> Ruangan</a>
                          </li>
                          <li class="nav-item ">
                              <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button">
                                <span><i class="material-icons">view_module</i>Sarana & Prasarana</span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-small">
                              <a href="peminjaman_rutin.html" class="dropdown-item">Ruang Rutin</a>
                              <a href="peminjaman_non_rutin.html" class="dropdown-item">Ruang Non Rutin</a>
                              <a href="inventaris.html" class="dropdown-item">Inventaris</a>
                            </li>
                          <li class="nav-item">
                            <a href="transaksi.html" class="nav-link text-white"><i class="material-icons"></i> Transaksi</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                <?php $this->load->view($main_view); ?>
                </div>
                <footer class="main-footer d-flex p-2 px-3 bg-white border-top bg-secondary">
                  <span class="copyright ml-auto my-auto mr-2 text-white">Copyright © 2018 MASMASE</span>
                </footer>
              </main>
        </div>
      </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/scripts/extras.1.0.0.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/scripts/shards-dashboards.1.0.0.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/scripts/app/app-blog-overview.1.0.0.js"></script>
  </body>
</html>