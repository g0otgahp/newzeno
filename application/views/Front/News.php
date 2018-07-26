<div class="container">
  <div class="row">
<div class="span12">
  <ul class="breadcrumb">
    <li><a href="<?php echo SITE_URL('Home'); ?>">หน้าแรก</a> <span class="divider">/</span></li>
    <li class="active">ข่าวสาร</li>
  </ul>

<div class="span12">
  <div class="tab-pane">
    <!-- Start Loop -->
    <?php foreach ($dataShow as $dataShow): ?>
      <div class="span1"></div>
      <div class="row">
        <div class="span2">
          <a href="<?php echo SITE_URL('News/NewsDetail/'.$dataShow['newsId']) ?>">
          <img src="<?php echo BASE_URL('uploads/News/'.$dataShow['newsImage']) ?>" style="height:100px; width:150px;"/>
          </a>
        </div>
        <div class="span8">
          <a href="<?php echo SITE_URL('News/NewsDetail/'.$dataShow['newsId']) ?>"><h4><?php echo $dataShow['newsTitle'] ?></h4></a>
          <p><?php echo substr($dataShow['newsSubtitle'],0,500) ?></p>
        </div>
      </div>
      <hr class="soft"/>
    <?php endforeach; ?>
    <!-- End Loop -->
  </div>
</div>


</div>
</div>
</div>
