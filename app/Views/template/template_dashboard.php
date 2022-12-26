<?php

use App\Controllers\PetaController;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>SIGWEB</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="/Images/sigweb_logo_only.png">
  <!-- Pignose Calender -->
  <link href="/quixlab-master/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
  <!-- Chartist -->
  <link rel="stylesheet" href="/quixlab-master/plugins/chartist/css/chartist.min.css">
  <link rel="stylesheet" href="/quixlab-master/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
  <!-- Custom Stylesheet -->
  <link href="/quixlab-master/css/style.css" rel="stylesheet">
  <?= $this->renderSection('head'); ?>

  <style>
    html body div.content-body {
      min-height: 800px
      !important;
    }
  </style>

</head>

<body>

  <div id="preloader">
    <div class="loader">
      <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
      </svg>
    </div>
  </div>

  <div id="main-wrapper">
    <div class="nav-header">
      <div class="brand-logo">
        <a href="/">
          <b class="logo-abbr"><img src="/Images/sigweb_logo_only.png" height="19" width="21" alt=""> </b>
          <span class="logo-compact"><img src="/quixlab-master/images/logo-compact.png" alt=""></span>
          <span class="brand-title">
            <img src="/Images/sigweb_logo.png" alt="" height="30" width="150">
          </span>
        </a>
      </div>
    </div>

    <div class="header">
      <div class="header-content clearfix">
        <div class="nav-control">
          <div class="hamburger">
            <span class="toggle-icon"><i class="icon-menu"></i></span>
          </div>
        </div>
        <div class="header-right">
          <ul class="clearfix">
            <li class="icons dropdown d-none d-md-flex">
              <a href="javascript:void(0)" class="log-user" data-toggle="dropdown">
                <span>Developer</span> <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
              </a>
              <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                <div class="dropdown-content-body">
                  <ul>
                    <li><a href="javascript:void()"><img src="/Images/foto_dwi.png" height="30" width="30" alt="">&nbsp&nbsp Dwi</a></li>
                    <li><a href="javascript:void()"><img src="/Images/foto_ages.png" height="30" width="30" alt="">&nbsp&nbsp Ages</a></li>
                  </ul>
                </div>
              </div>
            </li>

            
          </ul>
        </div>
      </div>
    </div>

    <div class="nk-sidebar">
      <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
          <li class="mega-menu mega-menu-sm">
            <a href="<?= site_url("PetaController/index") ?>">
              <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Menu Halaman Peta</span>
            </a>
          </li>
          <li class="mega-menu mega-menu-sm">
            <a href="<?= site_url('KodeWilayah/index') ?>">
              <i class="icon-notebook menu-icon"></i><span class="nav-text">Kode Wilayah</span>
            </a>
          </li>
          <li class="mega-menu mega-menu-sm">
            <a href="<?= site_url('Data/index'); ?>">
              <i class="icon-note menu-icon"></i><span class="nav-text">Data</span>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Main Content Rendered -->
    <?= $this->renderSection('content'); ?>


    <div class="footer">
      <div class="copyright">
        <p>Copyright &copy; Dwi Kurniawan & Ages Mahesa <a href="<?= base_url('/'); ?>">SIGWEB</a> 2022</p>
      </div>
    </div>

  </div>


  <script src="/quixlab-master/plugins/common/common.min.js"></script>
  <script src="/quixlab-master/js/custom.min.js"></script>
  <script src="/quixlab-master/js/settings.js"></script>
  <script src="/quixlab-master/js/gleek.js"></script>
  <script src="/quixlab-master/js/styleSwitcher.js"></script>

  <!-- Chartjs -->
  <script src="/quixlab-master/plugins/chart.js/Chart.bundle.min.js"></script>
  <!-- Circle progress -->
  <script src="/quixlab-master/plugins/circle-progress/circle-progress.min.js"></script>
  <!-- Datamap -->
  <script src="/quixlab-master/plugins/d3v3/index.js"></script>
  <script src="/quixlab-master/plugins/topojson/topojson.min.js"></script>
  <script src="/quixlab-master/plugins/datamaps/datamaps.world.min.js"></script>
  <!-- Morrisjs -->
  <script src="/quixlab-master/plugins/raphael/raphael.min.js"></script>
  <script src="/quixlab-master/plugins/morris/morris.min.js"></script>
  <!-- Pignose Calender -->
  <script src="/quixlab-master/plugins/moment/moment.min.js"></script>
  <script src="/quixlab-master/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
  <!-- ChartistJS -->
  <script src="/quixlab-master/plugins/chartist/js/chartist.min.js"></script>
  <script src="/quixlab-master/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



  <script src="/quixlab-master/js/dashboard/dashboard-1.js"></script>
  <?= $this->renderSection('script'); ?>
</body>

</html>