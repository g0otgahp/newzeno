<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-11 animate-box">
        <div class="card">
          <div class="header">
            <h4 class="title">ลงทะเบียนตัวแทนจำหน่าย</h4>
          </div>
          <div class="content">

              <?php echo form_open_multipart('Admin/Agent/AgentRegister') ?>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>บริษัท</label>
                    <input type="text" class="form-control" name="agentCompany" placeholder="Company" autocomplete="off">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>ชื่อผู้ติดต่อ</label>
                    <input type="text" class="form-control" name="agentName" placeholder="Agent Name" autocomplete="off">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>เบอร์ติดต่อ</label>
                    <input type="text" maxlength="10" class="form-control" name="agentPhone" placeholder="Agent Phone" autocomplete="off">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>อีเมลล์</label>
                    <input type="email" class="form-control" name="agentEmail" placeholder="Agent Email" autocomplete="off">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>เว็ปไซต์</label>
                    <input type="text" class="form-control" name="agentWebsite" placeholder="Agent Website" autocomplete="off">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <label>ที่อยู่ตัวแทนจำหน่าย</label>
                  <textarea name="agentAddress" class="summernote"></textarea>
                </div>
              </div>



              <button type="submit" class="btn btn-info btn-fill pull-right">เพิ่มตัวแทนจำหน่าย</button>
              <div class="clearfix"></div>

              <?php echo form_close() ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
