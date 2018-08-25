<div class="container">
  <div class="row">
    <div class="col-md-12">
      <!-- Sidebar ================================================== -->
      <div id="sidebar" class="col-md-3">
        <!-- <div class="well well-small"><a id="myCart" href="#"><img src="<?php echo BASE_URL()?>/assets/themes/images/ico-cart.png" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div> -->
        <ul id="productlist" class="nav nav-tabs nav-stacked">
          <?php $havecate = $this->uri->segment(4); if (isset($havecate)): ?>
            <?php echo form_open('Product/ShowProductFind/'.$GroupSelect[0]['categroupId']."/".$CateSelect[0]['cateId']."#productlist"); ?>
            <?php else: ?>
              <?php echo form_open('Home/CategoryFind/'.$GroupSelect[0]['categroupId']."#productlist"); ?>
          <?php endif; ?>
          <div class="form-check">
            <h4><b>ค้นหา</b></h4>
            <p>
              <input style="padding:15px;" class="form-control" type="text" name="wordsearch" placeholder="ค้นหาชื่อสินค้า" value="<?php echo @$keyword['wordsearch'] ?>">
            </p>
          </div>

          <!-- Brand -->
          <?php if (!empty($Filter['Brand'])): ?>
          <hr>
          <div class="form-check">
            <h4><b>แบรนด์</b></h4>
              <?php foreach ($Filter['Brand'] as $key2): ?>
              <p>
                <input class="form-check-input" type="checkbox" name="brandbox[]" value="<?php echo $key2['brandId'] ?>"
                style="margin-bottom:5px;" id="brand<?php echo $key2['brandId'] ?>"
                <?php if (isset($keyword['brandbox'])): ?>
                  <?php foreach ($keyword['brandbox'] as $check): ?>
                    <?php if ($check == $key2['brandId']): ?>
                      <?php echo "checked"; ?>
                    <?php endif; ?>
                  <?php endforeach; ?>
                <?php endif; ?>
                >
                <label for="brand<?php echo $key2['brandId'] ?>"><?php echo $key2['brandName'] ?></label>
              </p>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

        <!-- Tech -->
        <?php if (!empty($Filter['Tech'])): ?>
        <hr>
        <div class="form-check">
          <h4><b>เทคโนโลยี</b></h4>
            <?php foreach ($Filter['Tech'] as $key4): ?>
            <p>
              <input class="form-check-input" type="checkbox" name="tech[]" value="<?php echo $key4['techId'] ?>"
              style="margin-bottom:5px;" id="tech<?php echo $key4['techId'] ?>"
              <?php if (isset($keyword['tech'])): ?>
                <?php foreach ($keyword['tech'] as $check): ?>
                  <?php if ($check == $key4['techId']): ?>
                    <?php echo "checked"; ?>
                  <?php endif; ?>
                <?php endforeach; ?>
              <?php endif; ?>
              >
              <label for="tech<?php echo $key4['techId'] ?>"><?php echo $key4['techName'] ?></label>
            </p>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

          <!-- Category -->
          <?php if (!empty($Filter['Category'])): ?>
          <hr>
          <div class="form-check">
            <h4><b>ประเภทสินค้า</b></h4>
              <?php foreach ($Filter['Category'] as $key1): ?>
              <p>
                <input class="form-check-input" type="checkbox" name="catebox[]" value="<?php echo $key1['cateId'] ?>"
                style="margin-bottom:5px;" id="Category<?php echo $key1['cateId'] ?>"
                <?php if (isset($keyword['catebox'])): ?>
                  <?php foreach ($keyword['catebox'] as $check): ?>
                    <?php if ($check == $key1['cateId']): ?>
                      <?php echo "checked"; ?>
                    <?php endif; ?>
                  <?php endforeach; ?>
                <?php endif; ?>
                >
                <label for="Category<?php echo $key1['cateId'] ?>"><?php echo $key1['cateName'] ?></label>
              </p>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>


          <!-- Resulotion -->
          <?php if (!empty($Filter['Resolution'])): ?>
          <hr>
          <div class="form-check">
            <h4><b>ความละเอียด</b></h4>
              <?php foreach ($Filter['Resolution'] as $key3): ?>
              <p>
                <input class="form-check-input" type="checkbox" name="resulotion[]" value="<?php echo $key3['resolutionId'] ?>"
                style="margin-bottom:5px;" id="resulotion<?php echo $key3['resolutionId'] ?>"
                <?php if (isset($keyword['resulotion'])): ?>
                  <?php foreach ($keyword['resulotion'] as $check): ?>
                    <?php if ($check == $key3['resolutionId']): ?>
                      <?php echo "checked"; ?>
                    <?php endif; ?>
                  <?php endforeach; ?>
                <?php endif; ?>
                >
                <label for="resulotion<?php echo $key3['resolutionId'] ?>"><?php echo $key3['resolutionName'] ?></label>
              </p>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>



      <!-- Size -->
      <?php if (!empty($Filter['Size'])): ?>
      <hr>
      <div class="form-check">
        <h4><b>ขนาด</b></h4>
          <?php foreach ($Filter['Resolution'] as $key5): ?>
          <p>
            <input class="form-check-input" type="checkbox" name="Size[]" value="<?php echo $key5['SizeId'] ?>"
            style="margin-bottom:5px;" id="Size<?php echo $key5['SizeId'] ?>"
            <?php if (isset($keyword['Size'])): ?>
              <?php foreach ($keyword['Size'] as $check): ?>
                <?php if ($check == $key5['SizeId']): ?>
                  <?php echo "checked"; ?>
                <?php endif; ?>
              <?php endforeach; ?>
            <?php endif; ?>
            >
            <label for="Size<?php echo $key5['SizeId'] ?>"><?php echo $key5['SizeName'] ?></label>
          </p>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>

          <hr>
          <div class="form-check">
            <h4><b>ราคา</b></h4>
            <input style="padding:15px;" type="number" class="form-control" name="min" placeholder="ราคาต่ำสุด" value="<?php echo @$keyword['min'] ?>">
            <input style="padding:15px;" type="number" class="form-control" name="max" placeholder="ราคาสูงสุด" value="<?php echo @$keyword['max'] ?>">
          </div>
          <hr>
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
          <div class="form-check" align="center">
            <button type="submit" class="btn btn-warning btn-large">ค้นหาที่เลือก</button>
          </div>
          <?php echo form_close(); ?>
        </ul>
      </div>
