<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 animate-box">
        <div class="card" style="padding:20px;">
          <a href="<?php echo SITE_URL('Admin/Agent/AgentForm')?>" class="btn btn-success" style="margin-bottom:20px;" >เพิ่มตัวแทนจำหน่าย</a>
          <table class="table table-hover dataTable">
            <thead>
              <tr>
                <th width="10%">เลขที่</th>
                <th>ชื่อบริษัท</th>
                <th>ชื่อผู้ติดต่อ</th>
                <th>เบอร์โทรติดต่อ</th>
                <th>อีเมลล์</th>
                <!-- <th>เว็ปไซต์</th> -->
                <th>ตัวเลือก</th>
              </tr>
            </thead>
            <tbody>

              <?php $i = 1; foreach ($dataSelect as $dataSelect): ?>
                <tr>
                  <td><?php echo $i ?></td>
                  <td><?php echo $dataSelect['agentCompany'] ?></td>
                  <td><?php echo $dataSelect['agentName'] ?></td>
                  <td><?php echo $dataSelect['agentPhone'] ?></td>
                  <td><?php echo $dataSelect['agentEmail'] ?></td>
                  <!-- <td><?php echo $dataSelect['agentWebsite'] ?></td> -->
                  <td>
                    <a href="<?php echo SITE_URL('Admin/Agent/ShowAgentUpdate/'.$dataSelect['agentId']); ?>" class="btn btn-warning">แก้ไข</a>
                  <a href="<?php echo SITE_URL('Admin/Agent/AgentDelete/'.$dataSelect['agentId']); ?>" class="btn btn-danger"
                    onClick="javascript: return confirm('ต้องการลบตำแหน่งนี้ใช่หรือไม่')">ลบ</a>
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
