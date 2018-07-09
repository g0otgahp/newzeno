<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 animate-box">
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
                  <input type="text" class="form-control" name="productName" placeholder="กรอกชื่อสินค้า" value="<?php echo $data['product'][0]['productName'] ?>" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>รายละเอียด(แบบย่อ)</label>
                  <input type="text" class="form-control" name="productSubdetail" placeholder="กรอก รายละเอียกแบบย่อ" value="<?php echo $data['product'][0]['productSubdetail'] ?>" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>ประเภทสินค้า</label>
                  <select class="form-control select2-single" name="productCateid" required>
                    <option value="<?php echo $data['product'][0]['cateId'] ?>"><?php echo $data['product'][0]['cateName'] ?></option>
                    <?php foreach ($category as $category): ?>
                      <option value="<?php echo $category['cateId'] ?>"><?php echo $category['cateName'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>ยี่ห้อสินค้า</label>
                  <select class="form-control select2-single" name="productBrandid" required>
                    <option value="<?php echo $data['product'][0]['brandId'] ?>"><?php echo $data['product'][0]['brandName'] ?></option>
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
                  <textarea rows="5" class="form-control" name="productDetail" placeholder="กรอกรายละเอียดแบบเต็ม" required><?php echo $data['product'][0]['productDetail'] ?></textarea>
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-info btn-fill pull-right">ลงทะเบียนสินค้า</button>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>

      <div class="col-md-4 animate-box">
        <div class="card">
          <div class="header">
            <h4 class="title">รูปภาพสินค้า</h4>
          </div>
          <div class="content">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <p><img src="<?php echo BASE_URL('uploads/products/'.$data['product'][0]['productImg']);?>" class="img-thumbnail" width="300"></p>
                  <label>รูปภาพ(หลัก) <span style="color:red; font-size:11px;">*เลือกได้ภาพเดียว</span></label>
                  <input type="file" accept="image/*" name="productImg" class="form-control">
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="row">
                    <?php foreach ($data['productImage'] as $row): ?>
                      <div class="col-md-4">
                        <a href="#" class="btn-sm" onClick="javascript:return confirm('ต้องการลบรูปภานี้ใช่หรือไม่')" style="color:red;">X</a>
                        <span><img src="<?php echo BASE_URL('uploads/products/'.$row['proimageName']);?>" class="img-thumbnail" width="100"></span>
                      </div>
                    <?php endforeach; ?>
                  </div>
                  <br>
                  <label>รูปภาพ(เพิ่มเติม) <span style="color:red; font-size:11px;">*เลือกได้มากกว่า 1 ภาพ</span></label>
                  <input type="file" accept="image/*" name="SubImg" class="form-control" multiple>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php echo form_close() ?>
    </div>
  </div>
</div>