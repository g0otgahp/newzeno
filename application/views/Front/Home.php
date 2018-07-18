<span>
  <div class="container" style="margin-top:20px;">
    <div class="row">
  <div class="span12">
    
    <!-- 1 -->
    <div class="well well-small">
      <h4>LG <small class="pull-right"><a href="#">ดูทั้งหมด</a></small></h4>
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
                    <?php for ($p=1; $p < 5; $p++) {?>
                      <li class="span3">
                        <div class="thumbnail">
                          <i class="tag"></i>
                          <a href="product_details.html"><img src="<?php echo BASE_URL()?>/uploads/Logo/LG-Logo.png" alt=""></a>
                          <div class="caption">
                            <h5>Product name</h5>
                            <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
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

      <!-- 2 -->
      <!-- <div class="well well-small">
        <h4>HITACHI <small class="pull-right"><a href="#">ดูทั้งหมด</a></small></h4>
        <div class="row-fluid">
          <div id="featured2" class="carousel slide">
            <div class="carousel-inner">

              <?php for ($i=1; $i < 3; $i++) {?>
                <?php if ($i == 1): ?>
                  <div class="item active">
                  <?php else: ?>
                    <div class="item">
                    <?php endif; ?>
                    <ul class="thumbnails">
                      <?php for ($p=1; $p < 5; $p++) {?>
                        <li class="span3">
                          <div class="thumbnail">
                            <i class="tag"></i>
                            <a href="product_details.html"><img src="<?php echo BASE_URL()?>/uploads/Logo/Hitachi-Logo.png" alt=""></a>
                            <div class="caption">
                              <h5>Product name</h5>
                              <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                            </div>
                          </div>
                        </li>
                      <?php }?>
                    </ul>
                  </div>
                <?php }?>
              </div>
              <a class="left carousel-control" href="#featured2" data-slide="prev">‹</a>
              <a class="right carousel-control" href="#featured2" data-slide="next">›</a>
            </div>
          </div>
        </div> -->
        <!-- 3 -->

        <!-- <div class="well well-small">
          <h4>SHARP <small class="pull-right"><a href="#">ดูทั้งหมด</a></small></h4>
          <div class="row-fluid">
            <div id="featured3" class="carousel slide">
              <div class="carousel-inner">

                <?php for ($i=1; $i < 3; $i++) {?>
                  <?php if ($i == 1): ?>
                    <div class="item active">
                    <?php else: ?>
                      <div class="item">
                      <?php endif; ?>
                      <ul class="thumbnails">
                        <?php for ($p=1; $p < 5; $p++) {?>
                          <li class="span3">
                            <div class="thumbnail">
                              <i class="tag"></i>
                              <a href="product_details.html"><img src="<?php echo BASE_URL()?>/uploads/Logo/Sharp-logo.jpg" alt=""></a>
                              <div class="caption">
                                <h5>Product name</h5>
                                <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                              </div>
                            </div>
                          </li>
                        <?php }?>
                      </ul>
                    </div>
                  <?php }?>
                </div>
                <a class="left carousel-control" href="#featured3" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#featured3" data-slide="next">›</a>
              </div>
            </div>
          </div> -->
          <!-- 4 -->

          <!-- <div class="well well-small">
            <h4>SONY <small class="pull-right"><a href="#">ดูทั้งหมด</a></small></h4>
            <div class="row-fluid">
              <div id="featured4" class="carousel slide">
                <div class="carousel-inner">

                  <?php for ($i=1; $i < 3; $i++) {?>
                    <?php if ($i == 1): ?>
                      <div class="item active">
                      <?php else: ?>
                        <div class="item">
                        <?php endif; ?>
                        <ul class="thumbnails">
                          <?php for ($p=1; $p < 5; $p++) {?>
                            <li class="span3">
                              <div class="thumbnail">
                                <i class="tag"></i>
                                <a href="product_details.html"><img src="<?php echo BASE_URL()?>/uploads/Logo/sony-logo.png" alt=""></a>
                                <div class="caption">
                                  <h5>Product name</h5>
                                  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                                </div>
                              </div>
                            </li>
                          <?php }?>
                        </ul>
                      </div>
                    <?php }?>
                  </div>
                  <a class="left carousel-control" href="#featured4" data-slide="prev">‹</a>
                  <a class="right carousel-control" href="#featured4" data-slide="next">›</a>
                </div>
              </div>
            </div>
          </div> -->


          <!-- End tag -->
        </div>
      </div>
    </div>
  </span>
