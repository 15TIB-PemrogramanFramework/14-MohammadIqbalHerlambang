<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>pupPET</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('assets_admin/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets_admin/vendor/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url('assets_admin/vendor/datatables/dataTables.bootstrap4.css'); ?>" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets_admin/css/sb-admin.css'); ?>" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo base_url('Home');?>">pupPET</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo base_url('Admin');?>">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Customer Table</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo base_url('Aksesoris');?>">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Aksesoris Table</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo base_url('Aksesoris/tambah');?>">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tambah Aksesoris</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo base_url('Makanan');?>">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Makanan Table</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo base_url('Makanan/tambah');?>">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tambah Makanan</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Login/logout_admin');?>">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>