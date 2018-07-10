<div class="content">
  <div class="container-fluid">
    <div class="row" >
      <div class="col-md-12 animate-box">

        <?php echo form_open_multipart('Admin/Config/UpdateConfig'); ?>

        <input type="hidden" name="configId" value="<?php echo $id ?>">

      <textarea class="summernote" name="configTextarea"><?php echo $dataConfig[0]['configTextarea'] ?></textarea>

      <input type="submit" class="btn btn-success btn-lg btn-block" value="บันทึก">

        <?php echo form_close(); ?>

      </div>

    </div>
  </div>
</div>
