<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-offset-1 col-md-10 animate-box">
        <div class="card">
          <div class="header">
            <h4 class="title">ข่าวสารทั่วไป</h4>
          </div>
          <div class="content">

              <?php echo form_open_multipart('Admin/News/NewsInsert') ?>

              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label>หัวข้อข่าว</label>
                    <input type="text" name="newsTitle" class="form-control" placeholder="Title" required autocomplete="off">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>รูปหัวข้อข่าว</label>
                    <input type="file" accept="image/*" name="newsImage" class="form-control" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>หัวข้อย่อย</label>
                    <input type="text" name="newsSubtitle" class="form-control" placeholder="Subtitle" required autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>รายละเอียดข่าว</label>
                    <textarea rows="5" class="summernote form-control" name="newsDetail" required></textarea>
                  </div>
                </div>
              </div>

              <button type="submit" class="btn btn-success pull-right">เพิ่มข่าวสาร</button>
              <div class="clearfix"></div>

              <?php echo form_close() ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
