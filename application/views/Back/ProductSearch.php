<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="row">
        <div class="col-md-3 animate-box">
          <div class="card" style="padding:20px;">
            <?php echo form_open('Admin/Search/ProductSearch'); ?>
            <div align="center">
              <button type="submit" class="btn btn-primary btn-fill btn-lg"><i class="fa fa-search"></i> ค้นหา</button>
            </div>

            <div class="form-check">
              <h4><b>ขนาดจอ (นิ้ว)</b></h4>
              <div class="row">
                <div class="col-md-5">
                  <input style="padding:15px;" type="number" class="form-control" name="Size-min" placeholder="ต่ำ" value="<?php echo @$keyword['Size-min'] ?>">
                </div>
                <div class="col-md-1">
                  -
                </div>
                <div class="col-md-5">
                  <input style="padding:15px;" type="number" class="form-control" name="Size-max" placeholder="สูง" value="<?php echo @$keyword['Size-max'] ?>">
                </div>
              </div>
            </div>

            <!-- Group -->
            <hr>
            <div class="form-check">
              <h4><b>กลุ่มสินค้า</b></h4>
              <?php foreach ($group as $key5): ?>
                <p>
                  <input class="form-check-input" type="checkbox" name="groupbox[]" value="<?php echo $key5['categroupId'] ?>"
                  style="margin-bottom:5px;" id="group<?php echo $key5['categroupId'] ?>"
                  <?php if (isset($keyword['groupbox'])): ?>
                    <?php foreach ($keyword['groupbox'] as $check): ?>
                      <?php if ($check == $key5['categroupId']): ?>
                        <?php echo "checked"; ?>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  <?php endif; ?>
                  >
                  <?php $count = $this->db->where('productGroupid',$key5['categroupId'])->where('productStatus',1)->get('product')->num_rows(); ?>
                  <label for="group<?php echo $key5['categroupId'] ?>"><?php echo $key5['categroupName'] ?> (<?php echo $count; ?>)</label>
                </p>
              <?php endforeach; ?>
            </div>


            <!-- Category -->
            <hr>
            <div class="form-check">
              <h4><b>ประเภทสินค้า</b></h4>
              <?php foreach ($category as $key1): ?>
                <p>
                  <input class="form-check-input" type="checkbox" name="catebox[]" value="<?php echo $key1['cateId'] ?>"
                  style="margin-bottom:5px;" id="Category<?php echo $key1['cateId'] ?>"
                  <?php if (isset($keyword['catebox'])): ?>
                    <?php foreach ($keyword['catebox'] as $check): ?>
                      <?php if ($check == $key1['cateId']): ?>
                        <?php echo "checked"; ?>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  <?php endif; ?>
                  >
                  <?php $count = $this->db->where('productCateid',$key1['cateId'])->where('productStatus',1)->get('product')->num_rows(); ?>
                  <label for="Category<?php echo $key1['cateId'] ?>"><?php echo $key1['cateName'] ?> (<?php echo $count; ?>)</label>
                </p>
              <?php endforeach; ?>
            </div>

            <!-- Brand -->
            <hr>
            <div class="form-check">
              <h4><b>แบรนด์</b></h4>
              <?php foreach ($brand as $key2): ?>
                <p>
                  <input class="form-check-input" type="checkbox" name="brandbox[]" value="<?php echo $key2['brandId'] ?>"
                  style="margin-bottom:5px;" id="brand<?php echo $key2['brandId'] ?>"
                  <?php if (isset($keyword['brandbox'])): ?>
                    <?php foreach ($keyword['brandbox'] as $check): ?>
                      <?php if ($check == $key2['brandId']): ?>
                        <?php echo "checked"; ?>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  <?php endif; ?>
                  >
                  <?php $count = $this->db->where('productBrandid',$key2['brandId'])->where('productStatus',1)->get('product')->num_rows(); ?>
                  <label for="brand<?php echo $key2['brandId'] ?>"><?php echo $key2['brandName'] ?> (<?php echo $count; ?>)</label>
                </p>
              <?php endforeach; ?>
            </div>


            <!-- Tech -->
            <hr>
            <div class="form-check">
              <h4><b>เทคโนโลยี</b></h4>
              <?php foreach ($tech as $key4): ?>
                <p>
                  <input class="form-check-input" type="checkbox" name="tech[]" value="<?php echo $key4['techId'] ?>"
                  style="margin-bottom:5px;" id="tech<?php echo $key4['techId'] ?>"
                  <?php if (isset($keyword['tech'])): ?>
                    <?php foreach ($keyword['tech'] as $check): ?>
                      <?php if ($check == $key4['techId']): ?>
                        <?php echo "checked"; ?>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  <?php endif; ?>
                  >
                  <?php $count = $this->db->where('productTechId',$key4['techId'])->where('productStatus',1)->get('product')->num_rows(); ?>
                  <label for="tech<?php echo $key4['techId'] ?>"><?php echo $key4['techName'] ?> (<?php echo $count; ?>)</label>
                </p>
              <?php endforeach; ?>
            </div>




            <!-- Resulotion -->
            <hr>
            <div class="form-check">
              <h4><b>ความละเอียด</b></h4>
              <?php foreach ($resolution as $key3): ?>
                <p>
                  <input class="form-check-input" type="checkbox" name="resulotion[]" value="<?php echo $key3['resolutionId'] ?>"
                  style="margin-bottom:5px;" id="resulotion<?php echo $key3['resolutionId'] ?>"
                  <?php if (isset($keyword['resulotion'])): ?>
                    <?php foreach ($keyword['resulotion'] as $check): ?>
                      <?php if ($check == $key3['resolutionId']): ?>
                        <?php echo "checked"; ?>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  <?php endif; ?>
                  >
                  <?php $count = $this->db->where('productResolution',$key3['resolutionId'])->where('productStatus',1)->get('product')->num_rows(); ?>
                  <label for="resulotion<?php echo $key3['resolutionId'] ?>"><?php echo $key3['resolutionName'] ?> (<?php echo $count; ?>)</label>
                </p>
              <?php endforeach; ?>
            </div>


            <hr>
            <div class="form-check">
              <h4><b>ราคา</b></h4>
              <input type="number" class="form-control" name="min" placeholder="ราคาต่ำสุด" value="<?php echo @$keyword['min'] ?>">
              <input type="number" class="form-control" name="max" placeholder="ราคาสูงสุด" value="<?php echo @$keyword['max'] ?>">
            </div>
            <hr>
            <div class="form-check">
              <h4><b>เรียงราคา</b></h4>
              <p>
                <select name="sortbyprice" class="form-control">
                  <option value="">-เลือกเรียงราคา-</option>
                  <option value="DESC" <?php if (@$keyword['sortbyprice'] == "DESC") {
                    echo "selected";
                  } ?> >เรียงราคา สูง > ต่ำ</option>
                  <option value="ASC" <?php if (@$keyword['sortbyprice'] == "ASC") {
                    echo "selected";
                  } ?>>เรียงราคา ต่ำ > สูง</option>
                </select>
              </p>
            </div>
            <?php echo form_close(); ?>
          </div>
        </div>



        <!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
        <?php if (count($product) == 0): ?>
          <div class="col-md-9 animate-box">
            <div class="card" style="padding:20px;">
              <center>
                <p>ไม่พบสินค้าที่ค้นหา</p>
              </center>
            </div>
          </div>

        <?php else: ?>
          <div class="col-md-9 animate-box">
            <div class="card" style="padding:20px;" >
              <table class="table table-hover dataTable">
                <thead>
                  <tr>
                    <th width="5%">ลำดับ</th>
                    <th>รูปภาพ</th>
                    <th width="25%">ชื่อสินค้า</th>
                    <th width="20%">แบรนด์</th>
                    <th width="20%">ประเภทสินค้า</th>
                    <th width="50%">แก้ไขสินค้า</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1; foreach ($product as $row): ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><img src="<?php echo BASE_URL('uploads/Products/'.$row['productImg']);?>" class="img-thumbnail" width="100"></td>
                      <td><?php echo $row['productName'] ?> <?php if ($row['productFav'] == 1): ?>
                        <span class="glyphicon glyphicon-star" style="color:yellow;"></span>
                      <?php endif; ?></td>
                      <td><?php echo $row['brandName'] ?></td>
                      <td><?php echo $row['cateName'] ?></td>
                      <td>
                        <a href="<?php echo SITE_URL('Admin/Product/ProductDetail/'.$row['productId']); ?>" class="btn btn-primary btn-xs"><i class="pe-7s-note2"></i> รายละเอียด</a>
                      </td>
                    </tr>
                    <?php $i++; endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      <?php endif; ?>
    </div>
  </div>
