<!-- Footer ================================================================== -->
<div id="footerSection">
  <div class="container" >
    <div class="row" style="margin:auto; display:block;">
      <?php  foreach ($TitleGroup as $Title): ?>
        <div class="col-md-2">
          <?php if (count($Title['group']) > 0): ?>
            <?php foreach ($Title['group'] as $footer): ?>
              <?php if (count($footer['category']) != 0): ?>
                <h4><?php echo $footer['categroupName'] ?></h4>
                <?php foreach ($footer['category'] as $catefooter): ?>
                  <a href="<?php echo SITE_URL('Product/ShowProduct/'.$footer['categroupId']."/".$catefooter['cateId']); ?>"><?php echo $catefooter['cateName'] ?></a>
                <?php endforeach; ?>
                <hr>
              <?php endif; ?>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
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

<!-- Imagw Zoom -->
<script src="<?php echo BASE_URL()?>assets/Front/plugin/ImageZoom/scripts/zoom-image.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL()?>assets/Front/plugin/ImageZoom/scripts/main.js" type="text/javascript"></script>


<!-- Gallery -->
<!-- <script src="<?php echo BASE_URL()?>assets/Front/Plugin/Gallery/js/vendor/highlight/highlight.pack.js"></script> -->
<!-- <script src="<?php echo BASE_URL()?>assets/Front/plugin/Gallery/dist/js/jquery.desoslide.min.js"></script>
<script src="<?php echo BASE_URL()?>assets/Front/plugin/Gallery/js/app/demo.js"></script> -->

<!-- Bootstrap DataTable -->
<script src="<?php echo BASE_URL()?>/assets/Back/datatable-bootstrap/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL()?>/assets/Back/datatable-bootstrap/dataTables.bootstrap.min.js" type="text/javascript"></script>

<!-- Tiny Slide -->
<script src="<?php echo BASE_URL()?>/assets/Front/plugin/Tinyslide/js/tinyslide.js" type="text/javascript"></script>

<script>

//Select
$(document).ready(function() {
  $('.select2-single').select2();
});

//dataTable
$(document).ready(function() {
  $('.dataTable').DataTable();
} );


// //Gallery
// $('#slideshow1').desoSlide({
//   thumbs: $('#slideshow_1_thumbs_1 li > a'),
//   auto: {
//     start: true
//   },
//   effect: 'side',
//   controls: {
//     keys: false
//   }
// });

//TinySlide
var tiny = $('#tiny').tiny().data('api_tiny');

</script>

<!-- Themes switcher section ============================================================================================= -->
</body>
</html>
