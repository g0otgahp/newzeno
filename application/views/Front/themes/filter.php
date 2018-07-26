<div class="container">
  <div class="row">
    <!-- Sidebar ================================================== -->
    <div id="sidebar" class="span3">
      <!-- <div class="well well-small"><a id="myCart" href="#"><img src="<?php echo BASE_URL()?>/assets/themes/images/ico-cart.png" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div> -->
      <ul id="productlist" class="nav nav-tabs nav-stacked">
        <?php echo form_open('Home/CategoryFind/'.$GroupSelect[0]['categroupId']."#productlist"); ?>
        <div class="form-check">
          <h4><b>ประเภทสินค้า</b></h4>
          <?php foreach ($Category as $catekey): ?>
            <p>
              <input class="form-check-input" type="checkbox" name="catebox[]" value="<?php echo $catekey['cateId'] ?>"
              style="margin-bottom:5px;" id="defaultCheck<?php echo $catekey['cateId'] ?>"
              <?php if (isset($keyword['catebox'])): ?>
              <?php foreach ($keyword['catebox'] as $cateselect): ?>
                <?php if ($cateselect == $catekey['cateId']): ?>
                  <?php echo "checked"; ?>
                <?php endif; ?>
              <?php endforeach; ?>
            <?php endif; ?>
              >
              <label for="defaultCheck<?php echo $catekey['cateId'] ?>"> <?php echo $catekey['cateName'] ?></label>
            </p>
          <?php endforeach; ?>
        </div>
        <hr>
        <div class="form-check">
          <h4><b>แบรนด์สินค้า</b></h4>
          <?php foreach ($Brand as $brandkey): ?>
            <p>
              <input class="form-check-input" type="checkbox" name="brandbox[]" value="<?php echo $brandkey['brandId'] ?>"
              style="margin-bottom:5px;" id="defaultCheck<?php echo $brandkey['brandId'] ?>"
              <?php if (isset($keyword['brandbox'])): ?>
              <?php foreach ($keyword['brandbox'] as $brandselect): ?>
                <?php if ($brandselect == $brandkey['brandId']): ?>
                  <?php echo "checked"; ?>
                <?php endif; ?>
              <?php endforeach; ?>
            <?php endif; ?>
              >
              <label for="defaultCheck<?php echo $brandkey['brandId'] ?>"> <?php echo $brandkey['brandName'] ?></label>
            </p>
          <?php endforeach; ?>
        </div>
        <hr>
        <div class="form-check">
          <h4><b>ราคา</b></h4>
          <input type="number" class="form-control" name="min" placeholder="ราคาต่ำสุด" value="<?php echo @$keyword['min'] ?>">
          <input type="number" class="form-control" name="max" placeholder="ราคาสูงสุด" value="<?php echo @$keyword['max'] ?>">
        </div>
        <hr>
        <div class="form-check" align="center">
          <button type="submit" class="btn btn-defualt btn-large">ค้นหาที่เลือก</button>
        </div>
        <?php echo form_close(); ?>
      </ul>
    </div>
