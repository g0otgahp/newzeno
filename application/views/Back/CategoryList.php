<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 animate-box">
        <div class="card" style="padding:20px;">
          <button type="button" class="btn btn-success"
          style="margin-bottom:20px;"
          data-toggle="modal"
          data-target="#RegisterCategory">เพิ่มประเภทสินค้า</button>
          <table class="table table-hover dataTable">
            <thead>
              <tr>
                <th width="10">ลำดับ</th>
                <th>รูปประเภทสินค้า</th>
                <th>ประเภทสินค้า</th>
                <th>ตัวเลือก</th>
              </tr>
            </thead>
            <tbody>
              <?php  $i = 1; foreach ($dataShow as $dataShow): ?>
                <tr>
                  <td><?php echo $i ?></td>
                  <td><img src="<?php echo BASE_URL('uploads/categorys/'.$dataShow['cateImg']); ?>" height="100px" width="150px"></td>
                  <td><?php echo $dataShow['cateName'] ?></td>
                  <td>

                    <button class="btn btn-warning"
                    data-toggle="modal"
                    data-target="#UpdateCategory<?php echo $dataShow['cateId'] ?>">แก้ไข
                    </button>

                    <a href="<?php echo SITE_URL('Admin/Category/DeleteCategory/'.$dataShow['cateId']); ?>"
                      class="btn btn-danger" onClick="javascript: return confirm('ต้องการลบตำแหน่งนี้ใช่หรือไม่')"></i>ลบ</button>
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
