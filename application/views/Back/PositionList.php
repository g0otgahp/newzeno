<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 animate-box">
        <div class="card" style="padding:20px;">
          <button type="button" class="btn btn-success"
          style="margin-bottom:20px;"
          data-toggle="modal"
          data-target="#RegisterPosition">เพิ่มตำแหน่ง</button>

          <table class="table table-hover dataTable">
            <thead>
              <tr>
                <th>ลำดับ</th>
                <th>ตำแหน่ง</th>
                <th>ตัวเลือก</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=1; foreach ($data as $data): ?>
                <tr>
                  <td><?php echo $i ?></td>
                  <td style="color:red"><?php echo $data['positionName'] ?></td>
                  <td>

                    <button class="btn btn-info btn-warning"
                    data-toggle="modal"
                    data-target="#UpdatePosition<?php echo $data['positionId']; ?>">แก้ไข</button>

                    <a href="<?php echo SITE_URL('Admin/Position/DeletePosition/'.$data['positionId']) ?>" class="btn btn-info btn-danger"
                    onClick="javascript: return confirm('ต้องการลบตำแหน่งนี้ใช่หรือไม่')">ลบ
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
