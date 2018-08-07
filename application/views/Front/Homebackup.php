<span>
  <div class="span9">

    <!-- 1 -->
    <!-- <div class="well well-small"> -->
      <!-- <h4>สินค้าใหม่ <small class="pull-right"></small></h4>
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
                    for ($p=1; $p < 5; $p++) {?>
                      <li class="span3">
                        <div class="thumbnail">
                          <i class="tag"></i>
                          <a  href="<?php echo SITE_URL('Product/ProductDetail/'.$NewProduct[$p]['categroupId']."/".$NewProduct[$p]['cateId']."/".$NewProduct[$p]['productId']); ?>">
                            <img src="<?php echo BASE_URL()?>/uploads/Products/<?php echo $NewProduct[$p]['productImg'] ?>" style="height:150px; width:240px;"></a>
                            <div class="caption">
                              <h5><?php echo $NewProduct[$p]['productName'] ?></h5>
                              <h5><?php echo $NewProduct[$p]['cateName']?></h5>
                              <h4 align="center"><a  class="btn btn-primary" href="<?php echo SITE_URL('Product/ProductDetail/'.$NewProduct[$p]['categroupId']."/".$NewProduct[$p]['cateId']."/".$NewProduct[$p]['productId']); ?>">รายละเอียด</a></h4>
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
          </div> -->


          <?php if (count($NewProduct) > 0): ?>
            <ul class="breadcrumb">
              <h4><li>สินค้าใหม่</li>
                <div id="myTab" class="pull-right">
                  <a href="#newblockView" data-toggle="tab"><span class="btn btn"><i class="icon-th-large" style="margin-top:5px;"></i></span></a>
                  <a href="#newlistView" data-toggle="tab"><span class="btn btn"><i class="icon-list" style="margin-top:5px;"></i></span></a>
                </div>
              </h4>
            </ul>
            <br class="clr"/>
            <div class="tab-content" style="margin-top:20px;">


              <!-- Table Style -->
              <div class="tab-pane" id="newlistView">
                <!-- Start Loop -->
                <?php foreach ($NewProduct as $newlist): ?>
                  <div class="row">
                    <div class="span2">
                      <a  href="<?php echo SITE_URL('Product/ProductDetail/'.$newlist['categroupId']."/".$newlist['cateId']."/".$newlist['productId']); ?>">
                      <img src="<?php echo BASE_URL('uploads/Products/'.$newlist['productImg']); ?>" style="height:150px; width:240px;"/>
                      </a>
                    </div>
                    <div class="span4">
                      <h3><?php echo  $newlist['productName'] ?></h3>
                      <p>
                        <?php echo $newlist['productSubdetail'] ?>
                      </p>
                      <br class="clr"/>
                    </div>

                    <hr class="soft"/>
                    <div class="span3 alignR">
                      <form class="form-horizontal qtyFrm">
                        <h3>฿<?php echo number_format($newlist['productPrice']) ?></h3>
                        <a  class="btn btn-small pull-right btn-primary" href="<?php echo SITE_URL('Product/ProductDetail/'.$newlist['categroupId']."/".$newlist['cateId']."/".$newlist['productId']); ?>">รายละเอียด</a>
                      </form>
                    </div>
                  </div>
                <?php endforeach; ?>
                <li class="pull-right"><a href="#" style="color:blue;" >ดูทั้งหมด</a><i class="icon-arrow-right"></i></li>
                <hr class="soft"/>

                <!-- End Loop -->
              </div>
              <!-- End Table Style -->


              <!-- Block Style -->
              <div class="tab-pane  active" id="newblockView">
                <ul class="thumbnails">
                  <?php foreach ($NewProduct as $newblock): ?>
                    <!-- Start Loop -->
                    <li class="span3">
                      <div class="thumbnail">
                        <a  href="<?php echo SITE_URL('Product/ProductDetail/'.$newblock['categroupId']."/".$newblock['cateId']."/".$newblock['productId']); ?>"><img src="<?php echo BASE_URL('uploads/Products/'.$newblock['productImg']); ?>" style="height:150px; width:210px;"/></a>
                        <div class="caption">
                          <h5><?php echo  $newblock['productName'] ?></h5>
                          <p>
                            ฿<?php echo number_format($newblock['productPrice']) ?>
                          </p>
                          <h4 style="text-align:center">
                            <a  class="btn btn-primary" href="<?php echo SITE_URL('Product/ProductDetail/'.$newblock['categroupId']."/".$newblock['cateId']."/".$newblock['productId']); ?>">รายละเอียด</a></h4>
                          </div>
                        </div>
                      </li>
                    <?php endforeach; ?>
                    <!-- End Loop -->
                  </ul>
                  <!-- End Block Style -->
                  <li class="pull-right"><a href="#" style="color:blue;" >ดูทั้งหมด</a><i class="icon-arrow-right"></i></li>
                  <hr class="soft"/>
                </div>
              </div>
            <?php endif; ?>


          <?php if (count($Product) > 0): ?>
            <ul class="breadcrumb">
              <h4><li>สินค้าแนะนำ</li>
                <div id="myTab" class="pull-right">
                  <a href="#blockView" data-toggle="tab"><span class="btn btn"><i class="icon-th-large" style="margin-top:5px;"></i></span></a>
                  <a href="#listView" data-toggle="tab"><span class="btn btn"><i class="icon-list" style="margin-top:5px;"></i></span></a>
                </div>
              </h4>
            </ul>
            <br class="clr"/>
            <div class="tab-content" style="margin-top:20px;">


              <!-- Table Style -->
              <div class="tab-pane" id="listView">
                <!-- Start Loop -->
                <?php foreach ($Product as $list): ?>
                  <div class="row">
                    <div class="span2">
                      <a  href="<?php echo SITE_URL('Product/ProductDetail/'.$list['categroupId']."/".$list['cateId']."/".$list['productId']); ?>">
                      <img src="<?php echo BASE_URL('uploads/Products/'.$list['productImg']); ?>" style="height:150px; width:240px;"/>
                      </a>
                    </div>
                    <div class="span4">
                      <h3><?php echo $list['productName'] ?></h3>
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
                <li class="pull-right"><a href="#" style="color:blue;" >ดูทั้งหมด</a><i class="icon-arrow-right"></i></li><hr class="soft"/>

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
                          <h5><?php echo  $block['productName'] ?></h5>
                          <p>
                            ฿<?php echo number_format($block['productPrice']) ?>
                          </p>
                          <h4 style="text-align:center">
                            <a  class="btn btn-primary" href="<?php echo SITE_URL('Product/ProductDetail/'.$block['categroupId']."/".$block['cateId']."/".$block['productId']); ?>">รายละเอียด</a></h4>
                          </div>
                        </div>
                      </li>
                    <?php endforeach; ?>
                    <!-- End Loop -->
                  </ul>
                  <!-- End Block Style -->
                  <li class="pull-right"><a href="#" style="color:blue;" >ดูทั้งหมด</a><i class="icon-arrow-right"></i></li>
                  <hr class="soft"/>
                </div>
              </div>
            <?php endif; ?>

          </div>
        </div>

      </div>
    </span>
