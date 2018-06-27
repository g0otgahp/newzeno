<!--BrandUpdate -->
<?php foreach ($BrandList as $update): ?>
<?php echo form_open_multipart('Admin/Brand/SaveBrand')?>
<input type="hidden" name="brandId" value="<?php echo $update['brandId']?>">
<!-- Modal -->
<div id="updateBrand<?php echo $update['brandId']?>" class="modal fade">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">แก้ไขแบรนด์</h4>
      </div>
      <div class="modal-body">
        <center>
        <table>
          <tr>
            <td>รูปภาพเดิม : &nbsp;</td>
            <td><img src="<?php echo BASE_URL('uploads/logo/'.$update['brandImg']);?>" class="img-thumbnail" width="100"></td>
          </tr>
          <tr>
            <td>ชื่อแบรนด์ : &nbsp;</td>
            <td><input autocomplete="off" name="brandName" type="text" required class="form-control" style="margin-top:20px;" placeholder="กรอกชื่อแบรนด์" value="<?php echo $update['brandName']?>" required></td>
          </tr>
          <tr>
            <td>รูปภาพ : &nbsp;</td>
            <td><input name="Img" type="file" class="form-control" style="margin-top:20px;" placeholder="เพิ่มรูปภาพแบรนด์"></td>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type"submit" class="btn btn-success btn-sm">ยืนยัน</button>
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php echo form_close()?>
<?php endforeach; ?>
