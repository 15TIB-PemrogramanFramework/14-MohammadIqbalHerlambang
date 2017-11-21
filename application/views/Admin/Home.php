<?php $this->load->view('Admin/header'); ?>

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Table  Customer</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Data Table Customer</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID Customer</th>
                  <th>Nama Customer</th>
                  <th>Password Customer</th>
                  <th>No.Telp Customer</th>
                  <th>Alamat Customer</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <?php foreach ($customer as $key => $row){ ?>
              <tbody>
                <tr>
                  <td><?php echo $row->id_customer; ?></td>
                  <td><?php echo $row->nama_customer; ?></td>
                  <td><?php echo $row->password_customer; ?></td>
                  <td><?php echo $row->notelp_customer; ?></td>
                  <td><?php echo $row->alamat_customer; ?></td>
                  <td><?php  echo anchor(site_url('Customer/delete/'.$row->id_customer),
                  '<i class="fa fa-trash"></i>',
                  'class="btn btn-danger"'); ?></td>
                </tr>
              </tbody>
              <?php }; ?>
            </table>          
          </div>
        </div>
        <div class="card-footer small text-muted">Updated </div>
      </div>
    </div>
    
    <?php $this->load->view('Admin/footer'); ?>