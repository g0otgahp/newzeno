<div class="content">
  <div class="container-fluid">
    <div class="row" >
      <div class="col-md-12 animate-box">
        <div class="card" style="padding:20px;">
          <div class="row">
            <div class="col-md-1">
              เลือกประเภท :
            </div>
            <div class="col-md-3">
              <?php echo form_open('Admin/Product/ProductSearch') ?>
              <select class="form-control select2-single" name="Position">
                <option value="">-เลือกประเภทสินค้า-</option>
                <?php foreach ($category as $category): ?>
                  <option value="<?php echo $category['cateId'] ?>"><?php echo $category['cateName'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-md-1">
              เลือกยี่ห้อ :
            </div>
            <div class="col-md-3">
              <select class="form-control select2-single" name="Brand">
                <option value="">-เลือกยี่ห้อสินค้า-</option>
                <?php foreach ($brand as $brand): ?>
                  <option value="<?php echo $brand['brandId'] ?>"><?php echo $brand['brandName'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-md-2">
              <button type="submit" class="btn btn-primary btn-fill pull-right"><i class="fa fa-search"></i>ค้นหา</button>
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12 animate-box">
        <div class="card" style="padding:20px;" >
          <a href="<?php echo SITE_URL('')?>" class="btn btn-success" style="margin-bottom:20px;" >เพิ่มข้อมูลสินค้า</a>
          <table class="table table-hover dataTable">
            <thead>
              <tr>
                <th width="7%">ลำดับ</th>
                <th>รูปภาพ</th>
                <th>ชื่อสินค้า</th>
                <th>จำนวนคงเหลือ</th>
                <th>ตัวเลือก</th>
              </tr>
            </thead>
            <tbody>
              <?php for ($i=1; $i < 4; $i++) {?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><img src="<?php echo BASE_URL('assets/back/img/26012561.jpeg');?>" class="img-thumbnail" width="150"></td>
                  <td>Monitor Sharp</td>
                  <td style="color:red">9</td>
                  <td><button class="btn btn-info"><i class="pe-7s-paper-plane"></i>รายการทั้งหมด</button></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  </div>
