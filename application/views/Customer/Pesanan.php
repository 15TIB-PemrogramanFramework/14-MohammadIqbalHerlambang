<?php $this->load->view('templates/header'); ?>
    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3">Pesanan</h1>
       
      </header>

      <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama Makanan</th>
                  <th>Harga Makanan</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <?php foreach ($data_pesanan as $key => $row){ ?>
              <tbody>
                <tr>
                  <td><?php echo $row->nama_pesanan; ?></td>
                  <td><?php echo $row->harga_pesanan; ?></td>
                  <td><?php echo anchor(site_url('Customer/delete1/'.$row->id_pesanan),
                  '<i class="fa fa-remove" aria-hidden="true"></i>',
                  'class="btn btn-danger"'); ?></td>
                </tr>
              </tbody>
              <?php }; ?>
            </table>          
          </div>


    <!-- Footer -->
   
<?php $this->load->view('templates/footer') ?>