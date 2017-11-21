<?php $this->load->view('Admin/header'); ?>

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Edit Makanan</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i>Table Edit Makanan</div>
        <div class="card-body">
          <div class="table-responsive">
            <form action="<?php echo $action; ?>" method="post">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama Makanan</th>
                  <td>
                    <input type="text" name="nama_makanan" value="<?php echo $nama_makanan; ?>" placeholder="Nama Makanan" required>
                  </td>
                </tr>
                <tr>
                  <th>Gambar</th>
                  <td>
                    <input type="file" name="gambar" required>
                  </td>
                </tr>
                <tr>
                  <th>Harga Makanan</th>
                  <td>
                    <input type="text" name="harga_makanan" value="<?php echo $harga_makanan; ?>" placeholder="Harga Makanan" required>
                  </td>
                </tr>
                <tr>
                  <th>Jenis Makanan</th>
                  <td>
                    <input type="text" name="jenis_makanan" value="<?php echo $jenis_makanan; ?>" placeholder="Jenis Makanan" required>
                    <input type="hidden" name="id_makanan" value="<?php echo $id_makanan; ?>">
                  </td>
                </tr>
                <tr>
                  <td colspan="2"><button type="submit" class="btn btn-primary"><?php echo $button; ?></button></td>
                </tr>
              </thead>
            </table> 
            </form>         
          </div>
        </div>
        <div class="card-footer small text-muted">Updated </div>
      </div>
    </div>
    
    <?php $this->load->view('Admin/footer'); ?>