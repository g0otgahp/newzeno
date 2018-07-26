<div class="container">
  <div class="row">
<div class="span12">
  <ul class="breadcrumb">
    <li><a href="<?php echo SITE_URL('Home'); ?>">หน้าแรก</a> <span class="divider">/</span></li>
    <li><a href="<?php echo SITE_URL('News') ?>">ข่าวสาร</a> <span class="divider">/</span></li>
    <li class="active">รายละเอียดข่าวสาร</li>
  </ul>



  <div class="span10">
    <div class="form-group">
      <h3> <?php echo $dataShow[0]['newsTitle'] ?></h3>
    </div>
  </div>

  <div class="span10">
    <div class="form-group">
      <?php echo $dataShow[0]['newsDetail'] ?>
    </div>
  </div>

  <!-- <div class="span1">
    <div class="form-group">

    </div>
  </div> -->

</div>
</div>
</div>
