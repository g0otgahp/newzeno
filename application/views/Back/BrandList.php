<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 animate-box">
        <div class="card" style="padding:20px;">
          <button type="button" class="btn btn-success" style="margin-bottom:20px;" data-toggle="modal" data-target="#RegisterBrand">เพิ่มแบรนด์</button>
          <table class="table table-hover dataTable">
            <thead>
              <tr>
                <th width="20%">รูปภาพ</th>
                <th>ชื่อแบรนด์</th>
                <th>ตัวเลือก</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($BrandList as $row):?>
                <tr>
                  <td><img src="<?php echo BASE_URL('uploads/logo/'.$row['brandImg']);?>" class="img-thumbnail" width="100"></td>
                  <td><?php echo $row['brandName']?></td>
                  <td>
                    <button class="btn btn-warning" data-toggle="modal" data-target="#updateBrand<?php echo $row['brandId']?>">แก้ไข</button>
                    <a href="<?php echo SITE_URL('Admin/Brand/DeleteBrand/'.$row['brandId']);?>" class="btn btn-danger" onClick="javascript: return confirm('ต้องการลบแบรนด์นี้ใช่หรือไม่')">X ลบ</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
