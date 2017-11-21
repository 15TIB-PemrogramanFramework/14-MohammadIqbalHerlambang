<?php $this->load->view('templates/header'); ?>
    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3">Pesanan</h1>
       
      </header>

      <div class="table-responsive">
        <form action="<?php echo $action; ?>" method="post">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama Makanan</th>
                  <td><input type="text" name="nama_pesanan" value="<?php echo $nama_pesanan;?>" placeholder="Nama Makanan" required></td>
                </tr>
                <tr>
                  <th>Harga Makanan</th>
                  <td><input type="text" name="harga_pesanan" value="<?php echo $harga_pesanan;?>" placeholder="Harga Makanan" required></td>
                </tr>
                <tr>
                  <th colspan="2"><button type="submit" class="btn btn-primary"><?php echo $button;?></button></th>
                </tr>
              </thead>
            </table>  
            </form>        
          </div>


    <!-- Footer -->
   
<?php $this->load->view('templates/footer') ?>