<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php if (count($NewProduct) > 0): ?>
        <ul class="breadcrumb">
          <li>สินค้าใหม่</li>
          <div id="myTab" class="pull-right" >
            <a href="#newblockView" data-toggle="tab" class="btn btn-xs btn-default"><i class="icon-th-large" style="margin-top:5px;"></i></a>
            <a href="#newlistView" data-toggle="tab" class="btn btn-xs btn-default"><i class="icon-list" style="margin-top:5px;"></i></a>
          </div>
        </ul>

        <!-- Preview Product -->
        <?php $from = "New"; ?>
        <?php $this->HomepageModel->PreProduct($NewProduct,$from);?>
        <?php endif; ?>

        <?php if (count($Product) > 0): ?>
          <ul class="breadcrumb">
            <li>สินค้าแนะนำ</li>
            <div id="myTab" class="pull-right">
              <a href="#blockView" data-toggle="tab" class="btn btn-xs btn-default"><i class="icon-th-large" style="margin-top:5px;"></i></a>
              <a href="#listView" data-toggle="tab" class="btn btn-xs btn-default"><i class="icon-list" style="margin-top:5px;"></i></a>
            </div>
          </ul>
          <!-- Preview Product -->
          <?php $from = "True"; ?>
          <?php $this->HomepageModel->PreProduct($Product,$from);?>
        <?php endif; ?>
      </div>
    </div>
  </div>
