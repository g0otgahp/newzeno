<div class="content">
  <div class="container-fluid">
    <div class="row" >
      <div class="col-md-12 animate-box">

        <?php foreach ($dataConfig as $data): ?>

        <a href="<?php echo SITE_URL('Admin/Config/ConfigForm/'.$data['configId']); ?>" class="card col-md-5 col-md-offset-1" align="center" style="width:350px;height:110px">
          <br>  <h3 style="color:black"><?php echo $data['configName'] ?></h3>
        </a>

        <?php endforeach; ?>

      </div>
    </div>
  </div>
</div>
