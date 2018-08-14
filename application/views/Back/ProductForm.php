<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 animate-box">
        <div class="card">
          <div class="header">
            <h4 class="title">ลงทะเบียนสินค้า</h4>
          </div>
          <div class="content">
            <?php echo form_open_multipart('Admin/Product/saveProduct') ?>
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
                  <input type="text" class="form-control" name="productName" placeholder="กรอกชื่อสินค้า" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>รายละเอียด 1 </label><small style="color:red"> (เทคโนโลยี่ : LCD , DLP , LASER)</small>
                  <input type="text" class="form-control" name="productSubdetail1" placeholder="รายละเอียด 1 แบบย่อ">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>รายละเอียด 2</label><small style="color:red"> (ความละเอียด : XGA , WXGA)</small>
                  <input type="text" class="form-control" name="productSubdetail2" placeholder="รายละเอียด 2 แบบย่อ">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>รายละเอียด 3</label><small style="color:red"> (ความสว่าง : 3,200 Lumens)</small>
                  <input type="text" class="form-control" name="productSubdetail3" placeholder="รายละเอียด 3 แบบย่อ">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>รายละเอียด 4</label><small style="color:red"> (ความคมชัด : 10,000:1)</small>
                  <input type="text" class="form-control" name="productSubdetail4" placeholder="รายละเอียด 4 แบบย่อ">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>รายละเอียด 5</label><small style="color:red"> (ขนาด : 10 x 5 x 7 ซม.)</small>
                  <input type="text" class="form-control" name="productSubdetail5" placeholder="รายละเอียด 5 แบบย่อ">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>รายละเอียด 6</label><small style="color:red"> (น้ำหนัก : 15.2 กิโลกรัม)</small>
                  <input type="text" class="form-control" name="productSubdetail6" placeholder="รายละเอียด 6 แบบย่อ">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>ราคา</label>
                  <input type="number" class="form-control" name="productPrice" placeholder="กรอก ราคา" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>กลุ่มสินค้า</label>
                  <select class="form-control select2-single" name="productGroupid" required>
                    <option value="">-เลือกกลุ่มสินค้า-</option>
                    <?php foreach ($group as $group): ?>
                      <option value="<?php echo $group['categroupId'] ?>"><?php echo $group['categroupName'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>ประเภทสินค้า</label>
                  <select class="form-control select2-single" name="productCateid" required>
                    <option value="">-เลือกประเภทสินค้า-</option>
                    <?php foreach ($category as $category): ?>
                      <option value="<?php echo $category['cateId'] ?>"><?php echo $category['cateName'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>ยี่ห้อสินค้า</label>
                  <select class="form-control select2-single" name="productBrandid" required>
                    <option value="">-เลือกยี่ห้อสินค้า-</option>
                    <?php foreach ($brand as $brand): ?>
                      <option value="<?php echo $brand['brandId'] ?>"><?php echo $brand['brandName'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>รายละเอียด(แบบเต็ม)</label>
                  <textarea rows="5" class="form-control summernote" name="productDetail" placeholder="กรอกรายละเอียดแบบเต็ม"></textarea>
                </div>
              </div>
            </div>
            <h4 align="center" style="color:green"><b>เป็นสินค้าแนะนำ</b></h4>
            <p><input type="checkbox" name="checkbox" class="form-control"></p>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>

      <div class="col-md-12 animate-box">
        <div class="card">
          <div class="header">
            <h4 class="title">เอกสารเพิ่มเติม</h4>
          </div>
          <div class="content">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>เอกสาร <span style="color:red; font-size:11px;">*PDF เท่านั้น</span></label>
                  <input type="file" accept="application/pdf" name="Doc[]" class="form-control" multiple>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 animate-box">
        <div class="card">
          <div class="header">
            <h4 class="title">รูปภาพสินค้าหลัก</h4>
          </div>
          <div class="content">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>รูปภาพ(หลัก) <span style="color:red; font-size:11px;">*เลือกได้ภาพเดียว</span></label>
                  <input type="file" accept="image/*" name="productImg" class="form-control">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 animate-box">
        <div class="card">
          <div class="header">
            <h4 class="title">รูปภาพ(เพิ่มเติม)</h4>
          </div>
          <div class="content">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>รูปภาพ(เพิ่มเติม) <span style="color:red; font-size:11px;">*เลือกได้มากกว่า 1 ภาพ</span></label>
                  <input type="file" accept="image/*" name="SubImg[]" class="form-control" multiple>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-info btn-fill pull-right">ลงทะเบียนสินค้า</button>
      </div>



      <?php echo form_close() ?>
    </div>
  </div>
</div>
