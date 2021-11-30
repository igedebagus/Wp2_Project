<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->helper('url');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="<?php echo base_url(); ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>BSI</b>Lab</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>BSI</b>LAB</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="<?php echo base_url(); ?>#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="<?php echo base_url(); ?>#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- <img src="<?php echo base_url(); ?>img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
                <span class="hidden-xs">Admin</span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="<?php echo base_url(); ?>index.php/auth/logout" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <aside class="main-sidebar">
      <section class="sidebar">

        <ul class="sidebar-menu" data-widget="tree">
          <li>
            <a href="<?php echo base_url(); ?>index.php/dashboard">
              <i class="fa fa-th"></i> <span>Dashboard</span>
            </a>
          </li>
          <!-- <li class="treeview">
            <a href="<?php echo base_url(); ?>#">
              <i class="fa fa-dashboard"></i> <span>Registration</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url(); ?>informasi-user/penilaian.html"><i class="fa fa-circle-o"></i> Penilaian</a></li>
              <li><a href="<?php echo base_url(); ?>informasi-user/kehadiran.html"><i class="fa fa-circle-o"></i> Kehadiran</a></li>
              <li><a href="<?php echo base_url(); ?>informasi-user/uas.html"><i class="fa fa-circle-o"></i> UAS</a></li>
              <li><a href="<?php echo base_url(); ?>informasi-user/uts.html"><i class="fa fa-circle-o"></i> UTS</a></li>
            </ul>
          </li> -->
          <li>
            <a href="<?php echo base_url(); ?>index.php/profile">
              <i class="fa fa-th"></i> <span>My Profile</span>
            </a>
          </li>
        </ul>
      </section>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Profile
          <small>My Profile</small>
        </h1>
      </section>


    </div>

    <div class="control-sidebar-bg"></div>
  </div>

  <!-- jQuery 3 -->
  <script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url(); ?>bower_components/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo base_url(); ?>dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
</body>

</html>