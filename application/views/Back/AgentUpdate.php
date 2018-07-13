<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-11 animate-box">
        <div class="card">
          <div class="header">
            <h4 class="title">แก้ไขตัวแทนจำหน่าย</h4>
          </div>
          <div class="content">

              <?php echo form_open_multipart('Admin/Agent/AgentUpdate') ?>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>บริษัท</label>
                    <input type="hidden" name="agentId" value="<?php echo $dataSelect[0]['agentId'] ?>">
                    <input type="text" class="form-control" name="agentCompany" value="<?php echo $dataSelect[0]['agentCompany'] ?>" placeholder="Company">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>ชื่อผู้ติดต่อ</label>
                    <input type="text" class="form-control" name="agentName" value="<?php echo $dataSelect[0]['agentName'] ?>" placeholder="Agent Name">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>เบอร์ติดต่อ</label>
                    <input type="text" maxlength="10" class="form-control" value="<?php echo $dataSelect[0]['agentPhone'] ?>" name="agentPhone" placeholder="Agent Phone">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>อีเมลล์</label>
                    <input type="email" class="form-control" name="agentEmail" value="<?php echo $dataSelect[0]['agentEmail'] ?>" placeholder="Agent Email">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>เว็ปไซต์</label>
                    <input type="text" class="form-control" name="agentWebsite" value="<?php echo $dataSelect[0]['agentWebsite'] ?>" placeholder="Agent Website">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <label>ที่อยู่ตัวแทนจำหน่าย</label>
                  <textarea name="agentAddress" class="summernote"><?php echo $dataSelect[0]['agentAddress'] ?></textarea>
                </div>
              </div>



              <button type="submit" class="btn btn-info btn-fill pull-right">แก้ไขตัวแทนจำหน่าย</button>
              <div class="clearfix"></div>

              <?php echo form_close() ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
