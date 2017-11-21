<?php $this->load->view('Admin/header'); ?>

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Table  Aksesoris</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Data Table Aksesoris</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID Aksesoris</th>
                  <th>Nama Aksesoris</th>
                  <th>Gambar</th>
                  <th>Harga Aksesoris</th>
                  <th>Jenis Aksesoris</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <?php foreach ($data_aksesoris as $key => $row){ ?>
              <tbody>
                <tr>
                  <td><?php echo $row->id_aksesoris; ?></td>
                  <td><?php echo $row->nama_aksesoris; ?></td>
                  <td><?php
                  $encoded_image = base64_encode($row->gambar);
                  echo '<img src="data:image/jpeg;base64,'.base64_decode($encoded_image).'" style="width:200px;height:180px;">';
                  ?></td>
                  <td><?php echo $row->harga_aksesoris; ?></td>
                  <td><?php echo $row->jenis_aksesoris; ?></td>
                  <td><?php echo anchor(site_url('Aksesoris/edit/'.$row->id_aksesoris),
                  '<i class="fa fa-pencil" aria-hidden="true"></i>',
                  'class="btn btn-warning"');?></td>
                  <td><?php echo anchor(site_url('Aksesoris/delete/'.$row->id_aksesoris),
                  '<i class="fa fa-remove" aria-hidden="true"></i>',
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