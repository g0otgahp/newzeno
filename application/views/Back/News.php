<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 animate-box">
        <div class="card" style="padding:20px;">
          <a href="<?php echo SITE_URL('Admin/News/OpenForm') ?>" type="button" class="btn btn-success" style="margin-bottom:20px;">เพิ่มข่าวสาร</a>

          <table class="table table-hover dataTable">
            <thead>
              <tr>
                <th width="10%">ลำดับ</th>
                <th>รูปข่าวสาร</th>
                <th>หัวข้อข่าวสาร</th>
                <th width="25%">ตัวเลือก</th>
              </tr>
            </thead>
            <tbody>

              <?php $i = 1 ; foreach ($dataShow as $dataShow): ?>
                <tr>
                  <td><?php echo $i ?></td>
                  <td><img src="<?php echo BASE_URL('uploads/News/'. $dataShow['newsImage']) ?>" style="height:100px ; width:150px"></td>
                  <td style="color:Black"><?php echo substr($dataShow['newsTitle'],0,150) ?></td>
                  <td>
                    <a href="<?php echo SITE_URL('Admin/News/OpenFormUpdate/'. $dataShow['newsId']) ?>" class="btn btn-info btn-warning">แก้ไข</a>
                    <a href="<?php echo SITE_URL('Admin/News/NewsDelete/'. $dataShow['newsId']) ?>" class="btn btn-info btn-danger" onClick="javascript: return confirm('ต้องการลบประเภทสินค้านี้ใช่หรือไม่')">ลบ </a>
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
