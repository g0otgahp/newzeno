<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 animate-box">
        <div class="card" style="padding:20px;">
          <h4>แจ้งเตือนสินค้า</h4>
          <table class="table table-hover dataTable">
            <thead>
              <tr>
                <th width="5%">ลำดับ</th>
                <th width="5%">สถานะ</th>
                <th width="35%">รายละเอียด</th>
                <th width="15%">หมวดหมู่</th>
                <th width="20%">แก้ไขโดย</th>
                <th width="20%">เวลา</th>
              </tr>
            </thead>
            <tbody>

              <?php $i=1; foreach ($dataLogProduct as $show): ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td align="center"><button class="btn btn-link" style="width:80px"><font style="color:
                  <?php if ($show['logProductStatus'] == 'เพิ่ม'): ?>
                    green
                    <?php endif; ?>

                    <?php if ($show['logProductStatus'] == 'ลบ'): ?>
                      red
                      <?php endif; ?>

                      <?php if ($show['logProductStatus'] == 'แก้ไข'): ?>
                        orange
                        <?php endif; ?>

                  "><?php echo $show['logProductStatus']; ?></font></button></td>

                  <td><?php echo $show['logProductItem']; ?></td>
                  <td align="center"><?php echo $show['logProductType']; ?></td>
                  <td align="center"><?php echo $show['profileFname'] . " " . $show['profileLname']; ?></td>
                  <td><?php echo $show['logProductTime'];?></td>
                </tr>
              <?php $i++; endforeach; ?>


            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 animate-box">
        <div class="card" style="padding:20px;">
          <h4>แจ้งเตือนเข้าสู่ระบบ</h4>
          <table class="table table-hover dataTable">
            <thead>
              <tr>
                <th width="10%">ลำดับ</th>
                <th>ชื่อ - สกุล</th>
                <th>เบอร์ติดต่อ</th>
                <th>เข้าสู่ระบบ</th>
                <th width="25%">ออกจากระบบ</th>
              </tr>
            </thead>
            <tbody>

              <?php $i=1; foreach ($dataLogLogin as $login): ?>

              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $login['profileFname'] . " " . $login['profileLname'] ?></td>
                <td><?php echo substr($login['profilePhone'],0,3) ."-" . substr($login['profilePhone'],3,3) . "-" . substr($login['profilePhone'],6,4)?></td>
                <td><?php echo $login['loginTimeIn'] ?></td>
                <td><?php echo $login['loginTimeOut'] ?></td>
              </tr>

            <?php $i++; endforeach; ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
</div>
