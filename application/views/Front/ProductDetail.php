<div class="container">
  <div class="row">
    <div class="col-md-12">
      <ul class="breadcrumb">
        <li><a href="<?php echo SITE_URL('Home'); ?>" class="colorTagA">หน้าแรก</a></li>
        <?php if (!empty($CateSelect)): ?>
          <li><a href="<?php echo SITE_URL('Home/CategoryHome/'.$GroupSelect[0]['categroupId']); ?>" class="colorTagA"><?php echo $GroupSelect[0]['categroupName'] ?> </a></li>
          <li><a href="<?php echo SITE_URL('Product/ShowProduct/'.$GroupSelect[0]['categroupId']."/".$CateSelect[0]['cateId']); ?>" class="colorTagA"><?php echo $CateSelect[0]['cateName'] ?> </a></li>
          <li><?php echo $Product['product'][0]['productName'] ?></li>
        <?php else: ?>
          <li><?php echo $GroupSelect[0]['categroupName'] ?></li>
        <?php endif; ?>
      </ul>
      <div class="row">
        <div id="gallery" class="col-md-4">
          <div>
            <a class="example-image-link" href="<?php echo BASE_URL('uploads/Products/'.$Product['product'][0]['productImg']); ?>" data-lightbox="example-set">
              <img style="width:100%" class="example-image" src="<?php echo BASE_URL('uploads/Products/'.$Product['product'][0]['productImg']); ?>" alt=""/></a>
            </div>

            <div id="differentview" class="moreOptopm carousel slide">
              <div class="carousel-inner">
                <div>
                  <?php foreach ($Product['productImage'] as $Image): ?>
                    <a class="example-image-link" href="<?php echo BASE_URL('uploads/Products/'.$Image['proimageName']); ?>" data-lightbox="example-set">
                      <img height="25%" width="25%" class="example-image" src="<?php echo BASE_URL('uploads/Products/'.$Image['proimageName']); ?>" alt=""/></a>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>

              <!-- <div id="differentview" class="moreOptopm carousel slide">
              <div class="carousel-inner">
              <div class="item active" align="center">
              <?php foreach ($Product['productImage'] as $Image): ?>
              <a href="<?php echo BASE_URL('uploads/Products/'.$Image['proimageName']); ?>"> <img style="width:20%" src="<?php echo BASE_URL('uploads/Products/'.$Image['proimageName']); ?>" alt=""/></a>
            <?php endforeach; ?>
          </div>
        </div> -->
        <!--
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
      -->

      <!-- <div class="btn-toolbar">
      <div class="btn-group">
      <span class="btn"><i class="icon-envelope"></i></span>
      <span class="btn" ><i class="icon-print"></i></span>
      <span class="btn" ><i class="icon-zoom-in"></i></span>
      <span class="btn" ><i class="icon-star"></i></span>
      <span class="btn" ><i class=" icon-thumbs-up"></i></span>
      <span class="btn" ><i class="icon-thumbs-down"></i></span>
    </div>
  </div> -->
</div>
<div class="col-md-8">
  <h3><?php echo $Product['product'][0]['productName'] ?></h3>
  <!-- <small>- Sub Detail</small> -->
  <hr class="soft"/>
  <form class="form-horizontal qtyFrm">
    <div class="control-group">
      <label class="control-label"><span>ราคา ฿<?php echo number_format($Product['product'][0]['productPrice']) ?></span></label>
      <!-- <div class="controls">
      <input type="number" class="span1" placeholder="Qty."/>
      <button type="submit" class="btn btn-large btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i></button>
    </div> -->
  </div>
</form>

<hr class="soft"/>
<!-- <h4>100 items in stock</h4>
<form class="form-horizontal qtyFrm pull-right">
<div class="control-group">
<label class="control-label"><span>Color</span></label>
<div class="controls">
<select class="span2">
<option>Black</option>
<option>Red</option>
<option>Blue</option>
<option>Brown</option>
</select>
</div>
</div>
</form>
<hr class="soft clr"/> -->
<p>
  <?php echo $Product['product'][0]['productSubdetail1'] ?>
</p>
<p>
  <?php echo $Product['product'][0]['productSubdetail2'] ?>
</p>
<p>
  <?php echo $Product['product'][0]['productSubdetail3'] ?>
</p>
<p>
  <?php echo $Product['product'][0]['productSubdetail4'] ?>
</p>
<p>
  <?php echo $Product['product'][0]['productSubdetail5'] ?>
</p>
<p>
  <?php echo $Product['product'][0]['productSubdetail6'] ?>
</p>
<a class="btn btn-small pull-right" href="#detail">เพิ่มเติม</a>
<br class="clr"/>
<a href="#" name="detail"></a>
<hr class="soft"/>
</div>

<div class="col-md-12">
  <ul id="productDetail" class="nav nav-tabs">
    <li class="active" style="float:left;"><a href="#home" data-toggle="tab">รายละเอียดสินค้า</a></li>
    <?php if (count($Product['document']) != 0): ?>
      <li style="float:left;"><a href="#document" data-toggle="tab">เอกสารเพิ่มเติม</a></li>
    <?php endif; ?>
  </ul>
  <div id="myTabContent" class="tab-content">
    <div class="tab-pane fade active in" id="home">
      <?php echo $Product['product'][0]['productDetail'] ?>
    </div>
    <?php if (count($Product['document']) != 0): ?>
      <div class="tab-pane fade in" id="document">
        <?php foreach ($Product['document'] as $document): ?>
          <table>
            <td></td>
            <td></td>
          </table>
          <a href="<?php echo BASE_URL('uploads/pdf/'.$document['docFilename']); ?>" target="_blank" style="color:blue;"><?php echo $document['docName'] ?> </a><br>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

  </div>
</div>
</div>
</div>
</div>
</div>
