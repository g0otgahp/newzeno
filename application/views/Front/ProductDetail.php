<div class="container">
  <div class="row">
<div class="span12">
  <ul class="breadcrumb">
  <li><a href="<?php echo SITE_URL('Home'); ?>">หน้าแรก</a> <span class="divider">/</span></li>
  <?php if (!empty($CateSelect)): ?>
    <li><a href="<?php echo SITE_URL('Home/CategoryHome/'.$GroupSelect[0]['categroupId']); ?>"><?php echo $GroupSelect[0]['categroupName'] ?> </a><span class="divider">/</span></li>
    <li><a href="<?php echo SITE_URL('Product/ShowProduct/'.$GroupSelect[0]['categroupId']."/".$CateSelect[0]['cateId']); ?>"><?php echo $CateSelect[0]['cateName'] ?> </a><span class="divider">/</span></li>
    <li class="active"><?php echo $Product['product'][0]['productName'] ?></li>
  <?php else: ?>
    <li class="active"><?php echo $GroupSelect[0]['categroupName'] ?></li>
  <?php endif; ?>
  </ul>
<div class="row">
    <div id="gallery" class="span4">
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
    <div class="span8">
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

      <?php echo $Product['product'][0]['productSubdetail'] ?>

      </p>
      <a class="btn btn-small pull-right" href="#detail">เพิ่มเติม</a>
      <br class="clr"/>
    <a href="#" name="detail"></a>
    <hr class="soft"/>
    </div>

    <div class="span12">
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

  <!-- <div class="tab-pane fade" id="profile">
  <div id="myTab" class="pull-right">
   <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
   <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
  </div>
  <br class="clr"/>
  <hr class="soft"/>
  <div class="tab-content">
    <div class="tab-pane" id="listView">
      <div class="row">
        <div class="span2">
          <img src="themes/images/Products/4.jpg" alt=""/>
        </div>
        <div class="span4">
          <h3>New | Available</h3>
          <hr class="soft"/>
          <h5>Product Name </h5>
          <p>
          Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
          that is why our goods are so popular..
          </p>
          <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
          <br class="clr"/>
        </div>
        <div class="span3 alignR">
        <form class="form-horizontal qtyFrm">
        <h3> $222.00</h3>
        <label class="checkbox">
          <input type="checkbox">  Adds product to compair
        </label><br/>
        <div class="btn-group">
          <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
          <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
         </div>
          </form>
        </div>
    </div>
    <hr class="soft"/>
    <div class="row">
        <div class="span2">
          <img src="themes/images/Products/5.jpg" alt=""/>
        </div>
        <div class="span4">
          <h3>New | Available</h3>
          <hr class="soft"/>
          <h5>Product Name </h5>
          <p>
          Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
          that is why our goods are so popular..
          </p>
          <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
          <br class="clr"/>
        </div>
        <div class="span3 alignR">
        <form class="form-horizontal qtyFrm">
          <h3> $222.00</h3>
          <label class="checkbox">
          <input type="checkbox">  Adds product to compair
          </label><br/>
          <div class="btn-group">
          <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
          <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
          </div>
        </form>
        </div>
    </div>
    <hr class="soft"/>
    <div class="row">
        <div class="span2">
        <img src="themes/images/Products/6.jpg" alt=""/>
        </div>
        <div class="span4">
          <h3>New | Available</h3>
          <hr class="soft"/>
          <h5>Product Name </h5>
          <p>
          Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
          that is why our goods are so popular..
          </p>
          <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
          <br class="clr"/>
        </div>
        <div class="span3 alignR">
        <form class="form-horizontal qtyFrm">
        <h3> $222.00</h3>
        <label class="checkbox">
          <input type="checkbox">  Adds product to compair
        </label><br/>
      <div class="btn-group">
        <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
        <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
       </div>
          </form>
        </div>
    </div>
    <hr class="soft"/>
    <div class="row">
        <div class="span2">
        <img src="themes/images/Products/7.jpg" alt=""/>
        </div>
        <div class="span4">
          <h3>New | Available</h3>
          <hr class="soft"/>
          <h5>Product Name </h5>
          <p>
          Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
          that is why our goods are so popular..
          </p>
          <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
          <br class="clr"/>
        </div>
        <div class="span3 alignR">
          <form class="form-horizontal qtyFrm">
          <h3> $222.00</h3>
          <label class="checkbox">
          <input type="checkbox">  Adds product to compair
          </label><br/>
          <div class="btn-group">
          <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
          <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
          </div>
          </form>
        </div>
    </div>

    <hr class="soft"/>
    <div class="row">
        <div class="span2">
        <img src="themes/images/Products/8.jpg" alt=""/>
        </div>
        <div class="span4">
          <h3>New | Available</h3>
          <hr class="soft"/>
          <h5>Product Name </h5>
          <p>
          Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
          that is why our goods are so popular..
          </p>
          <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
          <br class="clr"/>
        </div>
        <div class="span3 alignR">
          <form class="form-horizontal qtyFrm">
          <h3> $222.00</h3>
          <label class="checkbox">
          <input type="checkbox">  Adds product to compair
          </label><br/>
          <div class="btn-group">
          <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
          <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
          </div>
          </form>
        </div>
    </div>
    <hr class="soft"/>
      <div class="row">
        <div class="span2">
        <img src="themes/images/Products/9.jpg" alt=""/>
        </div>
        <div class="span4">
          <h3>New | Available</h3>
          <hr class="soft"/>
          <h5>Product Name </h5>
          <p>
          Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
          that is why our goods are so popular..
          </p>
          <a class="btn btn-small pull-right" href="product_details.html">View Details</a>
          <br class="clr"/>
        </div>
        <div class="span3 alignR">
          <form class="form-horizontal qtyFrm">
          <h3> $222.00</h3>
          <label class="checkbox">
          <input type="checkbox">  Adds product to compair
          </label><br/>
          <div class="btn-group">
          <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
          <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
          </div>
          </form>
        </div>
    </div>
    <hr class="soft"/>
  </div>
    <div class="tab-pane active" id="blockView">
      <ul class="thumbnails">
        <li class="span3">
          <div class="thumbnail">
          <a href="product_details.html"><img src="themes/images/Products/10.jpg" alt=""/></a>
          <div class="caption">
            <h5>Manicure &amp; Pedicure</h5>
            <p>
            Lorem Ipsum is simply dummy text.
            </p>
            <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
          </div>
          </div>
        </li>
        <li class="span3">
          <div class="thumbnail">
          <a href="product_details.html"><img src="themes/images/Products/11.jpg" alt=""/></a>
          <div class="caption">
            <h5>Manicure &amp; Pedicure</h5>
            <p>
            Lorem Ipsum is simply dummy text.
            </p>
            <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
          </div>
          </div>
        </li>
        <li class="span3">
          <div class="thumbnail">
          <a href="product_details.html"><img src="themes/images/Products/12.jpg" alt=""/></a>
          <div class="caption">
            <h5>Manicure &amp; Pedicure</h5>
            <p>
            Lorem Ipsum is simply dummy text.
            </p>
             <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
          </div>
          </div>
        </li>
        <li class="span3">
          <div class="thumbnail">
          <a href="product_details.html"><img src="themes/images/Products/13.jpg" alt=""/></a>
          <div class="caption">
            <h5>Manicure &amp; Pedicure</h5>
            <p>
            Lorem Ipsum is simply dummy text.
            </p>
             <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
          </div>
          </div>
        </li>
        <li class="span3">
          <div class="thumbnail">
          <a href="product_details.html"><img src="themes/images/Products/1.jpg" alt=""/></a>
          <div class="caption">
            <h5>Manicure &amp; Pedicure</h5>
            <p>
            Lorem Ipsum is simply dummy text.
            </p>
             <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
          </div>
          </div>
        </li>
        <li class="span3">
          <div class="thumbnail">
          <a href="product_details.html"><img src="themes/images/Products/2.jpg" alt=""/></a>
          <div class="caption">
            <h5>Manicure &amp; Pedicure</h5>
            <p>
            Lorem Ipsum is simply dummy text.
            </p>
             <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>
          </div>
          </div>
        </li>
        </ul>
    <hr class="soft"/>
    </div>
  </div>
      <br class="clr">
         </div> -->
  </div>
        </div>

</div>
</div>

</div>
</div>
