<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 animate-box">
        <div class="card" style="padding:20px;">
          <h4>เลือกหัวข้อสินค้า</h4>

          <table class="table table-hover dataTable">
            <thead>
              <tr>
                <th width="10%">ลำดับ</th>
                <th>หัวข้อสินค้า</th>
                <th>ตัวเลือก</th>
              </tr>
            </thead>
            <tbody>

              <?php $i = 1; foreach ($dataSelect as $dataSelect): ?>

                <tr>
                  <td><?php echo $i ?></td>
                  <td style="color:Black"><?php echo $dataSelect['catetitleName'] ?></td>
                  <td>

                    <a href="<?php echo SITE_URL("Admin/Search/SearchIndex/".$dataSelect['catetitleId']) ?>" class="btn btn-warning">
                      เลือกหัวข้อสินค้า
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
