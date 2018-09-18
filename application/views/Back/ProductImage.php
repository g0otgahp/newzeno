
    <?php echo form_open_multipart('Admin/Product/UpdateImageProduct') ?>
    <div class="row">
      <div class="col-md-12 animate-box">
          <div class="header">
            <button type="submit" class="btn btn-warning btn-fill">ลงทะเบียนรูปสินค้า</button>
          </div>
          <div class="content">

            <input type="hidden" name="productId" value="<?php echo $data['product'][0]['productId'] ?>" >
            <input type="hidden" name="productImg" value="<?php echo $data['product'][0]['productImg'] ?>" >

          </div>
      </div>
    </div>

      <div class="col-md-6 animate-box">
          <div class="header">
            <h4 class="title">รูปภาพสินค้าหลัก</h4>
          </div>
          <div class="content">
            <div class="row">
              <div class="col-md-offset-2 col-md-8">
                <div class="form-group">
                  <p><a target="_blank" href="<?php echo BASE_URL('uploads/Products/'.$data['product'][0]['productImg']);?>"><img src="<?php echo BASE_URL('uploads/Products/'.$data['product'][0]['productImg']);?>" class="img-thumbnail" width="300"></a></p>
                  <label>รูปภาพ(หลัก) <span style="color:red; font-size:11px;">*เลือกได้ภาพเดียว</span></label>
                  <input type="file" accept="image/*" name="productImg" class="form-control">
                </div>
              </div>
            </div>
          </div>
      </div>


      <div class="col-md-6 animate-box">
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
                        <span><a target="_blank" href="<?php echo BASE_URL('uploads/Products/'.$row['proimageName']);?>"><img src="<?php echo BASE_URL('uploads/Products/'.$row['proimageName']);?>" width="100" height="80"></a></span>
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


      <?php echo form_close() ?>
