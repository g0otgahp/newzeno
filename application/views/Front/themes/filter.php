<div class="container">
  <div class="row">
    <div class="col-md-12">
      <!-- Sidebar ================================================== -->
      <div id="sidebar" class="col-md-3">
        <!-- <div class="well well-small"><a id="myCart" href="#"><img src="<?php echo BASE_URL()?>/assets/themes/images/ico-cart.png" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div> -->
        <ul id="productlist" class="nav nav-tabs nav-stacked">
          <?php echo form_open('Home/CategoryFind/'.$GroupSelect[0]['categroupId']."#productlist"); ?>
          <div class="form-check">
            <h4><b>ค้นหา</b></h4>
            <p>
              <input style="padding:15px;" class="form-control" type="text" name="wordsearch" placeholder="ค้นหาชื่อสินค้า" value="<?php echo @$keyword['wordsearch'] ?>">
            </p>
          </div>
          <div class="form-check">
            <h4><b>เรียงราคา</b></h4>
            <p>
              <select name="sortbyprice" class="form-control">
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
            <h4><b>ประเภทสินค้า</b></h4>
            <?php foreach ($Category as $catekey): ?>
              <p>
                <input class="form-check-input" type="checkbox" name="catebox[]" value="<?php echo $catekey['cateId'] ?>"
                style="margin-bottom:5px;" id="CateCheck<?php echo $catekey['cateId'] ?>"
                <?php if (isset($keyword['catebox'])): ?>
                  <?php foreach ($keyword['catebox'] as $cateselect): ?>
                    <?php if ($cateselect == $catekey['cateId']): ?>
                      <?php echo "checked"; ?>
                    <?php endif; ?>
                  <?php endforeach; ?>
                <?php endif; ?>
                >
                <label for="CateCheck<?php echo $catekey['cateId'] ?>"> <?php echo $catekey['cateName'] ?></label>
              </p>
            <?php endforeach; ?>
          </div>
          <hr>
          <div class="form-check">
            <h4><b>แบรนด์สินค้า</b></h4>
            <?php foreach ($Brand as $brandkey): ?>
              <p>
                <input class="form-check-input" type="checkbox" name="brandbox[]" value="<?php echo $brandkey['brandId'] ?>"
                style="margin-bottom:5px;" id="BrandCheck<?php echo $brandkey['brandId'] ?>"
                <?php if (isset($keyword['brandbox'])): ?>
                  <?php foreach ($keyword['brandbox'] as $brandselect): ?>
                    <?php if ($brandselect == $brandkey['brandId']): ?>
                      <?php echo "checked"; ?>
                    <?php endif; ?>
                  <?php endforeach; ?>
                <?php endif; ?>
                >
                <label for="BrandCheck<?php echo $brandkey['brandId'] ?>"> <?php echo $brandkey['brandName'] ?></label>
              </p>
            <?php endforeach; ?>
          </div>
          <hr>
          <div class="form-check">
            <h4><b>ความละเอียด</b></h4>
              <p>
                <input class="form-check-input" type="checkbox" name="resulotion[]" value="1"
                style="margin-bottom:5px;" id="resulotion1"
                <?php //if (isset($keyword['resulotion'])): ?>
                  <?php //foreach ($keyword['resulotion'] as $resulotion): ?>
                    <?php //if ($resulotion != ''): ?>
                      <?php //echo "checked"; ?>
                    <?php //endif; ?>
                  <?php //endforeach; ?>
                <?php //endif; ?>
                >
                <label for="resulotion1">720p (HD)</label>
              </p>
          </div>
          <hr>
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
