          <div class="content">
            <?php echo form_open_multipart('Admin/Product/UpdateProduct') ?>
            <input type="hidden" name="productId" value="<?php echo $data['product'][0]['productId'] ?>" >

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>ชื่อสินค้า</label>
                  <p class="pull-right">
                  <label style="color:green;">เป็นสินค้าแนะนำ</label>
                  <input type="checkbox" name="checkbox" <?php if ($data['product'][0]['productFav'] == 1) {
                    echo "checked";
                  }?>>
                </p>
                  <input type="text" class="form-control" name="productName" placeholder="กรอกชื่อสินค้า" value="<?php echo $data['product'][0]['productName'] ?>" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">

                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>รายละเอียด 1</label><small style="color:red"> (เทคโนโลยี่ : LCD , DLP , LASER)</small>
                  <input type="text" class="form-control" name="productSubdetail1" placeholder="กรอก รายละเอียกแบบย่อ" value="<?php echo $data['product'][0]['productSubdetail1'] ?>" >
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>รายละเอียด 2</label><small style="color:red"> (ความละเอียด : XGA , WXGA)</small>
                  <input type="text" class="form-control" name="productSubdetail2" placeholder="กรอก รายละเอียกแบบย่อ" value="<?php echo $data['product'][0]['productSubdetail2'] ?>" >
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>รายละเอียด 3</label><small style="color:red"> (ความสว่าง : 3,200 Lumens)</small>
                  <input type="text" class="form-control" name="productSubdetail3" placeholder="กรอก รายละเอียกแบบย่อ" value="<?php echo $data['product'][0]['productSubdetail3'] ?>" >
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>รายละเอียด 4</label><small style="color:red"> (ความคมชัด : 10,000:1)</small>
                  <input type="text" class="form-control" name="productSubdetail4" placeholder="กรอก รายละเอียกแบบย่อ" value="<?php echo $data['product'][0]['productSubdetail4'] ?>" >
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>รายละเอียด 5</label><small style="color:red"> (ขนาด : 10 x 5 x 7 ซม.)</small>
                  <input type="text" class="form-control" name="productSubdetail5" placeholder="กรอก รายละเอียกแบบย่อ" value="<?php echo $data['product'][0]['productSubdetail5'] ?>" >
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>รายละเอียด 6</label><small style="color:red"> (น้ำหนัก : 15.2 กิโลกรัม)</small>
                  <input type="text" class="form-control" name="productSubdetail6" placeholder="กรอก รายละเอียกแบบย่อ" value="<?php echo $data['product'][0]['productSubdetail6'] ?>" >
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>ราคา</label>
                  <input type="number" class="form-control" name="productPrice" placeholder="กรอก ราคา" value="<?php echo $data['product'][0]['productPrice'] ?>" required>
                </div>
              </div>
            </div>

            <hr>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>กลุ่มสินค้า</label>
                  <select class="form-control select2-single" name="productGroupid" required>
                    <?php foreach ($group as $group): ?>
                      <option value="<?php echo $group['categroupId'] ?>" <?php if ($group['categroupId'] == $data['product'][0]['productGroupid']) {
                        echo "selected";
                      } ?>><?php echo $group['categroupName'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>ประเภทสินค้า</label>
                  <select class="form-control select2-single" name="productCateid" required>
                    <?php foreach ($category as $category): ?>
                      <option value="<?php echo $category['cateId'] ?>" <?php if ($category['cateId'] == $data['product'][0]['productCateid']) {
                        echo "selected";
                      } ?>><?php echo $category['cateName'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>ยี่ห้อสินค้า</label>
                  <select class="form-control select2-single" name="productBrandid" required>
                    <?php foreach ($brand as $brand): ?>
                      <option value="<?php echo $brand['brandId'] ?>" <?php if ($brand['brandId'] == $data['product'][0]['productBrandid']) {
                        echo "selected";
                      } ?>><?php echo $brand['brandName'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
            </div>

              <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>เทคโนโลยี่</label>
                  <select class="form-control select2-single" name="productTechId">
                    <option value="">-เลือกเทคโนโลยี่-</option>
                    <?php foreach ($SelectTech as $Tech): ?>
                      <option value="<?php echo $Tech['techId'] ?>"<?php if ($Tech['techId'] == $data['product'][0]['productTechId']) {
                        echo "selected";
                      } ?>><?php echo $Tech['techName'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>ความละเอียด</label>
                  <select class="form-control select2-single" name="productResolution">
                    <option value="">-เลือกความละเอียด-</option>
                    <?php foreach ($SelectResolution as $Resolution): ?>
                      <option value="<?php echo $Resolution['resolutionId'] ?>"<?php if ($Resolution['resolutionId'] == $data['product'][0]['productResolution']) {
                        echo "selected";
                      } ?>><?php echo $Resolution['resolutionName'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>ขนาดจอ (ทีวี)</label>
                  <select class="form-control select2-single" name="productSizeId">
                    <option value="">-เลือกขนาดจอ (ทีวี)-</option>
                    <?php foreach ($SelectSize as $Size): ?>
                      <option value="<?php echo $Size['SizeId'] ?>"<?php if ($Size['SizeId'] == $data['product'][0]['productSizeId']) {
                        echo "selected";
                      } ?>><?php echo $Size['SizeName'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
          </div>
            <button type="submit" class="btn btn-warning btn-fill pull-right">ลงทะเบียนแก้ไขสินค้า</button>
            <div class="clearfix"></div>
          </div>
      <?php echo form_close() ?>
