<div class="content">
  <div class="container-fluid">
    <div class="row" >
      <div class="col-md-12 animate-box">
        <div class="card" style="padding:20px;">
          <?php echo form_open('Admin/Product/ProductSearch') ?>
          <div class="row">
            <div class="col-md-1">
              เลือกกลุ่ม :
            </div>
            <div class="col-md-2">
              <select class="form-control select2-single" name="Group">
                <option value="">-ทุกกลุ่ม-</option>
                <?php foreach ($group as $group): ?>
                  <option value="<?php echo $group['categroupId'] ?>" <?php if ($group['categroupId'] == @$select['group']) {
                    echo "selected";
                  } ?>><?php echo $group['categroupName'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-md-1">
              เลือกประเภท :
            </div>
            <div class="col-md-2">
              <select class="form-control select2-single" name="Category">
                <option value="">-ทุกประเภท-</option>
                <?php foreach ($category as $category): ?>
                  <option value="<?php echo $category['cateId'] ?>" <?php if ($category['cateId'] == @$select['cate']) {
                    echo "selected";
                  } ?>><?php echo $category['cateName'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-md-1">
              เลือกยี่ห้อ :
            </div>
            <div class="col-md-2">
              <select class="form-control select2-single" name="Brand">
                <option value="">-ทุกยี่ห้อ-</option>
                <?php foreach ($brand as $brand): ?>
                  <option value="<?php echo $brand['brandId'] ?>" <?php if ($brand['brandId'] == @$select['brand']) {
                    echo "selected";
                  } ?>><?php echo $brand['brandName'] ?></option>
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


      <?php if (count($product) == 0): ?>
        <div class="col-md-12 animate-box">
          <div class="card" style="padding:20px;" >
            <center>
            <p>ไม่พบสินค้า</p> <a href="<?php echo SITE_URL('Admin/Product/ProductForm')?>" class="btn btn-success" style="margin-bottom:20px;" >เพิ่มข้อมูลสินค้า</a>
          </center>
          </div>
        </div>
        <?php else: ?>
      <div class="col-md-12 animate-box">
        <div class="card" style="padding:20px;" >
          <a href="<?php echo SITE_URL('Admin/Product/ProductForm')?>" class="btn btn-success" style="margin-bottom:20px;" >เพิ่มข้อมูลสินค้า</a>
          <table class="table table-hover dataTable">
            <thead>
              <tr>
                <th width="7%">ลำดับ</th>
                <th>รูปภาพ</th>
                <th width="40%">ชื่อสินค้า</th>
                <th>แบรนด์</th>
                <th>ประเภทสินค้า</th>
                <th>ตัวเลือก</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=1; foreach ($product as $row): ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><img src="<?php echo BASE_URL('uploads/products/'.$row['productImg']);?>" class="img-thumbnail" width="100"></td>
                  <td><?php echo $row['productName'] ?> <?php if ($row['productFav'] == 1): ?>
                     <span class="glyphicon glyphicon-star" style="color:yellow;"></span>
                  <?php endif; ?></td>
                  <td><?php echo $row['brandName'] ?></td>
                  <td><?php echo $row['cateName'] ?></td>
                  <td>
                    <a href="<?php echo SITE_URL('Admin/Product/ProductDetail/'.$row['productId']); ?>" class="btn btn-info"><i class="pe-7s-paper-plane"></i>รายการทั้งหมด</a>
                  </td>
                </tr>
              <?php $i++; endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>


    <?php endif; ?>

    </div>
  </div>
  </div>
