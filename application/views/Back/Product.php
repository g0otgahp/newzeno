<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 animate-box">
        <div class="card" style="padding:20px;">
          <button type="button" class="btn btn-success"
          style="margin-bottom:20px;"
          data-toggle="modal"
          data-target="#RegisterTitleGroup">เพิ่มหัวข้อสินค้า</button>

          <table class="table table-hover dataTable">
            <thead>
              <tr>
                <th>ลำดับ</th>
                <th>หัวข้อสินค้า</th>
                <th>จำนวนสินค้า</th>
                <th>จำนวนกลุ่มสินค้า</th>
                <th>ตัวเลือก</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; foreach ($dataSelect as $dataSelect): ?>
                <tr>
                  <td><?php echo $i ?></td>
                  <td><?php echo $dataSelect['catetitleName'] ?></td>
                  <td style="color:green">10</td>
                  <td style="color:blue">5</td>
                  <td>
                    <a href="#" class="btn btn-primary">กลุ่มสินค้า</a>
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
