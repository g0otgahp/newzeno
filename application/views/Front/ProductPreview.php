<?php
$Preview = array();
$Preview = $PreProduct;
$num = count($Preview);
if ($num > 0):
  ?>

  <!-- Table Style -->
  <div class="tab-content">
    <?php if ($new == 1): ?>
      <div class="tab-pane" id="newlistView">
      <?php else: ?>
        <div class="tab-pane" id="listView">
        <?php endif; ?>
        <?php foreach ($Preview as $list): ?>
          <div class="row" style="display:block; margin:auto;">
            <?php if ($value == 1): ?>
              <div class="col-md-4">
              <?php else: ?>
                <div class="col-md-offset-1 col-md-3">
                <?php endif; ?>
                <a  class="img-card" href="<?php echo SITE_URL('Product/ProductDetail/'.$list['categroupId']."/".$list['cateId']."/".$list['productId']); ?>">
                  <img src="<?php echo BASE_URL('uploads/Products/'.$list['productImg']); ?>" style="height:150px; width:240px;"/>
                </a>
              </div>
              <?php if ($value == 1): ?>
                <div class="col-md-6">
                <?php else: ?>
                  <div class="col-md-5">
                  <?php endif; ?>
                  <h3><?php echo $list['productName'] ?></h3>
                  <p><?php echo $list['productSubdetail1'] ?></p>
                  <p><?php echo $list['productSubdetail2'] ?></p>
                  <p><?php echo $list['productSubdetail3'] ?></p>
                  <p><?php echo $list['productSubdetail4'] ?></p>
                  <p><?php echo $list['productSubdetail5'] ?></p>
                  <p><?php echo $list['productSubdetail6'] ?></p>
                  <br>
                </div>
                <!-- <hr class="soft"/> -->
                <div class="col-md-2">
                  <div class="form-horizontal qtyFrm">
                    <h3>฿<?php echo number_format($list['productPrice']) ?></h3>
                    <a  class="btn btn-sm btn-primary" href="<?php echo SITE_URL('Product/ProductDetail/'.$list['categroupId']."/".$list['cateId']."/".$list['productId']); ?>">รายละเอียด</a>
                  </div>
                </div>
              </div>
            <?php endforeach; $list = array();?>
            <?php if ($value == 1): ?>
              <li class="pull-right"><a href="#" style="color:blue;">ดูทั้งหมด</a><i class="icon-arrow-right"></i></li>
              <hr class="soft"/>
            <?php endif; ?>
          </div>
          <!-- End Table Style -->


          <!-- Block Style -->
          <?php if ($new == 1): ?>
            <div class="tab-pane active" id="newblockView">
            <?php else: ?>
              <div class="tab-pane active" id="blockView">
              <?php endif; ?>
              <ul class="thumbnails" style="margin:auto; display:block;">
                <?php $i = 1; foreach ($Preview as $block): ?>
                  <?php if ($value == 1): ?>
                    <div class="col-xs-12 col-md-3 col-sm-6" style="padding-left:5px;">
                    <?php else: ?>
                      <div class="col-xs-12 col-md-4 col-sm-6" style="padding-left:5px;">
                      <?php endif; ?>
                      <div class="card">
                        <a class="img-card" href="<?php echo SITE_URL('Product/ProductDetail/'.$block['categroupId']."/".$block['cateId']."/".$block['productId']); ?>">
                          <img src="<?php echo BASE_URL('uploads/Products/'.$block['productImg']); ?>" style=" margin:auto; display:block;"/>
                        </a>
                        <div class="card-content">
                          <h4>
                            <?php echo  $block['productName'] ?>
                          </h4>
                          <p><?php echo $block['productSubdetail1'] ?></p>
                          <p><?php echo $block['productSubdetail2'] ?></p>
                          <p><?php echo $block['productSubdetail3'] ?></p>
                          <p><?php echo $block['productSubdetail4'] ?></p>
                          <p><?php echo $block['productSubdetail5'] ?></p>
                          <p><?php echo $block['productSubdetail6'] ?></p>
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
                    <?php if ($value != 1): ?>
                      <?php if ($i == 3): ?>
                      </ul>
                      <div class="col-xs-12" style="padding-left:5px;">
                        <hr class="soft"/>
                      </div>
                      <?php $i=0; endif; ?>
                    <?php endif; ?>
                    <?php $i++; endforeach; $block = array();?>
                  </ul>
                  <!-- End Block Style -->
                  <?php if ($value == 1): ?>
                    <li class="pull-right"><a href="#" style="color:blue;" >ดูทั้งหมด</a><i class="icon-arrow-right"></i></li>
                    <hr class="soft"/>
                  <?php endif; ?>
                </div>
              </div>
              <?php if ($value != 1): ?>
                <div class="pagination">
                  <ul>
                    <li><a href="#" class="colorTagA">&lsaquo;</a></li>
                    <li><a href="#" class="colorTagA">1</a></li>
                    <li><a href="#" class="colorTagA">2</a></li>
                    <li><a href="#" class="colorTagA">3</a></li>
                    <li><a href="#" class="colorTagA">4</a></li>
                    <li><a href="#" class="colorTagA">5</a></li>
                    <li><a href="#" class="colorTagA">&rsaquo;</a></li>
                  </ul>
                </div>
                <br class="clr"/>
              <?php endif; ?>
            </div>
          </div>
        <?php endif; ?>
        <?php $new = 0; ?>
