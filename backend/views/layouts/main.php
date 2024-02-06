<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Sejarah</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>dist/css/AdminLTE.min.css">
  <!-- jQuery -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">


  <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>S</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin Sejarah</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">Admin</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                  <p>
                    Admin
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Admin</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
          <li class="active treeview">
            <a href="<?= Url::toRoute(['/']) ?>">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
          </li>
          <li class="treeview">
          <li <?= Yii::$app->controller->id == 'berita' ? 'class=active' : '' ?>>
            <a class="menu-link" href="<?= Url::toRoute(['/berita']) ?>">
              <i class="fa fa-newspaper-o"></i>
              <span>Berita</span>
            </a>
          </li>
          <li <?= Yii::$app->controller->id == 'pengumuman' ? 'class=active' : '' ?>>
            <a class="menu-link" href="<?= Url::toRoute(['/pengumuman']) ?>">
              <i class="fa fa-bullhorn"></i>
              <span>Pengumuman</span>
            </a>
          </li>
          <li <?= Yii::$app->controller->id == 'dosen' ? 'class=active' : '' ?>>
            <a href="<?= Url::toRoute(['/dosen']) ?>">
              <i class="fa fa-th"></i> <span>Staff</span>
            </a>
          </li>
          <li class="treeview">
          <li <?= Yii::$app->controller->id == 'prestasi' ? 'class=active' : '' ?>>
            <a href="<?= Url::toRoute(['/prestasi']) ?>">
              <i class="fa fa-graduation-cap"></i>
              <span>Prestasi</span>
            </a>
          </li>
          <li <?= Yii::$app->controller->id == 'peneltian' ? 'class=active' : '' ?>>
            <a href="<?= Url::toRoute(['/peneltian']) ?>">
              <i class="fa fa-pie-chart"></i>
              <span>Penelitian</span>
            </a>
          </li>
          <li class="treeview">
          <li <?= Yii::$app->controller->id == 'fasilitasl' ? 'class=active' : '' ?>>
            <a href="<?= Url::toRoute(['/fasilitasl']) ?>">
              <i class="fa fa-laptop"></i>
              <span>Fasilitas</span>
            </a>
          </li>
          <li class="treeview">
          <li <?= Yii::$app->controller->id == 'jurnal' ? 'class=active' : '' ?>>
            <a href="<?= Url::toRoute(['/jurnal']) ?>">
              <i class="fa fa-edit"></i> <span>Jurnal</span>
            </a>
          </li>
          <li class="treeview">
          <li <?= Yii::$app->controller->id == 'kerjasama' ? 'class=active' : '' ?>>
            <a href="<?= Url::toRoute(['/kerjasama']) ?>">
              <i class="fa fa-table"></i> <span>Kerjasama</span>
            </a>
          </li>
          <li class="treeview">
          <li <?= Yii::$app->controller->id == 'kriteria' ? 'class=active' : '' ?>>
            <a class="menu-link" href="<?= Url::toRoute(['/kriteria']) ?>">
              <i class="fa fa-files-o"></i>
              <span>Kriteria</span>
            </a>
          </li>
          <li <?= Yii::$app->controller->id == 'pkm' ? 'class=active' : '' ?>>
            <a class="menu-link" href="<?= Url::toRoute(['/pkm']) ?>">
              <i class="fa fa-university"></i>
              <span>PKM</span>
            </a>
          </li>
          <!-- <li <?= Yii::$app->controller->id == 'download' ? 'class=active' : '' ?>>
            <a href="<?= Url::toRoute(['/download']) ?>">
              <i class="fa fa-newspaper-o"></i> <span>download</span>
          </li> -->
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->


      <!-- Main content -->
      <section class="content">
        <?= $content ?>
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.0
      </div>
      <strong>Copyright &copy; 2024 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
          <h3 class="control-sidebar-heading">Recent Activity</h3>



        </div><!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
        <!-- Settings tab content -->

      </div>
    </aside><!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div><!-- ./wrapper -->

  <!-- jQuery 2.1.4 -->

  <!-- jQuery 2.1.4 -->
  <script src="<?= Yii::$app->getHomeUrl(); ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <!-- <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- DataTables -->
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.5 -->
  <script src="<?= Yii::$app->getHomeUrl(); ?>bootstrap/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="<?= Yii::$app->getHomeUrl(); ?>plugins/morris/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="<?= Yii::$app->getHomeUrl(); ?>plugins/sparkline/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="<?= Yii::$app->getHomeUrl(); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="<?= Yii::$app->getHomeUrl(); ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?= Yii::$app->getHomeUrl(); ?>plugins/datatables/jquery.dataTables.min.js"></script>

  <script src="<?= Yii::$app->getHomeUrl(); ?>plugins/datatables/dataTables.bootstrap.min.js"></script>
  <script src="<?= Yii::$app->getHomeUrl(); ?>plugins/datatables/dataTables.bootstrap.js"></script>
  <!-- SlimScroll -->

  <script src="<?= Yii::$app->getHomeUrl(); ?>plugins/knob/jquery.knob.js"></script>
  <!-- daterangepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
  <script src="<?= Yii::$app->getHomeUrl(); ?>plugins/daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="<?= Yii::$app->getHomeUrl(); ?>plugins/datepicker/bootstrap-datepicker.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="<?= Yii::$app->getHomeUrl(); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="<?= Yii::$app->getHomeUrl(); ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?= Yii::$app->getHomeUrl(); ?>plugins/fastclick/fastclick.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= Yii::$app->getHomeUrl(); ?>dist/js/app.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?= Yii::$app->getHomeUrl(); ?>dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= Yii::$app->getHomeUrl(); ?>dist/js/demo.js"></script>

  <script>
    $(function() {
      $("#example1").DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true, // Aktifkan pengurutan
        "info": true,
        "autoWidth": true
      });
    });
  </script>
  <!-- Pastikan jQuery sudah dimuat sebelum Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>


<?php $this->endPage();
