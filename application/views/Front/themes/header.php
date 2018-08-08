<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Newzeno : ตัวแทนจำหน่ายวิดีโอวอล โปรเจคเตอร์ เครื่องใช้ไฟฟ้า อันดับ 1 ของประเทศไทย</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <link id="callCss" rel="stylesheet" href="<?php echo BASE_URL()?>/assets/Front/themes/bootshop/bootstrap.min.css" media="screen"/>
  <link href="<?php echo BASE_URL()?>/assets/Front/themes/css/base.css" rel="stylesheet" media="screen"/>
  <!-- Bootstrap style responsive -->
  <link href="<?php echo BASE_URL()?>/assets/Front/themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
  <link href="<?php echo BASE_URL()?>/assets/Front/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
  <!-- Google-code-prettify -->
  <link href="<?php echo BASE_URL()?>/assets/Front/themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="<?php echo BASE_URL()?>/assets/Front/themes/images/ico/newicon_ZV1_icon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo BASE_URL()?>/assets/Front/themes/images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo BASE_URL()?>/assets/Front/themes/images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo BASE_URL()?>/assets/Front/themes/images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo BASE_URL()?>/assets/Front/themes/images/ico/apple-touch-icon-57-precomposed.png">
  <style type="text/css" id="enject"></style>
  <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">

  <!-- Bootstrap Datatable -->
  <link href="<?php echo BASE_URL()?>/assets/Back/datatable-bootstrap/dataTables.bootstrap.min.css" rel="stylesheet"/>

  <!-- Select2.css -->
  <link rel="stylesheet" href="<?php echo BASE_URL()?>assets/Back/select2-4.0.6-rc.1/dist/css/select2.min.css">

  <!-- Select2.css -->
  <link rel="stylesheet" href="<?php echo BASE_URL()?>assets/Front/src/css/lightbox.css">

  <!-- Multi-colum Menu.css -->
  <link rel="stylesheet" href="<?php echo BASE_URL()?>assets/Front/css/multi-colum.css">

  <!-- card.css -->
  <link rel="stylesheet" href="<?php echo BASE_URL()?>assets/Front/css/card.css">

  <style>
  * , span , td , p , a , label , button {
    font-family: 'Prompt', sans-serif;
    font-size: 14px;
  }

  h1 , h2 , h3 , h4  {
    font-family: 'Prompt', sans-serif;
  }

  label {
    display:inline;
  }

  .colorTagA {
    color:black;
  }
  
</style>

</head>
<body>
  <div id="header">
    <div style="background-color:#3a3f44;">
      <div class="container" >
        <div class="row" style="padding:5px;">
          <div>
            <span style="color:white;"><img width="20" height="20" src="<?php echo BASE_URL()?>/assets/Front/themes/images/phone.png"> เบอร์ติดต่อ : 02-497-0500</span>
            <!-- <a href="#" style="color:white;"><span class="">Menu 1</span></a> /
            <a href="#" style="color:white;"><span class="">Menu 2</span></a> /
            <a href="#" style="color:white;"><span class="">Menu 3</span></a> / -->
            <a class="pull-right" href="<?php echo SITE_URL('Login');?>" style="color:white;"><span>Administrator</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header End====================================================================== -->


  <!-- new nav -->

  <div class="container" style="margin-bottom:10px; margin-top:10px;">
    <div class="row">
      <div class="col-md-12">
        <a class="pull-left" href="<?php echo SITE_URL('Home');?>"><img src="<?php echo BASE_URL()?>/uploads/Logo/logonewzeno.png" style="height:75px; margin-top:5px"/></a>
        <ul class="nav nav-pills pull-right" style="padding-top:15px;">
          <?php echo form_open('Search','class="pull-right"'); ?>
          <input style="margin-top:10px; padding:15px;" type="text" name="keyword" placeholder="ค้นหาสินค้า">
          <button style="" type="submit" class="btn btn-primary">ค้นหา</button>
          <?php echo form_close(); ?>
          <li style="margin-top:7px;"><a href="<?php echo SITE_URL('Home'); ?>" class="colorTagA">หน้าแรก</a></li>
          <li style="margin-top:7px; color:#FFFF"><a href="<?php echo SITE_URL('Service'); ?>" class="colorTagA">บริการ</a></li>
          <!-- <li style="margin-top:7px;"><a href="<?php echo SITE_URL('News'); ?>">ข่าวสาร</a></li> -->
          <li style="margin-top:7px; color:#FFFF"><a href="<?php echo SITE_URL('Payment'); ?>" class="colorTagA">วิธีชำระเงิน</a></li>
          <li style="margin-top:7px; color:#FFFF"><a href="<?php echo SITE_URL('Contact'); ?>" class="colorTagA">ติดต่อเรา</a></li>
        </ul>
      </div>
    </div>
  </div>


  <div style="background-color:#3a3f44;">
  <nav class="container" role="navigation" style="margin-bottom:20px;">
      <!-- <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-menu-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div> -->
      <!--/.navbar-header-->

      <div class="collapse navbar-collapse" style="padding:0px;">
        <ul class="nav navbar-nav" >
          <li class="dropdown">
            <a href="#" class="dropdown-toggle dropbtn" data-toggle="dropdown"><b>อุปกรณ์แสดงภาพ <i class="icon-chevron-down" style="padding-top:3px;"></i></a>
            <ul class="dropdown-menu multi-column columns-3 dropdown-content">
              <div class="row">
                <div class="col-sm-4">
                  <ul class="multi-column-dropdown">
                    <?php foreach ($Group as $ShowGroup): ?>
                    <li><a href="<?php echo SITE_URL('Home/CategoryHome/'.$ShowGroup['categroupId']); ?>" style="color:orange;"><b><u><?php echo $ShowGroup['categroupName'] ?></u></b></a></li>
                  <?php endforeach; ?>
                  <?php foreach ($Category as $CategoryShow): ?>
                    <li><a href="<?php echo SITE_URL('Product/ShowProduct/'.$CategoryShow['categroupId']."/".$CategoryShow['cateId']); ?>" style="font-size:12px;">- <?php echo $CategoryShow['cateName'] ?></a></li>
                  <?php endforeach; ?>
                  <li><hr></li>
                  <li><a href="#" style="color:orange;"><b><u>Monitor TV</u></b></a></li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                  </ul>
                </div>

                <div class="col-sm-4">
                  <ul class="multi-column-dropdown">
                    <li><a href="#" style="color:orange;"><b><u>Commertrial TV</u></b></a></li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><hr></li>
                    <li><a href="#" style="color:orange;"><b><u>Hotel TV</u></b></a></li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </div>
                <div class="col-sm-4">
                  <ul class="multi-column-dropdown">
                    <li><a href="#" style="color:orange;"><b><u>Digital Signage</u></b></a></li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><hr></li>
                    <li><a href="#" style="color:orange;"><b><u>Digital TV</u></b></a></li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </div>
              <!-- </div> -->
            </ul>

          </li>
        </ul>

        <ul class="nav navbar-nav" >
          <li class="dropdown">
            <a href="#" class="dropdown-toggle dropbtn" data-toggle="dropdown"><b>อุปกรณ์เสียง <i class="icon-chevron-down" style="padding-top:3px;"></i></a>
            <ul class="dropdown-menu multi-column columns-3 dropdown-content">
              <div class="row">
                <div class="col-sm-4">
                  <ul class="multi-column-dropdown">
                    <?php foreach ($Group as $ShowGroup): ?>
                    <li><a href="<?php echo SITE_URL('Home/CategoryHome/'.$ShowGroup['categroupId']); ?>" style="color:orange;"><b><u><?php echo $ShowGroup['categroupName'] ?></u></b></a></li>
                  <?php endforeach; ?>
                  <?php foreach ($Category as $CategoryShow): ?>
                    <li><a href="<?php echo SITE_URL('Product/ShowProduct/'.$CategoryShow['categroupId']."/".$CategoryShow['cateId']); ?>" style="font-size:12px;">- <?php echo $CategoryShow['cateName'] ?></a></li>
                  <?php endforeach; ?>
                  <li><hr></li>
                  <li><a href="#" style="color:orange;"><b><u>Monitor TV</u></b></a></li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                  </ul>
                </div>

                <div class="col-sm-4">
                  <ul class="multi-column-dropdown">
                    <li><a href="#" style="color:orange;"><b><u>Commertrial TV</u></b></a></li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><hr></li>
                    <li><a href="#" style="color:orange;"><b><u>Hotel TV</u></b></a></li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </div>
                <div class="col-sm-4">
                  <ul class="multi-column-dropdown">
                    <li><a href="#" style="color:orange;"><b><u>Digital Signage</u></b></a></li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><hr></li>
                    <li><a href="#" style="color:orange;"><b><u>Digital TV</u></b></a></li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </div>
              <!-- </div> -->
            </ul>

          </li>
        </ul>

        <ul class="nav navbar-nav" >
          <li class="dropdown">
            <a href="#" class="dropdown-toggle dropbtn" data-toggle="dropdown"><b>อุปกรณ์ไอทีคอมพิวเตอร์ <i class="icon-chevron-down" style="padding-top:3px;"></i></a>
            <ul class="dropdown-menu multi-column columns-3 dropdown-content">
              <div class="row">
                <div class="col-sm-4">
                  <ul class="multi-column-dropdown">
                    <?php foreach ($Group as $ShowGroup): ?>
                    <li><a href="<?php echo SITE_URL('Home/CategoryHome/'.$ShowGroup['categroupId']); ?>" style="color:orange;"><b><u><?php echo $ShowGroup['categroupName'] ?></u></b></a></li>
                  <?php endforeach; ?>
                  <?php foreach ($Category as $CategoryShow): ?>
                    <li><a href="<?php echo SITE_URL('Product/ShowProduct/'.$CategoryShow['categroupId']."/".$CategoryShow['cateId']); ?>" style="font-size:12px;">- <?php echo $CategoryShow['cateName'] ?></a></li>
                  <?php endforeach; ?>
                  <li><hr></li>
                  <li><a href="#" style="color:orange;"><b><u>Monitor TV</u></b></a></li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                  </ul>
                </div>

                <div class="col-sm-4">
                  <ul class="multi-column-dropdown">
                    <li><a href="#" style="color:orange;"><b><u>Commertrial TV</u></b></a></li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><hr></li>
                    <li><a href="#" style="color:orange;"><b><u>Hotel TV</u></b></a></li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </div>
                <div class="col-sm-4">
                  <ul class="multi-column-dropdown">
                    <li><a href="#" style="color:orange;"><b><u>Digital Signage</u></b></a></li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><hr></li>
                    <li><a href="#" style="color:orange;"><b><u>Digital TV</u></b></a></li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </div>
              <!-- </div> -->
            </ul>

          </li>
        </ul>

        <ul class="nav navbar-nav" >
          <li class="dropdown">
            <a href="#" class="dropdown-toggle dropbtn" data-toggle="dropdown"><b>อุปกรณ์ต่อพวง <i class="icon-chevron-down" style="padding-top:3px;"></i></a>
            <ul class="dropdown-menu multi-column columns-3 dropdown-content">
              <div class="row">
                <div class="col-sm-4">
                  <ul class="multi-column-dropdown">
                    <?php foreach ($Group as $ShowGroup): ?>
                    <li><a href="<?php echo SITE_URL('Home/CategoryHome/'.$ShowGroup['categroupId']); ?>" style="color:orange;"><b><u><?php echo $ShowGroup['categroupName'] ?></u></b></a></li>
                  <?php endforeach; ?>
                  <?php foreach ($Category as $CategoryShow): ?>
                    <li><a href="<?php echo SITE_URL('Product/ShowProduct/'.$CategoryShow['categroupId']."/".$CategoryShow['cateId']); ?>" style="font-size:12px;">- <?php echo $CategoryShow['cateName'] ?></a></li>
                  <?php endforeach; ?>
                  <li><hr></li>
                  <li><a href="#" style="color:orange;"><b><u>Monitor TV</u></b></a></li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                  </ul>
                </div>

                <div class="col-sm-4">
                  <ul class="multi-column-dropdown">
                    <li><a href="#" style="color:orange;"><b><u>Commertrial TV</u></b></a></li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><hr></li>
                    <li><a href="#" style="color:orange;"><b><u>Hotel TV</u></b></a></li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </div>
                <div class="col-sm-4">
                  <ul class="multi-column-dropdown">
                    <li><a href="#" style="color:orange;"><b><u>Digital Signage</u></b></a></li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><hr></li>
                    <li><a href="#" style="color:orange;"><b><u>Digital TV</u></b></a></li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </div>
            </ul>
          </li>
        </ul>
      </div>
      </div>
  </nav>
  <!-- <div class="container">
  <div class="row">
  <div class="span12">
  <ul class="nav nav-pills">
  <?php echo form_open('Search','class="pull-right"'); ?>
  <input class="form-control" type="text" name="keyword" placeholder="ค้นหาสินค้า"/>
  <button style="margin-bottom:10px;" type="submit" class="btn btn-primary">ค้นหา</button>
  <?php echo form_close(); ?>
  <li ><a href="<?php echo SITE_URL('Contact'); ?>">ติดต่อเรา</a></li>
  <li ><a href="<?php echo SITE_URL('Payment'); ?>">วิธีชำระเงิน</a></li>
  <li ><a href="<?php echo SITE_URL('Service'); ?>">บริการ</a></li>
  <li ><a href="<?php echo SITE_URL('Home'); ?>">หน้าแรก</a></li>
</ul>
</div>
</div>
</div> -->

<!--/.navbar-->


<!-- new nav -->


<!-- <ul class="nav nav-pills">
<?php echo form_open('Search','class="pull-right"'); ?>
<input style="margin-top:10px;" class="form-control" type="text" name="keyword" placeholder="ค้นหาสินค้า"/>
<button type="submit" class="btn btn-primary">ค้นหา</button>
<?php echo form_close(); ?>
<li class="" style="margin-top:10px;"><a href="<?php echo SITE_URL('Contact'); ?>">ติดต่อเรา</a></li>
<li class="" style="margin-top:10px;"><a href="<?php echo SITE_URL('Payment'); ?>">วิธีชำระเงิน</a></li>
<li class="" style="margin-top:10px;"><a href="<?php echo SITE_URL('News'); ?>">ข่าวสาร</a></li>
<li class="" style="margin-top:10px;"><a href="<?php echo SITE_URL('Service'); ?>">บริการ</a></li>
<li class="" style="margin-top:10px;"><a href="<?php echo SITE_URL('Home'); ?>">หน้าแรก</a></li>
</ul> -->
<!-- Navbar ================================================== -->

<!-- <div>
  <div style="background-color:#3a3f44;">
    <div id="logoArea" class="navbar"> -->

      <!-- <div class="navbar-inner" style="">
      <ul id="topMenu" class="nav">
      <li class=""><a href="#">&nbsp;</a></li>
      <ul class="nav nav-pills">
      <li>
      <a href="#footerSection"><i class="icon-th-large" style="font-size:30px; margin-top:3px;"></i></a>
    </li>
    <?php foreach ($Group as $ShowGroup): ?>
    <li <?php if (!empty($GroupSelect)) {
    if ($ShowGroup['categroupId'] == $GroupSelect[0]['categroupId']) {
    echo "class='active'";
  }
}; ?>><a href="<?php echo SITE_URL('Home/CategoryHome/'.$ShowGroup['categroupId']); ?>" ><?php echo $ShowGroup['categroupName'] ?></a>
</li>
<?php endforeach; ?>
</ul>
</div> -->

<!-- <div class="container" style="background-color: #d9d9d9; height:60px; display: flex; justify-content: space-around;"> -->

<!-- <div class="container" style="background-color: #d9d9d9; height:120px;">
<ul id="topMenu" class="nav">
<li class=""><a href="#">&nbsp;</a></li>
<li class=""><a href="#">&nbsp;</a></li>
<ul class="nav nav-pills">
<?php foreach ($Category as $CategoryShow): ?>
<li style="padding-top:10px; padding-right:15px;"><a href="<?php echo SITE_URL('Product/ShowProduct/'.$CategoryShow['categroupId']."/".$CategoryShow['cateId']); ?>">
<font color="black" style="font-weight: bold; font-size:16px;">
<p align="center"><img src="<?php echo BASE_URL('uploads/Categorys/'.$CategoryShow['cateImg']); ?>" height="50px" width="50px" ></p>
<?php echo $CategoryShow['cateName'] ?></font></a></li>
<?php endforeach; ?>
</ul>
</div> -->

<!-- </div>
</div>
</div> -->
<!-- Header End====================================================================== -->
