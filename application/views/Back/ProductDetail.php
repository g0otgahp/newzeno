<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 animate-box">
        <div class="card">
          <div class="header">
            <h4 class="title">ลงทะเบียนสินค้า</h4>
          </div>
          <div class="content">
            <?php echo form_open_multipart('Admin/Product/UpdateProduct') ?>
            <input type="hidden" name="productId" value="<?php echo $data['product'][0]['productId'] ?>" >
            <input type="hidden" name="productImg" value="<?php echo $data['product'][0]['productImg'] ?>" >
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>บริษัท</label>
                  <input type="text" class="form-control" disabled placeholder="Company" value="Newzeno (ประเทศไทย)">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>ชื่อสินค้า</label>
                  <input type="text" class="form-control" name="productName" placeholder="กรอกชื่อสินค้า" value="<?php echo $data['product'][0]['productName'] ?>" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>รายละเอียด 1</label><small style="color:red"> (เทคโนโลยี่ : LCD , DLP , LASER)</small>
                  <input type="text" class="form-control" name="productSubdetail1" placeholder="กรอก รายละเอียกแบบย่อ" value="<?php echo $data['product'][0]['productSubdetail1'] ?>" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>รายละเอียด 2</label><small style="color:red"> (ความละเอียด : XGA , WXGA)</small>
                  <input type="text" class="form-control" name="productSubdetail2" placeholder="กรอก รายละเอียกแบบย่อ" value="<?php echo $data['product'][0]['productSubdetail2'] ?>" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>รายละเอียด 3</label><small style="color:red"> (ความสว่าง : 3,200 Lumens)</small>
                  <input type="text" class="form-control" name="productSubdetail3" placeholder="กรอก รายละเอียกแบบย่อ" value="<?php echo $data['product'][0]['productSubdetail3'] ?>" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>รายละเอียด 4</label><small style="color:red"> (ความคมชัด : 10,000:1)</small>
                  <input type="text" class="form-control" name="productSubdetail4" placeholder="กรอก รายละเอียกแบบย่อ" value="<?php echo $data['product'][0]['productSubdetail4'] ?>" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>รายละเอียด 5</label><small style="color:red"> (ช่องต่อ : HDMI , VGA , HDBASET)</small>
                  <input type="text" class="form-control" name="productSubdetail5" placeholder="กรอก รายละเอียกแบบย่อ" value="<?php echo $data['product'][0]['productSubdetail5'] ?>" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>รายละเอียด 6</label><small style="color:red"> (น้ำหนัก : 15.2kg)</small>
                  <input type="text" class="form-control" name="productSubdetail6" placeholder="กรอก รายละเอียกแบบย่อ" value="<?php echo $data['product'][0]['productSubdetail6'] ?>" required>
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
              <div class="col-md-12">
                <div class="form-group">
                  <label>รายละเอียด(แบบเต็ม)</label>
                  <textarea rows="5" class="form-control summernote" name="productDetail" placeholder="กรอกรายละเอียดแบบเต็ม" required><?php echo $data['product'][0]['productDetail'] ?></textarea>
                </div>
              </div>
            </div>
            <h4 align="center" style="color:green"><b>เป็นสินค้าแนะนำ</b></h4>
            <p><input type="checkbox" name="checkbox" class="form-control" <?php if ($data['product'][0]['productFav'] == 1) {
              echo "checked";
            }?>></p>
            <a href="<?php echo SITE_URL('Admin/Product/DeleteProduct/'.$data['product'][0]['productId']); ?>" class="btn btn-danger btn-fill pull-left" onClick="javascript:return confirm('ต้องการลบสินค้าใช่หรือไม่?')">ลบสินค้า</a>
            <button type="submit" class="btn btn-info btn-fill pull-right">ลงทะเบียนสินค้า</button>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>



      <?php echo form_close() ?>
    </div>
  </div>
</div>
