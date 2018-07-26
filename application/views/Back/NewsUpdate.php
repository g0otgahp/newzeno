<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-offset-1 col-md-10 animate-box">
        <div class="card">
          <div class="header">
            <h4 class="title">ข่าวสารทั่วไป</h4>
          </div>
          <div class="content">

              <?php echo form_open_multipart('Admin/News/NewsUpdate') ?>

              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label>หัวข้อข่าว</label>
                    <input type="hidden" name="newsId" value="<?php echo $dataShow[0]['newsId'] ?>">
                    <input type="text" name="newsTitle" class="form-control" value="<?php echo $dataShow[0]['newsTitle'] ?>" required autocomplete="off">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>รูปหัวข้อข่าว</label>
                    <input type="hidden" name="newsImage" value="<?php echo $dataShow[0]['newsImage'] ?>">
                    <input type="file" accept="image/*" name="newsImage" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>หัวข้อย่อย</label>
                    <input type="text" name="newsSubtitle" class="form-control" value="<?php echo $dataShow[0]['newsSubtitle'] ?>" placeholder="Title" required autocomplete="off" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>รายละเอียดข่าว</label>
                    <textarea rows="5" class="summernote form-control" name="newsDetail" required><?php echo $dataShow[0]['newsDetail'] ?></textarea>
                  </div>
                </div>
              </div>

              <button type="submit" class="btn btn-warning pull-right">แก้ไขข่าวสาร</button>
              <div class="clearfix"></div>

              <?php echo form_close() ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
