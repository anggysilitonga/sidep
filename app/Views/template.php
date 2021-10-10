<!DOCTYPE html>
<html lang="en">
<?php $session = session() ?>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

  <title>SIDEP | Simulasi Perhitungan DPK</title>

  <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
  <link href="<?= base_url() ?>/assets/fontawesome/css/font-awesome.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/gentelella/vendors/fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/gentelella/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
  <link href="<?= base_url() ?>/assets/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/gentelella/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="<?= base_url()?>/Home/index" class="site_title"><i class="fa fa-university"></i></i> <span style="font-size: .6em">Simulasi Perhitungan DPK</span></a>
          </div>

          <div class="clearfix"></div>

          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="<?= base_url() ?>/assets/gentelella/images/logo1.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome, <?= $session->get('username')?> </span>
            </div>
          </div>

          <br />

          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>Menu Utama</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-laptop"></i> Simulasi </i> <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?= base_url() ?>/tabungan">Tabungan</a></li>
                    <li><a href="<?= base_url() ?>/deposito">Deposito</a></li>
                    <li><a href="<?= base_url() ?>/giro">Giro</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-info-circle"></i> Informasi DPK </i> <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?= base_url() ?>/tabungan/info">Tabungan</a></li>
                    <li><a href="<?= base_url() ?>/deposito/info">Deposito</a></li>
                    <li><a href="<?= base_url() ?>/giro/info">Giro</a></li>
                  </ul>
                </li>
                <?php if ($session->get('type') == 'admin' ):?>
                    <li><a><i class="fa fa-money"></i>Suku Bunga</i> <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="<?= base_url() ?>/btabungan">Bunga Tabungan</a></li>
                        <li><a href="<?= base_url() ?>/bdeposito">Bunga Deposito</a></li>
                        <li><a href="<?= base_url() ?>/bgiro">Jasa Giro</a></li> 
                      </ul>
                   </li>
                <?php endif?>

                
                </ul>
              </div>
            </div>

          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
        </div>
      </div>

      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <?php if ($session->get('type') == 'admin' ):?>
            <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?= base_url() ?>/assets/gentelella/images/user.png" alt=""><?=$session->get('name')?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    
                    <a class="dropdown-item" href="<?=base_url()?>/Home/Logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
  
                
              </ul>
            </nav>
          <?php endif; ?>
        </div>
      </div>
      <div class="right_col" role="main">
        <?= $this->renderSection('content') ?>
      </div>
      <footer>
        <div class="pull-right">
          Simulasi Perhitungan Bunga Simpanan
        </div>
        <div class="clearfix"></div>
      </footer>
    </div>
  </div>

  <script src="<?= base_url() ?>/assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url() ?>/assets/gentelella/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>/assets/gentelella/vendors/fastclick/lib/fastclick.js"></script>
  <script src="<?= base_url() ?>/assets/gentelella/vendors/nprogress/nprogress.js"></script>
  <script src="<?= base_url() ?>/assets/gentelella/vendors/Chart.js/dist/Chart.min.js"></script>
  <script src="<?= base_url() ?>/assets/gentelella/vendors/gauge.js/dist/gauge.min.js"></script>
  <script src="<?= base_url() ?>/assets/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <script src="<?= base_url() ?>/assets/gentelella/vendors/iCheck/icheck.min.js"></script>
  <script src="<?= base_url() ?>/assets/gentelella/vendors/skycons/skycons.js"></script>
  <script src="<?= base_url() ?>/assets/gentelella/vendors/Flot/jquery.flot.js"></script>
  <script src="<?= base_url() ?>/assets/gentelella/vendors/Flot/jquery.flot.pie.js"></script>
  <script src="<?= base_url() ?>/assets/gentelella/vendors/Flot/jquery.flot.time.js"></script>
  <script src="<?= base_url() ?>/assets/gentelella/vendors/Flot/jquery.flot.stack.js"></script>
  <script src="<?= base_url() ?>/assets/gentelella/vendors/Flot/jquery.flot.resize.js"></script>
  <script src="<?= base_url() ?>/assets/gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
  <script src="<?= base_url() ?>/assets/gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
  <script src="<?= base_url() ?>/assets/gentelella/vendors/flot.curvedlines/curvedLines.js"></script>
  <script src="<?= base_url() ?>/assets/gentelella/vendors/DateJS/build/date.js"></script>
  <script src="<?= base_url() ?>/assets/gentelella/vendors/jqvmap/dist/jquery.vmap.js"></script>
  <script src="<?= base_url() ?>/assets/gentelella/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="<?= base_url() ?>/assets/gentelella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
  <script src="<?= base_url() ?>/assets/gentelella/vendors/moment/min/moment.min.js"></script>
  <script src="<?= base_url() ?>/assets/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>


  <script src="<?= base_url() ?>/assets/gentelella/build/js/custom.min.js"></script>

</body>

</html>