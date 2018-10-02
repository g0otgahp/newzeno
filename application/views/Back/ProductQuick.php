<div class="content">
  <div class="container-fluid">
    <div class="row">
      <?php echo form_open_multipart('Admin/Product/saveProduct') ?>

      <div class="col-md-12 animate-box">
        <div class="card">
          <div class="header">
            <h4 class="title">เพิ่มสินค้าใหม่</h4>
          </div>
          <div class="content">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>ชื่อสินค้า</label>
                  <input autocomplete="off" type="text" class="form-control" name="productName" placeholder="กรอกชื่อสินค้า" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>ราคา</label> <small style="color:red; font-size:10px;">ถ้าไม่ระบุจะแสดง ติดต่อสอบถาม แทนราคา</small>
                  <input type="number" class="form-control" name="productPrice" placeholder="กรอก ราคา">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>รูปภาพ(หลัก) <span style="color:red; font-size:11px;">*เลือกได้ภาพเดียว</span></label>
                  <input type="file" accept="image/*" name="productImg" class="form-control" required>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12 animate-box">
        <div class="card">
          <div class="header">
            <h4 class="title">เลือกกลุ่มสินค้า</h4>
          </div>
          <div class="content">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>ยี่ห้อสินค้า</label>
                  <select class="form-control select2-single" name="productBrandid" required>
                    <option value="">-เลือกยี่ห้อสินค้า-</option>
                    <option ng-repeat="brandRow in brand" value="{{brandRow.brandId}}">{{brandRow.brandName}}</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>กลุ่มสินค้า</label>
                  <select class="select2-single form-control" ng-model="productGroupid" ng-change="selectGroup()" name="productGroupid" required>
                    <option value="">-เลือกกลุ่มสินค้า-</option>
                    <option ng-repeat="groupRow in group" value="{{groupRow.categroupId}}">{{groupRow.categroupName}}</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>ประเภทสินค้า</label>
                  <select class="form-control select2-single" ng-model="productCateid" name="productCateid" required>
                    <option value="">-เลือกประเภทสินค้า-</option>
                    <option ng-repeat="categoryRow in category" value="{{categoryRow.cateId}}">{{categoryRow.cateName}}</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12 animate-box">
        <div class="card">
          <div class="header">
            <h4 class="title">กรองสินค้า</h4>
          </div>
          <div class="content">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>เทคโนโลยี่</label>
                  <select class="form-control select2-single" name="productTechId">
                    <option value="">-เลือกเทคโนโลยี่-</option>
                    <?php foreach ($SelectTech as $Tech): ?>
                      <option value="<?php echo $Tech['techId'] ?>"><?php echo $Tech['techName'] ?></option>
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
                      <option value="<?php echo $Resolution['resolutionId'] ?>"><?php echo $Resolution['resolutionName'] ?></option>
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
                      <option
                      ng-if="productGroupid == 4 || productGroupid == 5 || productGroupid == 6 || productGroupid == 7"
                      value="<?php echo $Size['SizeId'] ?>"><?php echo $Size['SizeName'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12 animate-box">
        <div class="card">
          <div class="header">
            <h4 class="title">รายละเอียดสินค้า</h4>
          </div>
          <div class="content">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>รายละเอียด 1 </label>
                  <input type="text" class="form-control" name="productSubdetail1" placeholder="รายละเอียด 1 แบบย่อ">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>รายละเอียด 2</label>
                  <input type="text" class="form-control" name="productSubdetail2" placeholder="รายละเอียด 2 แบบย่อ">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>รายละเอียด 3</label>
                  <input type="text" class="form-control" name="productSubdetail3" placeholder="รายละเอียด 3 แบบย่อ">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>รายละเอียด 4</label>
                  <input type="text" class="form-control" name="productSubdetail4" placeholder="รายละเอียด 4 แบบย่อ">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>รายละเอียด 5</label>
                  <input type="text" class="form-control" name="productSubdetail5" placeholder="รายละเอียด 5 แบบย่อ">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>รายละเอียด 6</label>
                  <input type="text" class="form-control" name="productSubdetail6" placeholder="รายละเอียด 6 แบบย่อ">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>รายละเอียด(แบบเต็ม)</label>
                  <textarea rows="5" class="form-control summernote" name="productDetail" placeholder="กรอกรายละเอียดแบบเต็ม"></textarea>
                </div>
                <h4 align="center" style="color:green"><b>เป็นสินค้าแนะนำ</b></h4>
                <p><input type="checkbox" name="checkbox" class="form-control"></p>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-success btn-fill btn-block loading" data-loading-text="<i class='fa fa-spinner fa-spin '></i> กำลังประมวลผล">ลงทะเบียนสินค้า</button>

      </div>

      <!-- <div class="col-md-4 animate-box">
        <div class="card">
          <div class="header">
            <h4 class="title">รูปภาพสินค้าหลัก</h4>
          </div>
          <div class="content">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>รูปภาพ(หลัก) <span style="color:red; font-size:11px;">*เลือกได้ภาพเดียว</span></label>
                  <input type="file" accept="image/*" name="productImg" class="form-control" required>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <!-- <div class="col-md-4 animate-box">
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
      </div>

      <div class="col-md-4 animate-box">
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
        </div> -->
      <!-- </div> -->



      <?php echo form_close() ?>
    </div>
  </div>
</div>
