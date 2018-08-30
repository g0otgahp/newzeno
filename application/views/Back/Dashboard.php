<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 animate-box">
        <div class="card" style="padding-left:20px; padding-right:20px; padding-top:5px; padding-bottom:5px;">
          <h4>ประวัติการใช้งานระบบ</h4>
          <table class="table table-hover dataTable">
            <thead>
              <tr>
                <th width="5%">ลำดับ</th>
                <th width="5%">สถานะ</th>
                <th width="28%">รายละเอียด</th>
                <th width="15%">หมวดหมู่</th>
                <th width="20%">แก้ไขโดย</th>
                <th width="27%">เวลา</th>
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
                  <td style="color:blue;"><?php echo $this->thaidate->FullDateTime($show['logProductTime']);?></td>
                </tr>
              <?php $i++; endforeach; ?>


            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 animate-box">
        <div class="card" style="padding-left:20px; padding-right:20px; padding-top:5px; padding-bottom:5px;">
          <h4>ประวัติการเข้าสู่ระบบ</h4>
          <table class="table table-hover dataTable">
            <thead>
              <tr>
                <th width="5%">ลำดับ</th>
                <th>ชื่อ - สกุล</th>
                <th>เบอร์ติดต่อ</th>
                <th>เข้าสู่ระบบ</th>
                <th width="25%">ออกจากระบบ</th>
              </tr>
            </thead>
            <tbody>

              <?php $i=1; foreach ($dataLogLogin as $login):?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $login['profileFname'] . " " . $login['profileLname'] ?></td>
                <td><?php echo substr($login['profilePhone'],0,3) ."-" . substr($login['profilePhone'],3,3) . "-" . substr($login['profilePhone'],6,4)?></td>
                <td style="color:green;"><?php echo $this->thaidate->FullDateTime($login['loginTimeIn']) ?></td>
                <?php if ($login['loginTimeOut'] == '0000-00-00 00:00:00'): ?>
                  <td style="color:red;">ยังไม่ได้ออกจากระบบ</td>
                  <?php else: ?>
                    <td style="color:orange;"><?php echo $this->thaidate->FullDateTime($login['loginTimeOut']) ?></td>
                <?php endif; ?>
              </tr>

            <?php $i++; endforeach; ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
</div>
