<?php
$Preview = array();
$Preview = $PreProduct;
$num = count($Preview);
if ($num > 0):
  ?>

  <!-- list Style -->
  <div class="tab-content">
    <?php if ($new == 1): ?>
      <div class="tab-pane fade in" id="newlistView">
      <?php else: ?>
        <div class="tab-pane fade in" id="listView">
        <?php endif; ?>
        <?php foreach ($Preview as $list): ?>
          <div class="row" style="display:block; margin:auto;">
            <?php if ($value == 1): ?>
              <div class="col-md-4">
              <?php else: ?>
                <div class="col-md-offset-1 col-md-3">
                <?php endif; ?>
                <a  class="img-card" href="<?php echo SITE_URL('Product/ProductDetail/'.$list['categroupId']."/".$list['cateId']."/".$list['productId']); ?>">
                  <img class="img-thumbnail" src="<?php echo BASE_URL('uploads/Products/'.$list['productImg']); ?>" style="height:150px; width:240px;"/>
                </a>
              </div>
              <?php if ($value == 1): ?>
                <div class="col-md-6">
                <?php else: ?>
                  <div class="col-md-5">
                  <?php endif; ?>
                  <h4><?php echo  $list['brandName'] ?> -  <?php echo  $list['productName'] ?></h4>
                  <p>
                    <?php if ($list['productSubdetail1'] != ''): ?>
                      <?php echo $list['productSubdetail1'] ?>
                    <?php else: ?>
                      <br>
                    <?php endif; ?>
                  </p>
                  <p>
                    <?php if ($list['productSubdetail2'] != ''): ?>
                      <?php echo $list['productSubdetail2'] ?>
                    <?php else: ?>
                      <br>
                    <?php endif; ?>
                  </p>
                  <p>
                    <?php if ($list['productSubdetail3'] != ''): ?>
                      <?php echo $list['productSubdetail3'] ?>
                    <?php else: ?>
                      <br>
                    <?php endif; ?>
                  </p>
                  <p>
                    <?php if ($list['productSubdetail4'] != ''): ?>
                      <?php echo $list['productSubdetail4'] ?>
                    <?php else: ?>
                      <br>
                    <?php endif; ?>
                  </p>
                  <p>
                    <?php if ($list['productSubdetail5'] != ''): ?>
                      <?php echo $list['productSubdetail5'] ?>
                    <?php else: ?>
                      <br>
                    <?php endif; ?>
                  </p>
                  <p>
                    <?php if ($list['productSubdetail6'] != ''): ?>
                      <?php echo $list['productSubdetail6'] ?>
                    <?php else: ?>
                      <br>
                    <?php endif; ?>
                  </p>
                  <br>
                </div>
                <!-- <hr class="soft"/> -->
                <div class="col-md-2">
                  <div class="form-horizontal qtyFrm">
                    <h3>
                      <b>
                        <?php if ($list['productPrice'] == 0): ?>
                          <a style="color:black;" href="<?php echo SITE_URL('Contact');?>">ติดต่อสอบถาม</a>
                        <?php else: ?>
                          <?php echo "฿".number_format($list['productPrice']);  ?>
                        <?php endif; ?>
                      </b>
                    </h3>
                    <a  class="btn btn-sm btn-primary" href="<?php echo SITE_URL('Product/ProductDetail/'.$list['categroupId']."/".$list['cateId']."/".$list['productId']); ?>">รายละเอียด</a>
                  </div>
                </div>
              </div>
            <?php endforeach; $list = array();?>
            <?php if ($value == 1): ?>
              <li class="pull-right btn btn-secondary btn-block"><strong><a href="<?php echo SITE_URL('Recommend'); ?>">สินค้าแนะนำทั้งหมด คลิก</a></strong></li>
              <hr class="soft"/>
            <?php endif; ?>
          </div>
          <!-- End list Style -->


          <!-- Block Style -->
          <?php if ($new == 1): ?>
            <div class="tab-pane active fade in" id="newblockView">
            <?php else: ?>
              <div class="tab-pane active fade in" id="blockView">
              <?php endif; ?>
              <ul class="thumbnails" style="margin:auto; display:block;">
                <?php $i = 1; foreach ($Preview as $block): ?>
                  <?php if ($value == 1): ?>
                    <div class="col-xs-12 col-md-3 col-sm-6" style="padding-left:5px;">
                    <?php else: ?>
                      <div class="col-xs-12 col-md-4 col-sm-6" style="padding-left:5px;">
                      <?php endif; ?>
                      <div class="card">
                        <?php if ($block['productSizeId'] != 0): ?>
                          <span class="btn-danger btn-xs" style="font-weight: bold;"><?php echo $block['productSizeId'] ?></span>
                          <!-- </span><span class="btn-success btn-xs pull-right">สินค้าแนะนำ</span> -->
                        <?php else: ?>
                          <br>
                        <?php endif; ?>
                        <a class="img-card" href="<?php echo SITE_URL('Product/ProductDetail/'.$block['categroupId']."/".$block['cateId']."/".$block['productId']); ?>">
                          <img src="<?php echo BASE_URL('uploads/Products/'.$block['productImg']); ?>" style=" margin:auto; display:block;"/>
                        </a>
                        <div class="card-read-more">

                          <a href="<?php echo SITE_URL('Product/ProductDetail/'.$block['categroupId']."/".$block['cateId']."/".$block['productId']); ?>" class="btn btn-block">
                            <b style="color:black;">
                              <?php echo  $block['brandName'] ?>
                            </b>
                          </a>
                          <a style="padding-bottom:0px; padding-top:5px;" href="<?php echo SITE_URL('Product/ProductDetail/'.$block['categroupId']."/".$block['cateId']."/".$block['productId']); ?>" class="btn btn-link btn-block">
                            รุ่น : <?php echo  $block['productName'] ?>
                            <!-- <?php //if ($block['productSizeId'] != ''): ?>
                            <span style="color:black; font-weight: bold;">(<?php echo $block['productSizeId'] ?> นิ้ว)</span>
                            <?php //endif; ?> -->
                          </a>
                        </div>
                        <div class="card-content" style="padding-top:5px;">
                          <p>
                            <?php if ($block['productSubdetail1'] != ''): ?>
                              <?php echo $block['productSubdetail1'] ?>
                            <?php else: ?>
                              <br>
                            <?php endif; ?>
                          </p>
                          <p>
                            <?php if ($block['productSubdetail2'] != ''): ?>
                              <?php echo $block['productSubdetail2'] ?>
                            <?php else: ?>
                              <br>
                            <?php endif; ?>
                          </p>
                          <p>
                            <?php if ($block['productSubdetail3'] != ''): ?>
                              <?php echo $block['productSubdetail3'] ?>
                            <?php else: ?>
                              <br>
                            <?php endif; ?>
                          </p>
                          <p>
                            <?php if ($block['productSubdetail4'] != ''): ?>
                              <?php echo $block['productSubdetail4'] ?>
                            <?php else: ?>
                              <br>
                            <?php endif; ?>
                          </p>
                          <p>
                            <?php if ($block['productSubdetail5'] != ''): ?>
                              <?php echo $block['productSubdetail5'] ?>
                            <?php else: ?>
                              <br>
                            <?php endif; ?>
                          </p>
                          <p>
                            <?php if ($block['productSubdetail6'] != ''): ?>
                              <?php echo $block['productSubdetail6'] ?>
                            <?php else: ?>
                              <br>
                            <?php endif; ?>
                          </p>
                        </div>
                        <div class="card-read-more">
                          <p class="btn btn-block">
                            <b>
                              <?php if ($block['productPrice'] == 0): ?>
                                <a style="color:black;" href="<?php echo SITE_URL('Contact');?>">ติดต่อสอบถาม</a>
                              <?php else: ?>
                                <a style="color:black;" href="<?php echo SITE_URL('Product/ProductDetail/'.$block['categroupId']."/".$block['cateId']."/".$block['productId']); ?>">
                                  <?php echo "฿".number_format($block['productPrice']);  ?>
                                </a>
                              <?php endif; ?>
                            </b>
                          </p>
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
                  <?php if ($value == 1): ?>
                    <li class="pull-right btn btn-secondary btn-block"><strong><a href="<?php echo SITE_URL('Recommend'); ?>">สินค้าแนะนำทั้งหมด คลิก</a></strong></li>
                    <hr class="soft"/>
                  <?php endif; ?>
                </div>
                <!-- <?php if ($value != 1): ?> -->
                <!-- <div class="pagination">
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
            <br class="clr"/> -->
            <!-- <?php endif; ?> -->
          <?php endif; ?>


          <!-- End Block Style -->
          <?php if ($new != 1): ?>
            <?php if (count($Preview) != 0): ?>

              <!-- DataTable Style -->
              <div class="tab-pane fade in" id="tableView">
                <ul class="thumbnails" style="margin:auto; display:block;">
                  <div class="col-xs-12 col-md-12 col-sm-12" style="padding-left:5px;">
                    <table class="table table-hover dataTable">
                      <thead>
                        <tr>
                          <!-- <th width="3%">รูปภาพ</th> -->
                          <th width="16%">แบรนด์</th>
                          <th width="16%">รุ่น</th>
                          <th width="40%">รายละเอียด</th>
                          <th width="18%">ราคา</th>
                          <th width="5%">ตัวเลือก</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; foreach ($Preview as $table): ?>
                          <tr>
                            <!-- <td align="left">
                              <a class="example-image-link" href="<?php echo BASE_URL('uploads/Products/'.$table['productImg']); ?>" data-lightbox="example-set">
                                <img class="img-thumbnail" src="<?php echo BASE_URL('uploads/Products/'.$table['productImg']); ?>" width="50px;" style="margin:auto; display:block;"/>
                              </a>
                            </td> -->
                            <td style="font-size:11px;"><?php echo $table['brandName'];?></td>
                            <td style="font-size:11px;"><?php echo $table['productName'];?></td>
                            <td style="font-size:11px;"><?php echo $table['productSubdetail1']." <b>/</b> ".$table['productSubdetail2']." <b>/</b> ".$table['productSubdetail3']." <b>/</b> ".$table['productSubdetail4']." <b>/</b> ".$table['productSubdetail5']." <b>/</b> ".$table['productSubdetail6'] ?></td>
                            <td align="right" style="color:gray;">
                              <b>
                                <?php if ($table['productPrice'] == 0): ?>
                                  <a style="color:black;" href="<?php echo SITE_URL('Contact');?>">ติดต่อสอบถาม</a>
                                <?php else: ?>
                                  <?php echo "฿".number_format($table['productPrice']);  ?>
                                <?php endif; ?>
                              </b>
                            </td>
                            <td>
                              <a href="<?php echo SITE_URL('Product/ProductDetail/'.$table['categroupId']."/".$table['cateId']."/".$table['productId']); ?>" class="btn btn-primary btn-xs">
                                รายละเอียด
                              </a>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </ul>
              </div>
            <?php else: ?>
              <center>
                <img src="<?php echo BASE_URL('uploads/Logo/Icon-Search-1.png'); ?>" width="20%">
                <h3>ไม่พบรายการ</h3>
              </center>
            <?php endif; ?>
          <?php endif; ?>
          <?php $new = 0; ?>
        </div>
        <!-- End DataTable Style -->
