<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 animate-box">
        <div class="card" style="padding:20px;">
          <a href="<?php echo SITE_URL('Admin/Employee/EmployeeForm')?>" class="btn btn-success" style="margin-bottom:20px;" >เพิ่มสมาชิกแอดมิน</a>
          <table class="table table-hover dataTable">
            <thead>
              <tr>
                <th width="10%">เลขที่</th>
                <th>รูปพนักงาน</th>
                <th>ชื่อพนักงาน</th>
                <th>ชื่อเล่น</th>
                <th>เบอร์โทรศัพท์</th>
                <th>ตำแหน่ง</th>
                <th>ตัวเลือก</th>
              </tr>
            </thead>
            <tbody>

              <?php $i = 1; foreach ($select as $select): ?>

                <tr>
                  <td><?php echo $i ?></td>
                  <td><img class="avatar border-gray" src="<?php echo BASE_URL('uploads/Employees/'.$select['profileImg']) ?>" ></td>
                  <td><?php echo $select['profileFname']." ".$select['profileLname'] ?></td>
                  <td><?php echo $select['profileNickname']?></td>
                  <td><?php echo $select['profilePhone'] ?></td>
                  <td><?php echo $select['positionName'] ?></td>
                  <td>
                  <a href="<?php echo SITE_URL('Admin/Employee/ShowDetail/'.$select['profileId']) ?>" class="btn btn-primary">รายละเอียด</a>
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
