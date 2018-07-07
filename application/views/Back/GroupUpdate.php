<!--RegisterBrandForm -->
<?php foreach ($dataSelect as $dataSelect): ?>

  <?php echo form_open_multipart('Admin/Group/SaveGroup')?>

  <!-- Modal -->
  <div id="UpdateGroup<?php echo $dataSelect['categroupId']; ?>" class="modal fade">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">แก้ไขกลุ่มประเภทสินค้า</h4>
        </div>
        <div class="modal-body">
          <center>
          <table>
            <tr>
              <td>ชื่อกลุ่มประเภทสินค้า : &nbsp;</td>
              <td>
                <input type="hidden" name="categroupId" value="<?php echo $dataSelect['categroupId']; ?>">
                <input autocomplete="off" name="categroupName" type="text" value="<?php echo $dataSelect['categroupName']; ?>"
                required class="form-control" style="margin-top:20px;" placeholder="กรอกชื่อกลุ่มประเภทสินค้า" required>
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

<?php endforeach; ?>
