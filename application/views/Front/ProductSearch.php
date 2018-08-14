<span>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- <h3> รายการที่ค้นหา <small class="pull-right">
        <?php  if ($num > 0): ?>
        <?php echo "พบ ".$num. " รายการ" ?>
      <?php else: ?>
      ไม่พบสินค้า
    <?php endif; ?>
  </small></h3> -->
  <ul class="breadcrumb">
    <li><a href="<?php echo SITE_URL('Home'); ?>" class="colorTagA">หน้าแรก</a></li>
    <li>รายการค้นหา</li>
    <div id="myTab" class="pull-right" >
      <a href="#blockView" data-toggle="tab" class="btn btn-xs btn-default"><i class="icon-th-large" style="margin-top:5px;"></i></a>
      <a href="#listView" data-toggle="tab" class="btn btn-xs btn-default"><i class="icon-list" style="margin-top:5px;"></i></a>
    </div>
  </ul>

  <!-- Preview Product -->
  <?php $from = "false"; ?>
  <?php $this->HomepageModel->PreProduct($Product,$from);?>

</div>
</div>
</div>
</div>
</span>
