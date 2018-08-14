<!-- Footer ================================================================== -->
<div id="footerSection">
  <div class="container" >
    <div class="row" style="margin:auto; display:block;">
      <div class="col-md-12">
      <div class="col-md-2" style="margin-right:3%;">
        <h4>Digital Signage</h4>
        <a href="#">Standard</a>
        <a href="#">Video Wall</a>
        <a href="#">Ultra Stretch</a>
        <a href="#">High Brightness</a>
        <a href="#">Interactive</a>
        <a href="#">Mirror</a>
        <a href="#">Transparent</a>
        <a href="#">Accessories</a>
        <hr>
        <h4>LED Signage</h4>
        <a href="#">Indoor</a>
        <a href="#">Outdoor</a>
        <hr>
        <h4>Commercial TV</h4>
        <a href="#">Hotel TV</a>
        <a href="#">TV Signage</a>
        <a href="#">Special</a>
        <a href="#">Accessories</a>
        <hr>
        <h4>OLED Signage</h4>
        <a href="#">In-glass Wallpaper</a>
        <a href="#">Video Wall</a>
        <a href="#">Wallpaper</a>
        <a href="#">Open Frame</a>
        <a href="#">Dual-view Curved Tiling</a>
        <a href="#">Dual-View Flat</a>
        <hr>
      </div>

      <div class="col-md-2" style="margin-right:3%;">
        <h4>Digital Signage</h4>
        <a href="#">Standard</a>
        <a href="#">Video Wall</a>
        <a href="#">Ultra Stretch</a>
        <a href="#">High Brightness</a>
        <a href="#">Interactive</a>
        <a href="#">Mirror</a>
        <a href="#">Transparent</a>
        <a href="#">Accessories</a>
        <hr>
        <h4>LED Signage</h4>
        <a href="#">Indoor</a>
        <a href="#">Outdoor</a>
        <hr>
        <h4>Commercial TV</h4>
        <a href="#">Hotel TV</a>
        <a href="#">TV Signage</a>
        <a href="#">Special</a>
        <a href="#">Accessories</a>
        <hr>
        <h4>OLED Signage</h4>
        <a href="#">In-glass Wallpaper</a>
        <a href="#">Video Wall</a>
        <a href="#">Wallpaper</a>
        <a href="#">Open Frame</a>
        <a href="#">Dual-view Curved Tiling</a>
        <a href="#">Dual-View Flat</a>
        <hr>
      </div>

      <div class="col-md-2" style="margin-right:3%;">
        <h4>Digital Signage</h4>
        <a href="#">Standard</a>
        <a href="#">Video Wall</a>
        <a href="#">Ultra Stretch</a>
        <a href="#">High Brightness</a>
        <a href="#">Interactive</a>
        <a href="#">Mirror</a>
        <a href="#">Transparent</a>
        <a href="#">Accessories</a>
        <hr>
        <h4>LED Signage</h4>
        <a href="#">Indoor</a>
        <a href="#">Outdoor</a>
        <hr>
        <h4>Commercial TV</h4>
        <a href="#">Hotel TV</a>
        <a href="#">TV Signage</a>
        <a href="#">Special</a>
        <a href="#">Accessories</a>
        <hr>
        <h4>OLED Signage</h4>
        <a href="#">In-glass Wallpaper</a>
        <a href="#">Video Wall</a>
        <a href="#">Wallpaper</a>
        <a href="#">Open Frame</a>
        <a href="#">Dual-view Curved Tiling</a>
        <a href="#">Dual-View Flat</a>
        <hr>
      </div>

      <div class="col-md-2" style="margin-right:3%;">
        <h4>Digital Signage</h4>
        <a href="#">Standard</a>
        <a href="#">Video Wall</a>
        <a href="#">Ultra Stretch</a>
        <a href="#">High Brightness</a>
        <a href="#">Interactive</a>
        <a href="#">Mirror</a>
        <a href="#">Transparent</a>
        <a href="#">Accessories</a>
        <hr>
        <h4>LED Signage</h4>
        <a href="#">Indoor</a>
        <a href="#">Outdoor</a>
        <hr>
        <h4>Commercial TV</h4>
        <a href="#">Hotel TV</a>
        <a href="#">TV Signage</a>
        <a href="#">Special</a>
        <a href="#">Accessories</a>
        <hr>
        <h4>OLED Signage</h4>
        <a href="#">In-glass Wallpaper</a>
        <a href="#">Video Wall</a>
        <a href="#">Wallpaper</a>
        <a href="#">Open Frame</a>
        <a href="#">Dual-view Curved Tiling</a>
        <a href="#">Dual-View Flat</a>
        <hr>
      </div>



      <?php if (count($Group) > 0): ?>
        <?php foreach ($Group as $footer): ?>
          <?php if (count($footer['category']) != 0): ?>
            <div class="col-md-2" style="margin-right:3%;">
              <h4><?php echo $footer['categroupName'] ?></h4>
              <?php foreach ($footer['category'] as $catefooter): ?>
                <a href="<?php echo SITE_URL('Product/ShowProduct/'.$footer['categroupId']."/".$catefooter['cateId']); ?>"><?php echo $catefooter['cateName'] ?></a>
              <?php endforeach; ?>
              <hr>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php endif; ?>

    </div>
  </div>
    <p class="pull-right">&copy; Newzeno</p>
  </div><!-- Container End -->
</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
<script src="<?php echo BASE_URL()?>/assets/Front/themes/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL()?>/assets/Front/themes/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL()?>/assets/Front/themes/js/google-code-prettify/prettify.js"></script>

<script src="<?php echo BASE_URL()?>/assets/Front/themes/js/bootshop.js"></script>
<script src="<?php echo BASE_URL()?>/assets/Front/src/js/lightbox.js"></script>

<!-- <script src="<?php echo BASE_URL()?>/assets/Front/themes/js/jquery.lightbox-0.5.js"></script> -->

<!-- Bootstrap DataTable -->
<script src="<?php echo BASE_URL()?>/assets/Back/datatable-bootstrap/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL()?>/assets/Back/datatable-bootstrap/dataTables.bootstrap.min.js" type="text/javascript"></script>


<!-- Select2 -->
<script src="<?php echo BASE_URL()?>assets/Back/select2-4.0.6-rc.1/dist/js/select2.min.js" type="text/javascript"></script>

<script>

//Select
$(document).ready(function() {
  $('.select2-single').select2();
});

//dataTable
$(document).ready(function() {
  $('.dataTable').DataTable();
} );

</script>

<!-- Themes switcher section ============================================================================================= -->
</body>
</html>
