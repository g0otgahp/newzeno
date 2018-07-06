<?php foreach ($dataShow as $dataConnect): ?>
  <!--RegisterBrandForm -->
  <?php echo form_open_multipart('Admin/Category/ConnectBrand')?>
  <!-- Modal -->
  <div id="ConnectCategory<?php echo $dataConnect['cateId'] ?>" class="modal fade">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">เชื่อมความสัมพันธ์กับแบรนด์</h4>
        </div>
        <div class="modal-body">
          <center>
            <table>
              <tr>
                <td>แบรนด์ที่เกี่ยวข้อง : &nbsp;</td>
                <input type="hidden" name="cateId" value="<?php echo $dataConnect['cateId'] ?>">
                <td>
                  <?php foreach ($brand as $row): ?>
                    / <?php echo $row['brandName']?>
                    <input name="checkBrand[]" type="checkbox" value="<?php echo $row['brandId']?>"
                    <?php foreach ($dataConnect['sortby'] as $sortby){
                      if ($sortby['sortbyBrandid'] == $row['brandId']){
                        echo "checked";
                      }
                    }; ?>
                  >
                <?php endforeach; ?>
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
