<!--RegisterBrandForm -->
<?php echo form_open_multipart('Admin/Category/SaveCategory')?>
<!-- Modal -->
<div id="RegisterCategory" class="modal fade">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">เพิ่มประเภทสินค้า</h4>
      </div>
      <div class="modal-body">
        <center>
        <table>
          <tr>
            <td>ประเภทสินค้า : &nbsp;</td>
            <td><input autocomplete="off" name="cateName" type="text" required class="form-control" style="margin-top:20px;" placeholder="กรอกชื่อสินค้า" required></td>
          </tr>
          <tr>
            <td>กลุ่มประเภทสินค้า : &nbsp;</td>
            <td style="padding-top:10px">
              <select class="form-control" name="categroupId" required>
                <option value="">-เลือกกลุ่มสินค้า-</option>
                <?php foreach ($group as $group): ?>
                  <option value="<?php echo $group['categroupId'] ?>"><?php echo $group['categroupName'] ?></option>
                <?php endforeach; ?>
              </select>
            </td>
          </tr>
          <tr>
            <td>ไอคอน : &nbsp;</td>
            <td><input name="cateImg" type="file" class="form-control" accept="image/*" style="margin-top:20px;" placeholder="กรอกชื่อตำแหน่ง"></td>
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
