<span>
  <div class="container">
    <div class="row">
  <div class="col-md-12">
    <!-- <h3> รายการที่ค้นหา <small class="pull-right">
      <?php  if ($num > 0): ?>
        <?php echo "พบ ".$num. " รายการ" ?>
        <?php else: ?>
          ไม่พบสินค้า
      <?php endif; ?>
    </small></h3> -->
    <ul class="breadcrumb" style="padding-bottom:20px;">
        <li><a href="<?php echo SITE_URL('Home'); ?>">หน้าแรก</a></li>
        <li>รายการค้นหา</li>
      <div id="myTab" class="pull-right" >
        <a href="#blockView" data-toggle="tab" class="btn btn-xs btn-default"><i class="icon-th-large" style="margin-top:5px;"></i></a>
        <a href="#listView" data-toggle="tab" class="btn btn-xs btn-default"><i class="icon-list" style="margin-top:5px;"></i></a>
      </div>
    </ul>
    <?php $num = count($Product); if ($num > 0): ?>
      <div class="tab-content">

        <!-- Table Style -->
        <div class="tab-pane" id="listView">
          <!-- Start Loop -->
          <?php foreach ($Product as $list): ?>
            <div class="row">
              <div class="col-md-offset-1 col-md-2">
                <a  class="img-card" href="<?php echo SITE_URL('Product/ProductDetail/'.$list['categroupId']."/".$list['cateId']."/".$list['productId']); ?>">
                  <img src="<?php echo BASE_URL('uploads/Products/'.$list['productImg']); ?>" style="height:150px; width:240px;"/>
                </a>
              </div>
              <div class="col-md-4">
                <h3><?php echo $list['productName'] ?></h3>
                <p>
                  <?php echo $list['productSubdetail'] ?>
                </p>
                <br class="clr"/>
              </div>
              <hr class="soft"/>
              <div class="col-md-4 alignR">
                <form class="form-horizontal qtyFrm">
                  <h3>฿<?php echo number_format($list['productPrice']) ?></h3>
                  <a  class="btn btn-small pull-right btn-primary" href="<?php echo SITE_URL('Product/ProductDetail/'.$list['categroupId']."/".$list['cateId']."/".$list['productId']); ?>">รายละเอียด</a>
                </form>
              </div>
            </div>
          <?php endforeach; ?>          <!-- End Loop -->
        </div>
        <!-- End Table Style -->


        <!-- Block Style -->
        <div class="tab-pane  active" id="blockView">
          <ul class="thumbnails" style="margin:auto; display:block;">
            <?php $i = 1; foreach ($Product as $block): ?>
              <!-- Start Loop -->

              <div class="col-xs-12 col-md-3 col-sm-6" style="padding-left:5px;">
                <div class="card">
                  <a class="img-card" href="<?php echo SITE_URL('Product/ProductDetail/'.$block['categroupId']."/".$block['cateId']."/".$block['productId']); ?>">
                    <img src="<?php echo BASE_URL('uploads/Products/'.$block['productImg']); ?>" style=" margin:auto; display:block;"/>
                  </a>
                  <div class="card-content">
                    <h4>
                      <?php echo  $block['productName'] ?>
                    </h4>
                    <p style="font-size:11px;">
                      <?php echo $block['productSubdetail'] ?>
                    </p>
                  </div>
                  <div class="card-read-more">
                    <p class="btn btn-block">
                      ฿<b><?php echo number_format($block['productPrice']) ?></b>
                    </p>
                    <a href="<?php echo SITE_URL('Product/ProductDetail/'.$block['categroupId']."/".$block['cateId']."/".$block['productId']); ?>" class="btn btn-link btn-block">
                      รายละเอียด
                    </a>
                  </div>
                </div>
              </div>
              <?php if ($i == 4): ?>
              </ul>
              <div class="col-xs-12" style="padding-left:5px;">
              <hr class="soft"/>
            </div>
              <?php $i=0; endif; ?>
              <?php $i++; endforeach; ?>
              <!-- End Loop -->
              <!-- End Block Style -->
            </ul>
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
</div>

</span>
