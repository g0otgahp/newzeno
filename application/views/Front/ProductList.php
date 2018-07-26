<span>
  <div class="span9">
    <!-- <h3> รายการสินค้า <small class="pull-right">
      <?php $num = count($Product); if ($num > 0): ?>
        <?php echo "พบ ".$num. " รายการ" ?>
      <?php else: ?>
        ไม่พบสินค้า
      <?php endif; ?> -->
    </small></h3>
    <div id="myTab" class="pull-right">
      <a href="#blockView" data-toggle="tab"><span class="btn btn-large"><i class="icon-th-large"></i></span></a>
      <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
    </div>
    <ul class="breadcrumb" style="margin-top:65px;">
      <li><a href="<?php echo SITE_URL('Home'); ?>">หน้าแรก</a> <span class="divider">/</span></li>
      <?php if (!empty($CateSelect)): ?>
        <li><a href="<?php echo SITE_URL('Home/CategoryHome/'.$GroupSelect[0]['categroupId']); ?>"><?php echo $GroupSelect[0]['categroupName'] ?> </a><span class="divider">/</span></li>
        <li class="active"><?php echo $CateSelect[0]['cateName'] ?></li>
      <?php else: ?>
        <li class="active"><?php echo $GroupSelect[0]['categroupName'] ?></li>
      <?php endif; ?>

    </ul>

    <!-- <h3> Products Name <small class="pull-right"> 40 Products are available </small></h3> -->
    <!-- <form class="form-horizontal span6">
    <div class="control-group">
    <label class="control-label alignL">Sort By </label>
    <select>
    <option>Priduct name A - Z</option>
    <option>Priduct name Z - A</option>
    <option>Priduct Stoke</option>
    <option>Price Lowest first</option>
  </select>
</div>
</form> -->
<?php $num = count($Product); if ($num > 0): ?>
  <div class="tab-content">
    <!-- Table Style -->
    <div class="tab-pane" id="listView">
      <!-- Start Loop -->
      <?php foreach ($Product as $list): ?>
        <div class="row">
          <div class="span2">
            <a  href="<?php echo SITE_URL('Product/ProductDetail/'.$list['categroupId']."/".$list['cateId']."/".$list['productId']); ?>">
            <img src="<?php echo BASE_URL('uploads/Products/'.$list['productImg']); ?>" style="height:150px; width:210px;"/>
          </a>
          </div>
          <div class="span4">
            <h3><?php echo $list['cateName']." - ".$list['productName'] ?></h3>
            <p>
              <?php echo $list['productSubdetail'] ?>
            </p>
            <br class="clr"/>
          </div>
          <hr class="soft"/>
          <div class="span3 alignR">
            <form class="form-horizontal qtyFrm">
              <h3>฿<?php echo number_format($list['productPrice']) ?></h3>
              <a  class="btn btn-small pull-right btn-primary" href="<?php echo SITE_URL('Product/ProductDetail/'.$list['categroupId']."/".$list['cateId']."/".$list['productId']); ?>">รายละเอียด</a>
            </form>
          </div>
        </div>
      <?php endforeach; ?>
      <!-- End Loop -->
    </div>
    <!-- End Table Style -->


    <!-- Block Style -->
    <div class="tab-pane  active" id="blockView">
      <ul class="thumbnails">
        <?php foreach ($Product as $block): ?>
          <!-- Start Loop -->
          <li class="span3">
            <div class="thumbnail">
              <a  href="<?php echo SITE_URL('Product/ProductDetail/'.$block['categroupId']."/".$block['cateId']."/".$block['productId']); ?>"><img src="<?php echo BASE_URL('uploads/Products/'.$block['productImg']); ?>" style="height:150px; width:210px;"/></a>
              <div class="caption">
                <h5><?php echo $block['cateName']." - ".$block['productName'] ?></h5>
                <p>
                  ฿<?php echo number_format($block['productPrice']) ?>
                </p>
                <h4 style="text-align:center">
                  <!-- <i class="icon-zoom-in"></i>
                  <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> -->
                  <a  class="btn btn-primary" href="<?php echo SITE_URL('Product/ProductDetail/'.$block['categroupId']."/".$block['cateId']."/".$block['productId']); ?>">รายละเอียด</a></h4>
                </div>
              </div>
            </li>
          <?php endforeach; ?>
          <!-- End Loop -->
        </ul>
        <!-- End Block Style -->
        <hr class="soft"/>
      </div>
    </div>

    <!-- <a href="compair.html" class="btn btn-large pull-right">Compair Product</a>
    <div class="pagination">
    <ul>
    <li><a href="#">&lsaquo;</a></li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">...</a></li>
    <li><a href="#">&rsaquo;</a></li>
  </ul>
</div>
<br class="clr"/>
</div> -->
<?php endif; ?>

</div>
</div>

</div>
</span>
