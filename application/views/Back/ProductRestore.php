<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 animate-box">
        <div class="card" style="padding:20px;">

          <table class="table table-hover dataTable">
            <thead>
              <tr>
                <th width="10%">ลำดับ</th>
                <th  width="20%">แบรนด์</th>
                <th>ชื่อสินค้า</th>
                <th  width="20%">หมวดหมู่</th>
                <th width="10%" style="text-align:center">ตัวเลือก</th>
              </tr>
            </thead>
            <tbody>

              <?php $i = 1; foreach ($dataShow as $dataShow): ?>
              <tr>
                <td><?php echo $i ?></td>
                <td><img src="<?php echo BASE_URL('uploads/Logo/'. $dataShow['brandImg']); ?>" class="img-thumbnail" width="50%"></td>
                <td><?php echo $dataShow['productName']; ?></td>
                <td><?php echo $dataShow['categroupName']; ?></td>
                <td style="text-align:center"><a href="<?php echo SITE_URL('Admin/ProductRestore/Update/'.$dataShow['productId']) ?>" class="btn btn-danger"> กู้คืน</td>
              </tr>

                <?php $i++; endforeach; ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
