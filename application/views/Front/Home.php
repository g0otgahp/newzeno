<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php if (count($NewProduct) > 0): ?>
        <ul class="breadcrumb">
          <li>สินค้าใหม่</li>
            <div id="myTab" class="pull-right" >
              <a href="#newblockView" data-toggle="tab" class="btn btn-xs btn-default"><i class="icon-th-large" style="margin-top:5px;"></i></a>
              <a href="#newlistView" data-toggle="tab" class="btn btn-xs btn-default"><i class="icon-list" style="margin-top:5px;"></i></a>
            </div>
        </ul>
        <div class="tab-content">
          <!-- Table Style -->
          <div class="tab-pane" id="newlistView">
            <!-- Start Loop -->
            <?php foreach ($NewProduct as $newlist): ?>
              <div class="row">
                <div class="col-md-offset-1 col-md-3">
                  <a class="img-card" href="<?php echo SITE_URL('Product/ProductDetail/'.$newlist['categroupId']."/".$newlist['cateId']."/".$newlist['productId']); ?>">
                    <img src="<?php echo BASE_URL('uploads/Products/'.$newlist['productImg']); ?>" style="height:150px; width:240px;"/>
                  </a>
                </div>

                <div class="col-md-5">
                  <h3><?php echo  $newlist['productName'] ?></h3>
                  <p>
                    <?php echo $newlist['productSubdetail1'] ?>
                  </p>
                  <p>
                    <?php echo $newlist['productSubdetail2'] ?>
                  </p>
                  <p>
                    <?php echo $newlist['productSubdetail3'] ?>
                  </p>
                  <p>
                    <?php echo $newlist['productSubdetail4'] ?>
                  </p>
                  <p>
                    <?php echo $newlist['productSubdetail5'] ?>
                  </p>
                  <p>
                    <?php echo $newlist['productSubdetail6'] ?>
                  </p>
                  <br class="clr"/>
                </div>
                <hr class="soft"/>
                <div class="col-md-2 alignR">
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
            <ul class="thumbnails" style="margin:auto; display:block;">
              <?php foreach ($NewProduct as $newblock): ?>
                <!-- Start Loop -->
                <div class="col-xs-12 col-md-3 col-sm-6" style="padding-left:5px;">
                  <div class="card">
                    <a class="img-card" href="<?php echo SITE_URL('Product/ProductDetail/'.$newblock['categroupId']."/".$newblock['cateId']."/".$newblock['productId']); ?>">
                      <img src="<?php echo BASE_URL('uploads/Products/'.$newblock['productImg']); ?>" style=" margin:auto; display:block;"/>
                    </a>
                    <div class="card-content">
                      <h4>
                        <?php echo $newblock['productName'] ?>
                      </h4>
                      <p>
                        <?php echo $newblock['productSubdetail1'] ?>
                      </p>
                      <p>
                        <?php echo $newblock['productSubdetail2'] ?>
                      </p>
                      <p>
                        <?php echo $newblock['productSubdetail3'] ?>
                      </p>
                      <p>
                        <?php echo $newblock['productSubdetail4'] ?>
                      </p>
                      <p>
                        <?php echo $newblock['productSubdetail5'] ?>
                      </p>
                      <p>
                        <?php echo $newblock['productSubdetail6'] ?>
                      </p>
                    </div>
                    <div class="card-read-more">
                      <p class="btn btn-block">
                        ฿<b><?php echo number_format($newblock['productPrice']) ?></b>
                      </p>
                      <a href="<?php echo SITE_URL('Product/ProductDetail/'.$newblock['categroupId']."/".$newblock['cateId']."/".$newblock['productId']); ?>" class="btn btn-link btn-block">
                        รายละเอียด
                      </a>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
              <!-- End Loop -->
            </ul>
            <!-- End Block Style -->
            <li class="pull-right"><a href="#" style="color:blue;" >ดูทั้งหมด</a><i class="icon-arrow-right"></i></li>
            <hr class="soft"/>
          </div>
        <?php endif; ?>
      </div>
      <?php if (count($Product) > 0): ?>
        <ul class="breadcrumb">
          <li>สินค้าแนะนำ</li>
            <div id="myTab" class="pull-right">
              <a href="#blockView" data-toggle="tab" class="btn btn-xs btn-default"><i class="icon-th-large" style="margin-top:5px;"></i></a>
              <a href="#listView" data-toggle="tab" class="btn btn-xs btn-default"><i class="icon-list" style="margin-top:5px;"></i></a>
            </div>
        </ul>
        <div class="tab-content">
          <!-- Table Style -->
          <div class="tab-pane" id="listView">
            <!-- Start Loop -->
            <?php foreach ($Product as $list): ?>
              <div class="row">
                <div class="col-md-offset-1 col-md-3">
                  <a class="img-card" href="<?php echo SITE_URL('Product/ProductDetail/'.$list['categroupId']."/".$list['cateId']."/".$list['productId']); ?>">
                    <img src="<?php echo BASE_URL('uploads/Products/'.$list['productImg']); ?>" style="height:150px; width:240px;"/>
                  </a>
                </div>
                <div class="col-md-5">
                  <h3><?php echo $list['productName'] ?></h3>
                  <span>
                    <?php echo $list['productSubdetail1'] ?>
                  </span>
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
            <?php endforeach; ?>
            <li class="pull-right"><a href="#" style="color:blue;" >ดูทั้งหมด</a><i class="icon-arrow-right"></i></li><hr/>
            <!-- End Loop -->
          </div>
          <!-- End Table Style -->


          <!-- Block Style -->
          <div class="tab-pane  active" id="blockView">
            <ul class="thumbnails" style="margin:auto; display:block;">
              <?php foreach ($Product as $block): ?>
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
