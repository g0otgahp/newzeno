<!-- Footer ================================================================== -->
<div id="footerSection">
  <div class="container">
    <div class="row">
      <div class="span3">
        <?php foreach ($Group as $footer): ?>
          <h4><?php echo $footer['categroupName'] ?></h4>
          <?php foreach ($footer['category'] as $catefooter): ?>
          <a href="<?php echo SITE_URL('Product/ShowProduct/'.$footer['categroupId']."/".$catefooter['cateId']); ?>"><?php echo $catefooter['cateName'] ?></a>
        <?php endforeach; ?>
        <?php endforeach; ?>
      </div>
        <!-- <h5>ACCOUNT</h5>
        <a href="login.html">YOUR ACCOUNT</a>
        <a href="login.html">PERSONAL INFORMATION</a>
        <a href="login.html">ADDRESSES</a>
        <a href="login.html">DISCOUNT</a>
        <a href="login.html">ORDER HISTORY</a> -->
      <!-- <div class="span3">
        <h5>INFORMATION</h5>
        <a href="contact.html">CONTACT</a>
        <a href="register.html">REGISTRATION</a>
        <a href="legal_notice.html">LEGAL NOTICE</a>
        <a href="tac.html">TERMS AND CONDITIONS</a>
        <a href="faq.html">FAQ</a>
      </div>
      <div class="span3">
        <h5>OUR OFFERS</h5>
        <a href="#">NEW PRODUCTS</a>
        <a href="#">TOP SELLERS</a>
        <a href="special_offer.html">SPECIAL OFFERS</a>
        <a href="#">MANUFACTURERS</a>
        <a href="#">SUPPLIERS</a>
      </div> -->
      <div id="socialMedia" class="span3 pull-right">
        <h5>SOCIAL MEDIA </h5>
        <a href="#"><img width="60" height="60" src="<?php echo BASE_URL()?>/assets/Front/themes/images/facebook.png" title="facebook" alt="facebook"/></a>
        <a href="#"><img width="60" height="60" src="<?php echo BASE_URL()?>/assets/Front/themes/images/youtube.png" title="youtube" alt="youtube"/></a>
        <a href="#"><img width="60" height="60" src="<?php echo BASE_URL()?>/assets/Front/themes/images/line.png" title="line" alt="line"/></a>
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
