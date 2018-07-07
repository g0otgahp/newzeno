<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 animate-box">
        <div class="card" style="padding:20px;">
          <button type="button" class="btn btn-success"
          style="margin-bottom:20px;"
          data-toggle="modal"
          data-target="#RegisterGroup">เพิ่มกลุ่มประเภทสินค้า</button>

          <table class="table table-hover dataTable">
            <thead>
              <tr>
                <th>ลำดับ</th>
                <th>กลุ่มประเภทสินค้า</th>
                <th>ตัวเลือก</th>
              </tr>
            </thead>
            <tbody>

              <?php $i = 1; foreach ($dataSelect as $dataSelect): ?>

                <tr>
                  <td><?php echo $i ?></td>
                  <td style="color:Black"><?php echo $dataSelect['categroupName'] ?></td>
                  <td>

                    <button class="btn btn-info btn-warning"
                    data-toggle="modal"
                    data-target="#UpdateGroup<?php echo $dataSelect['categroupId'] ?>">แก้ไข</button>

                    <a href="<?php echo SITE_URL('Admin/Group/DeleteGroup/'.$dataSelect['categroupId']); ?>" class="btn btn-info btn-danger"
                    onClick="javascript: return confirm('ต้องการลบประเภทสินค้านี้ใช่หรือไม่')">ลบ
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
