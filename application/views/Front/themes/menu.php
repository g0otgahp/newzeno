  <div class="container">
    <div class="row">
      <!-- Sidebar ================================================== -->
      <div id="sidebar" class="span3">
        <!-- <div class="well well-small"><a id="myCart" href="#"><img src="<?php echo BASE_URL()?>/assets/themes/images/ico-cart.png" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div> -->
        <ul id="sideManu" class="nav nav-tabs nav-stacked">

          <?php $i = 1; foreach ($Group as $ShowGroup): ?>
          <li class="subMenu">
            <a tabindex="-1" href="#sideMenu <?php echo $i ?>"><?php echo $ShowGroup['categroupName'] ?></a>
            <ul style="display:none">
              <!-- <ul> -->

              <?php $data = $this->db
              ->order_by('cateId','ASC')
              ->where('cateStatus',1)
              ->where('categroupId',$ShowGroup['categroupId'])
              ->get('category')
              ->result_array();
              ?>

              <?php foreach ($data as $CategoryShow): ?>
                <li><a href="<?php echo SITE_URL('Product/ShowProduct/'.$ShowGroup['categroupId']."/".$CategoryShow['cateId']); ?>"><?php echo $CategoryShow['cateName'] ?></a></li>
              <?php endforeach; ?>

            </ul>
          </li>
          <?php $i++; endforeach; ?>

          <!-- <?php foreach ($dataShow as $CategoryShow): ?>
            <li>
              <a href="<?php echo SITE_URL('Product'); ?>"><?php echo $CategoryShow['cateName'] ?></a>
            </li>

          <?php endforeach; ?> -->

          <!-- <li class="subMenu"><a> CLOTHES [840] </a>
          <ul style="display:none">
          <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Clothing (45)</a></li>
          <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Shoes (8)</a></li>
          <li><a href="products.html"><i class="icon-chevron-right"></i>Women's Hand Bags (5)</a></li>
          <li><a href="products.html"><i class="icon-chevron-right"></i>Men's Clothings  (45)</a></li>
          <li><a href="products.html"><i class="icon-chevron-right"></i>Men's Shoes (6)</a></li>
          <li><a href="products.html"><i class="icon-chevron-right"></i>Kids Clothing (5)</a></li>
          <li><a href="products.html"><i class="icon-chevron-right"></i>Kids Shoes (3)</a></li>
        </ul>
      </li>
      <li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
      <ul style="display:none">
      <li><a href="products.html"><i class="icon-chevron-right"></i>Angoves  (35)</a></li>
      <li><a href="products.html"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>
      <li><a href="products.html"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>
      <li><a href="products.html"><i class="icon-chevron-right"></i>Louis Bernard  (45)</a></li>
      <li><a href="products.html"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>
      <li><a href="products.html"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>
      <li><a href="products.html"><i class="icon-chevron-right"></i>Garden (3)</a></li>
      <li><a href="products.html"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>
    </ul>
  </li>
  <li><a href="products.html">HEALTH & BEAUTY [18]</a></li>
  <li><a href="products.html">SPORTS & LEISURE [58]</a></li>
  <li><a href="products.html">BOOKS & ENTERTAINMENTS [14]</a></li> -->
</ul>
<br/>
<!-- <div class="thumbnail">
<img src="<?php echo BASE_URL()?>/assets/themes/images/products/panasonic.jpg" alt="Bootshop panasonoc New camera"/>
<div class="caption">
<h5>Panasonic</h5>
<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
</div>
</div><br/>
<div class="thumbnail">
<img src="<?php echo BASE_URL()?>/assets/themes/images/products/kindle.png" title="Bootshop New Kindel" alt="Bootshop Kindel">
<div class="caption">
<h5>Kindle</h5>
<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
</div>
</div><br/> -->
<div class="thumbnail">
  <img src="<?php echo BASE_URL()?>/assets/Front/themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
  <div class="caption">
    <h5>ทางเลือกการชำระเงิน</h5>
  </div>
</div>
</div>
