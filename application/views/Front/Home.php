<span>
  <div class="span9">

    <!-- 1 -->
    <div class="well well-small">
      <h4>สินค้าใหม่ <small class="pull-right"></small></h4>
      <div class="row-fluid">
        <div id="featured" class="carousel slide">
          <div class="carousel-inner">
            <?php for ($i=1; $i < 3; $i++) {?>
              <?php if ($i == 1): ?>
                <div class="item active">
                <?php else: ?>
                  <div class="item">
                  <?php endif; ?>
                  <ul class="thumbnails">

                    <?php
                    $count = count($NewProduct);
                    for ($p=0; $p < $count; $p++) {?>
                      <li class="span3">
                        <div class="thumbnail">
                          <i class="tag"></i>
                          <a href="<?php echo SITE_URL('Product/ProductDetail/'.$NewProduct[$p]['categroupId']."/".$NewProduct[$p]['cateId']."/".$NewProduct[$p]['productId']); ?>">
                            <img src="<?php echo BASE_URL()?>/uploads/Products/<?php echo $NewProduct[$p]['productImg'] ?>" alt=""></a>
                            <div class="caption">
                              <h5><?php echo $NewProduct[$p]['productName'] ?></h5>
                              <h5><?php echo $NewProduct[$p]['cateName']?></h5>
                              <h4 align="center"><a class="btn btn-primary" href="product_details.html">รายละเอียด</a></h4>
                              </div>
                            </div>
                          </li>
                        <?php }?>
                      </ul>
                    </div>
                  <?php }?>
                </div>
                <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#featured" data-slide="next">›</a>
              </div>
            </div>
          </div>

          <?php if (count($Product) > 0): ?>
            <ul class="breadcrumb">
              <li >สินค้าแนะนำ</li>
            </ul>
            <div id="myTab" class="pull-right">
              <a href="#blockView" data-toggle="tab"><span class="btn btn-large"><i class="icon-th-large"></i></span></a>
              <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
            </div>
            <br class="clr"/>
            <div class="tab-content" style="margin-top:20px;">


              <!-- Table Style -->
              <div class="tab-pane" id="listView">
                <!-- Start Loop -->
                <?php foreach ($Product as $list): ?>
                  <div class="row">
                    <div class="span2">
                      <img src="<?php echo BASE_URL('uploads/Products/'.$list['productImg']); ?>" alt=""/>
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
                        <a class="btn btn-small pull-right btn-primary" href="<?php echo SITE_URL('Product/ProductDetail/'.$list['categroupId']."/".$list['cateId']."/".$list['productId']); ?>">รายละเอียด</a>
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
                        <a href="<?php echo SITE_URL('Product/ProductDetail/'.$block['categroupId']."/".$block['cateId']."/".$block['productId']); ?>"><img src="<?php echo BASE_URL('uploads/Products/'.$block['productImg']); ?>" alt=""/></a>
                        <div class="caption">
                          <h5><?php echo $block['cateName']." - ".$block['productName'] ?></h5>
                          <p>
                            ฿<?php echo number_format($block['productPrice']) ?>
                          </p>
                          <h4 style="text-align:center">
                            <a class="btn btn-primary" href="<?php echo SITE_URL('Product/ProductDetail/'.$block['categroupId']."/".$block['cateId']."/".$block['productId']); ?>">รายละเอียด</a></h4>
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

            <?php endif; ?>
          </div>
        </div>

      </div>
    </span>
