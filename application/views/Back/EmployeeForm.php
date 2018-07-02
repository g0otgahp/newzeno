<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 animate-box">
        <div class="card">
          <div class="header">
            <h4 class="title">ลงทะเบียนพนักงาน</h4>
          </div>
          <div class="content">

              <?php echo form_open_multipart('Admin/Employee/Register') ?>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>บริษัท</label>
                    <input type="text" class="form-control" disabled placeholder="Company" value="Newzeno (ประเทศไทย)">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>ไอดีเข้าสู่ระบบ</label>
                    <input type="text" class="form-control" name="adminUsername" placeholder="ไอดีเข้าสู่ระบบ" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>รหัสผ่าน</label>
                    <input type="password" class="form-control" name="adminPassword" placeholder="รหัสผ่าน" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">อีเมลล์</label>
                    <input type="email" class="form-control" name="profileEmail" placeholder="อีเมลล์" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2">
                  <div class="form-group">
                    <label>เพศ</label>
                    <select class="form-control" name="profileGender">
                      <option value="ชาย" selected>ชาย</option>
                      <option value="หญิง">หญิง</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>ชื่อ</label>
                    <input type="text" class="form-control" name="profileFname" placeholder="ชื่อ" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>นามสกุล</label>
                    <input type="text" class="form-control" name="profileLname" placeholder="นามสกุล" required>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>ชื่อเล่น</label>
                    <input type="text" class="form-control" name="profileNickname" placeholder="ชื่อเล่น" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>รหัสประจำตัวประชาชน</label>
                    <input type="text" class="form-control" name="profileCitizenid" placeholder="รหัสประจำตัวประชาชน" maxlength="13" onkeypress='validate(event)' required>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>เบอร์ติดต่อ</label>
                    <input type="text" class="form-control" name="profilePhone" placeholder="เบอร์ติดต่อ" maxlength="10" onkeypress='validate(event)' required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>ตำแหน่ง</label>
                    <select class="form-control" name="adminPosition">
                      <?php foreach ($position as $position): ?>
                        <option value="<?php echo $position['positionId'] ?>"><?php echo $position['positionName'] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>รูปภาพประจำตัว</label>
                    <input type="file" accept="image/*" name="profileImg" class="form-control">
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>ที่อยู่</label>
                    <textarea rows="5" class="form-control" name="profileAddress" placeholder="ที่อยู่"></textarea>
                  </div>
                </div>
              </div>



              <button type="submit" class="btn btn-info btn-fill pull-right">สมัครสมาชิก</button>
              <div class="clearfix"></div>

              <?php echo form_close() ?>

          </div>
        </div>
      </div>

      <div class="col-md-4 animate-box">
        <div class="card card-user">
          <div class="image">
            <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
          </div>
          <div class="content">
            <div class="author">
              <a href="#">
                <img class="avatar border-gray" src="<?php echo BASE_URL();?>/assets/Back/img/faces/face-3.jpg" alt="..."/>

                <h4 class="title">Mike Andrew<br />
                  <small>michael24</small>
                </h4>
              </a>
            </div>
            <p class="description text-center"> "Lamborghini Mercy <br>
              Your chick she so thirsty <br>
              I'm in that two seat Lambo"
            </p>
          </div>
          <hr>
          <div class="text-center">
            <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
            <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
            <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>
