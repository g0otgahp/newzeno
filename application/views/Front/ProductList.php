<span>
  <div class="col-md-9">
    <ul class="breadcrumb">
    <li><a href="<?php echo SITE_URL('Home'); ?>" class="colorTagA">หน้าแรก</a></li>
        <?php if (!empty($CateSelect)): ?>
          <li><a href="<?php echo SITE_URL('Home/CategoryHome/'.$GroupSelect[0]['categroupId']); ?>" class="colorTagA"><?php echo $GroupSelect[0]['categroupName'] ?> </a></li>
          <li><?php echo $CateSelect[0]['cateName'] ?></li>
        <?php else: ?>
          <li><?php echo $GroupSelect[0]['categroupName'] ?></li>
        <?php endif; ?>
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
              <div class="col-md-4">
                <a  class="img-card" href="<?php echo SITE_URL('Product/ProductDetail/'.$list['categroupId']."/".$list['cateId']."/".$list['productId']); ?>">
                  <img src="<?php echo BASE_URL('uploads/Products/'.$list['productImg']); ?>" style="height:150px; width:240px;"/>
                </a>
              </div>
              <div class="col-md-6">
                <h3><?php echo $list['productName'] ?></h3>
                <p>
                  <?php echo $list['productSubdetail1'] ?>
                </p>
                <p>
                  <?php echo $list['productSubdetail2'] ?>
                </p>
                <p>
                  <?php echo $list['productSubdetail3'] ?>
                </p>
                <p>
                  <?php echo $list['productSubdetail4'] ?>
                </p>
                <p>
                  <?php echo $list['productSubdetail5'] ?>
                </p>
                <p>
                  <?php echo $list['productSubdetail6'] ?>
                </p>
                <br class="clr"/>
              </div>
              <hr class="soft"/>
              <div class="col-md-2 alignR">
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

              <div class="col-xs-12 col-md-4 col-sm-6" style="padding-left:5px;">
                <div class="card">
                  <a class="img-card" href="<?php echo SITE_URL('Product/ProductDetail/'.$block['categroupId']."/".$block['cateId']."/".$block['productId']); ?>">
                    <img src="<?php echo BASE_URL('uploads/Products/'.$block['productImg']); ?>" style=" margin:auto; display:block;"/>
                  </a>
                  <div class="card-content">
                    <h4>
                      <?php echo  $block['productName'] ?>
                    </h4>
                    <p>
                      <?php echo $block['productSubdetail1'] ?>
                    </p>
                    <p>
                      <?php echo $block['productSubdetail2'] ?>
                    </p>
                    <p>
                      <?php echo $block['productSubdetail3'] ?>
                    </p>
                    <p>
                      <?php echo $block['productSubdetail4'] ?>
                    </p>
                    <p>
                      <?php echo $block['productSubdetail5'] ?>
                    </p>
                    <p>
                      <?php echo $block['productSubdetail6'] ?>
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
              <?php if ($i == 3): ?>
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
