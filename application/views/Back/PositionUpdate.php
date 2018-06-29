<!--RegisterBrandForm -->
<?php foreach ($data as $modaldata): ?>

  <?php echo form_open_multipart('Admin/Position/SavePosition')?>

  <!-- Modal -->
  <div id="UpdatePosition<?php echo $modaldata['positionId']; ?>" class="modal fade">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">แก้ไขตำแหน่ง</h4>
        </div>
        <div class="modal-body">
          <center>
          <table>
            <tr>
              <td>ชื่อตำแหน่ง : &nbsp;</td>
              <td>
                <input type="hidden" name="positionId" value="<?php echo $modaldata['positionId']; ?>">
                <input autocomplete="off" name="positionName" type="text" value="<?php echo $modaldata['positionName']; ?>"
                required class="form-control" style="margin-top:20px;" placeholder="กรอกชื่อตำแหน่ง" required>
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
