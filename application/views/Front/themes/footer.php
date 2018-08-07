<!-- Footer ================================================================== -->
<div id="footerSection">
  <div class="container" >
    <div class="row" style="margin:auto; display:block;">
      <?php if (count($Group) > 0): ?>
        <?php foreach ($Group as $footer): ?>
          <div class="span3">
            <h4><?php echo $footer['categroupName'] ?></h4>
            <?php foreach ($footer['category'] as $catefooter): ?>
              <a href="<?php echo SITE_URL('Product/ShowProduct/'.$footer['categroupId']."/".$catefooter['cateId']); ?>"><?php echo $catefooter['cateName'] ?></a>
            <?php endforeach; ?>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>

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
