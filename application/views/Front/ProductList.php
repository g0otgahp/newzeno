<span>
  <div class="col-md-9">
    <ul class="breadcrumb">
      <li><a href="<?php echo SITE_URL('Home'); ?>" class="colorTagA">หน้าแรก</a></li>
      <?php if (!empty($CateSelect)): ?>
        <li><a href="<?php echo SITE_URL('Home/CategoryHome/'.$GroupSelect[0]['categroupId']); ?>" class="colorTagA"><?php echo $GroupSelect[0]['categroupName'] ?> </a></li>
        <li><?php echo $CateSelect[0]['cateName'] ?></li>
      <?php else: ?>
        <li><?php echo $GroupSelect[0]['categroupName'] ?></li>
      <?php endif; ?>
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
