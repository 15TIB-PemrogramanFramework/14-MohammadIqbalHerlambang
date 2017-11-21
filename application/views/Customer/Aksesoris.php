
<?php $this->load->view('templates/header'); ?>
    <!-- Page Content -->
      <header class="masthead">
      <div class="container">
        <div class="intro-text">
          
          <div class="intro-heading text-uppercase">Aksesoris</div>
        </div>
      </div>
      </header>
      <br>
    <div class="container">
    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
        <h1 class="display-3"></h1>
       
      </header>

       
      <div class="row text-center">
      <?php foreach ($data_aksesoris as $key => $row) { ?>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <?php $encoded_image = base64_encode($row->gambar); echo '<img src="data:image/jpeg;base64,'.base64_decode($encoded_image).'" style="width:255px;height:300px;">';?>
            <div class="card-body">
              <h4 class="card-title"><?php echo $row->nama_aksesoris; ?></h4>
              <h4 class="card-title">Rp <?php echo $row->harga_aksesoris; ?></h4>
              <p class="card-text"><?php echo $row->jenis_aksesoris; ?></p>
            </div>
            <div class="card-footer">
              <?php echo anchor(site_url('Customer/tambah_pesanan/'.$row->id_aksesoris),
                '<i class="fa fa-shopping-cart" aria-hidden="true"> Pesan</i>',
                'class="btn btn-warning"');?>
            </div>
          </div>
        </div>
      <?php }; ?>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
   
<?php $this->load->view('templates/footer') ?>