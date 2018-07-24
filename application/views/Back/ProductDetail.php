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
              <div class="col-md-12">
                <div class="form-group">
                  <label>รายละเอียด(แบบย่อ)</label>
                  <input type="text" class="form-control" name="productSubdetail" placeholder="กรอก รายละเอียกแบบย่อ" value="<?php echo $data['product'][0]['productSubdetail'] ?>" required>
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

        <div class="col-md-12 animate-box">
        <div class="card">
          <div class="header">
            <h4 class="title">เอกสารเพิ่มเติม</h4>
          </div>
          <div class="content">
            <div class="row">
              <div class="form-group">
                <div class="col-md-4">
                <label>เอกสาร <span style="color:red; font-size:11px;">*PDF เท่านั้น</span></label>
                <input type="file" accept="application/pdf" name="Doc[]" class="form-control" multiple>
                <br>
              </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                    <table class="table table-hover dataTable">
                      <thead>
                        <tr>
                          <th width="20px;">ลำดับ</th>
                          <th>ชื่อ</th>
                          <th>ตัวเลือก</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1; foreach ($data['document'] as $document): ?>
                          <tr>
                            <td><?php echo $i ?></td>
                            <td><a href="<?php echo BASE_URL('uploads/pdf/'.$document['docFilename']); ?>" target="_blank"><?php echo $document['docName'] ?></a></td>
                            <td>
                              <a href="<?php echo SITE_URL('Admin/Product/DeleteDocument/'.$document['docId']."/".$data['product'][0]['productId']);?>" class="btn btn-info btn-danger"
                              onClick="javascript: return confirm('ต้องการลบเอกสารนี้ใช่หรือไม่')">ลบ
                            </a>
                          </td>
                        </tr>
                        <?php $i++; endforeach; ?>
                      </tbody>
                    </table>

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
              <div class="col-md-offset-2 col-md-8">
                <div class="form-group">
                  <p><a target="_blank" href="<?php echo BASE_URL('uploads/products/'.$data['product'][0]['productImg']);?>"><img src="<?php echo BASE_URL('uploads/products/'.$data['product'][0]['productImg']);?>" class="img-thumbnail" width="300"></a></p>
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
            <h4 class="title">รูปภาพสินค้าเพิ่มเติม</h4>
          </div>
          <div class="content">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="row">
                    <?php foreach ($data['productImage'] as $row): ?>
                      <div class="col-md-4">
                        <span><a target="_blank" href="<?php echo BASE_URL('uploads/products/'.$row['proimageName']);?>"><img src="<?php echo BASE_URL('uploads/products/'.$row['proimageName']);?>" width="100" height="80"></a></span>
                        <a href="<?php echo SITE_URL('Admin/Product/DeleteSubImage/'.$row['proimageId']."/".$data['product'][0]['productId']);?>" class="btn-sm" onClick="javascript:return confirm('ต้องการลบรูปภานี้ใช่หรือไม่')" style="color:red;">X</a>
                      </div>
                    <?php endforeach; ?>
                  </div>
                  <br>
                  <label>รูปภาพ(เพิ่มเติม) <span style="color:red; font-size:11px;">*เลือกได้มากกว่า 1 ภาพ</span></label>
                  <input type="file" accept="image/*" name="SubImg[]" class="form-control" multiple>
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
