<!--RegisterBrandForm -->
<?php echo form_open_multipart('Admin/Group/SaveGroup')?>
<!-- Modal -->
<div id="RegisterGroup" class="modal fade">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">เพิ่มกลุ่มประเภทสินค้า</h4>
      </div>
      <div class="modal-body">
        <center>
        <table>
          <tr>
            <td>ชื่อกลุ่มประเภทสินค้า : &nbsp;</td>
            <td><input autocomplete="off" name="categroupName" type="text" required class="form-control" style="margin-top:20px;" placeholder="กรอกชื่อกลุ่มประเภทสินค้า" required></td>
          </tr>
          <tr>
            <td>ชื่อหัวข้อสินค้า : &nbsp;</td>
            <td style="padding-top:10px">
              <select class="form-control" name="catetitleId">
                <?php foreach ($dataTitle as $Title): ?>
                  <option value="<?php echo $Title['catetitleId'] ?>" <?php if($Title['catetitleId'] == 1){echo "selected";} ?>><?php echo $Title['catetitleName'] ?></option>
                <?php endforeach; ?>
              </select>
            </td>
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
