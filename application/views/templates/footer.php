 <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Herla Website <?php $datestring = '%d - %m - %Y | %h:%i %a';
$time = time();
echo mdate($datestring, $time);?></p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets2/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
 <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets_home/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets_home/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('assets_home/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Contact form JavaScript -->
    <script src="<?php echo base_url('assets_home/js/jqBootstrapValidation.js'); ?>"></script>
    <script src="<?php echo base_url('assets_home/js/contact_me.js'); ?>"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url('assets_home/js/agency.min.js'); ?>"></script>

  </body>

</html>