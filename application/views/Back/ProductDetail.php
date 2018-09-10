<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 animate-box">
        <div class="card">

          <div class="container-fluid">
            <h2><?php echo $data['product'][0]['brandName'] ?> - <?php echo $data['product'][0]['productName'] ?>
              <a href="<?php echo SITE_URL('Admin/Product/DeleteProduct/'.$data['product'][0]['productId']); ?>" style="color:red; font-size:11px;" onClick="javascript:return confirm('ต้องการลบสินค้าใช่หรือไม่?')">ลบสินค้า</a>
            </h2>
            <hr>
            <ul class="nav nav-pills">
              <li class="active"><a class="btn" data-toggle="pill" href="#menu1">รายละเอียดทั่วไป</a></li>
              <li><a class="btn" data-toggle="pill" href="#menu2">รูปภาพเพิ่มเติม</a></li>
              <li><a class="btn" data-toggle="pill" href="#menu3">เอกสารเพิ่มเติม</a></li>
              <li><a class="btn" data-toggle="pill" href="#menu4">รายละเอียดเต็ม</a></li>
            </ul>
            <hr>
            <div class="tab-content">
              <div id="menu1" class="tab-pane fade active in">
                <?php $this->load->view('Back/ProductSelect'); ?>
              </div>
              <div id="menu2" class="tab-pane fade in">
                <?php $this->load->view('Back/ProductImage'); ?>
              </div>
              <div id="menu3" class="tab-pane fade in">
                <?php $this->load->view('Back/ProductDocument'); ?>
              </div>
              <div id="menu4" class="tab-pane fade in">
                <?php echo form_open_multipart('Admin/Product/UpdateProduct') ?>
                <input type="hidden" name="productId" value="<?php echo $data['product'][0]['productId'] ?>" >
                <div class="row animate-box">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>รายละเอียด(แบบเต็ม)</label>
                      <textarea rows="5" class="form-control summernote" name="productDetail" placeholder="กรอกรายละเอียดแบบเต็ม"><?php echo $data['product'][0]['productDetail'] ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning btn-fill pull-right">ลงทะเบียนแก้ไขรายละเอียด</button>
                  </div>
                </div>
                <?php echo form_close() ?>
              </div>
            </div>
          </div>

        </div>
      </div>
      <?php echo form_close() ?>
    </div>
  </div>
</div>
