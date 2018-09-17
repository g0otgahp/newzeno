<div class="container">
  <div class="row">
    <div class="col-md-12">


        <!-- Promotion -->
        <!-- <ul class="breadcrumb btn-danger">

        </ul> -->

        <?php if (count($Product) > 0): ?>
          <ul class="breadcrumb btn-primary">
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
