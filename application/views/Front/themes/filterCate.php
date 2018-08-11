<div class="container">
  <div class="row">
    <div class="col-md-12">
    <!-- Sidebar ================================================== -->
    <div id="sidebar" class="col-md-3">
      <!-- <div class="well well-small"><a id="myCart" href="#"><img src="<?php echo BASE_URL()?>/assets/themes/images/ico-cart.png" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div> -->
      <ul id="productlist" class="nav nav-tabs nav-stacked">
        <?php echo form_open('Product/ShowProductFind/'.$GroupSelect[0]['categroupId']."/".$CateSelect[0]['cateId']."#productlist"); ?>
        <?php if (count($CateBrand['sortby']) >0): ?>
          <div class="form-check">
            <h4><b>เรียงราคา</b></h4>
              <p>
                <select name="sortbyprice">
                  <option value="">-เลือกเรียงราคา-</option>
                  <option value="DESC" <?php if (@$keyword['sortbyprice'] == "DESC") {
                    echo "selected";
                  } ?> >เรียงราคา สูง > ต่ำ</option>
                  <option value="ASC" <?php if (@$keyword['sortbyprice'] == "ASC") {
                    echo "selected";
                  } ?>>เรียงราคา ต่ำ > สูง</option>
                </select>
              </p>
          </div>
          <hr>
        <div class="form-check">
          <h4><b>แบรนด์สินค้า</b></h4>
          <?php foreach ($CateBrand['sortby'] as $brandkey): ?>
            <p>
              <input class="form-check-input" type="checkbox" name="brandbox[]" value="<?php echo $brandkey['brandId'] ?>"
              style="margin-bottom:5px;" id="brandCheck<?php echo $brandkey['brandId'] ?>"
              <?php if (isset($keyword['brandbox'])): ?>
              <?php foreach ($keyword['brandbox'] as $brandselect): ?>
                <?php if ($brandselect == $brandkey['brandId']): ?>
                  <?php echo "checked"; ?>
                <?php endif; ?>
              <?php endforeach; ?>
            <?php endif; ?>
              >
              <label for="brandCheck<?php echo $brandkey['brandId'] ?>"> <?php echo $brandkey['brandName'] ?></label>
            </p>
          <?php endforeach; ?>
        </div>
        <hr>
      <?php endif; ?>
        <div class="form-check">
          <h4><b>ราคา</b></h4>
          <input style="padding:15px;" type="number" class="form-control" name="min" placeholder="ราคาต่ำสุด" value="<?php echo @$keyword['min'] ?>">
          <input style="padding:15px;" type="number" class="form-control" name="max" placeholder="ราคาสูงสุด" value="<?php echo @$keyword['max'] ?>">
        </div>
        <hr>
        <div class="form-check" align="center">
          <button type="submit" class="btn btn-warning btn-large">ค้นหาที่เลือก</button>
        </div>
        <?php echo form_close(); ?>
      </ul>
    </div>
