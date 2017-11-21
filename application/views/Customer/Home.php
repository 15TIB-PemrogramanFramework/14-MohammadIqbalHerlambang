<?php $this->load->view('templates/header'); ?>
      <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-heading text-uppercase">Welcome to Our PETSHOP</div>
        </div>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Content</h2>
            
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" href="<?php echo site_url('Customer/Aksesoris') ?>">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="assets_home/img/portfolio/1.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <a class="portfolio-link" href="<?php echo site_url('Customer/Aksesoris') ?>"><h4>Illustration</h4>
            </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" href="<?php echo site_url('Customer/Makanan') ?>">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="assets_home/img/portfolio/2.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <a class="portfolio-link" href="<?php echo site_url('Customer/Makanan') ?>"><h4>Explore</h4></a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" href="<?php echo site_url('Customer/Pesanan') ?>">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="assets_home/img/portfolio/3.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <a class="portfolio-link" href="<?php echo site_url('Customer/Pesanan') ?>"><h4>Adore</h4></a>
            </div>
          </div>
        </div>
      </div>
    </section>

  

    <!-- Clients -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="assets_home/img/logos/envato.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="assets_home/img/logos/designmodo.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="assets_home/img/logos/themeforest.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="assets_home/img/logos/creative-market.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
   
<?php $this->load->view('templates/footer') ?>