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

  <!-- lightbox.css -->
  <link rel="stylesheet" href="<?php echo BASE_URL()?>assets/Front/src/css/lightbox.css">

  <!-- lightbox.css -->
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
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-pills pull-right">

        </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <a class="pull-left" href="<?php echo SITE_URL('Home');?>"><img src="<?php echo BASE_URL()?>/uploads/Logo/logonewzeno.png" style="height:75px; margin-top:5px"/></a>
        <ul class="nav nav-pills pull-right" style="padding-top:15px;">
          <?php echo form_open('Search','class="pull-right"'); ?>
          ค้นหาสินค้า : <input style="margin-top:10px; padding:15px;" type="text" name="keyword" placeholder="ชื่อสินค้า/ยี่ห้อ/รุ่น/สเปค ฯลฯ">
          <button style="" type="submit" class="btn btn-primary">ค้นหา</button>
          <?php echo form_close(); ?>
        </ul>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-pills pull-right">
          <li ><a href="<?php echo SITE_URL('Home'); ?>" class="colorTagA">หน้าแรก</a></li>
          <li ><a href="<?php echo SITE_URL('Service'); ?>" class="colorTagA">บริการ</a></li>
          <!-- <li style="margin-top:7px;"><a href="<?php echo SITE_URL('News'); ?>">ข่าวสาร</a></li> -->
          <li ><a href="<?php echo SITE_URL('Payment'); ?>" class="colorTagA">วิธีชำระเงิน</a></li>
          <li ><a href="<?php echo SITE_URL('Contact'); ?>" class="colorTagA">ติดต่อเรา</a></li>
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

    <?php foreach ($TitleGroup as $Title): ?>
      <?php if (count($Title['group']) != 0): ?>

        <?php
          $loop = 0;
          foreach ($Title['group'] as $key) {
            if (count($key['category']) != 0) {
              $loop++;
            }
          }
         ?>
        <ul class="nav navbar-nav" >
          <li class="dropdown">
            <a href="#" class="dropdown-toggle dropbtn" data-toggle="dropdown"><?php echo $Title['catetitleName'] ?> <i class="icon-chevron-down" style="padding-top:3px;"></i></a>

            <?php if ($loop == 1): ?>
              <ul class="dropdown-menu multi-column columns dropdown-content">
              <?php elseif($loop == 2): ?>
                <ul class="dropdown-menu multi-column columns-2 dropdown-content">
                <?php else: ?>
                  <ul class="dropdown-menu multi-column columns-3 dropdown-content">
                  <?php endif; ?>
                  <div class="row">
                    <?php foreach ($Title['group'] as $ShowGroup): ?>
                      <?php if (count($ShowGroup['category']) != 0): ?>
                        <?php if ($loop == 1): ?>
                          <div class="col-md-11">
                          <?php elseif($loop == 2): ?>
                            <div class="col-md-6">
                            <?php else: ?>
                              <div class="col-md-4">
                              <?php endif; ?>
                              <ul class="multi-column-dropdown">
                                <li><a href="<?php echo SITE_URL('Home/CategoryHome/'.$ShowGroup['categroupId']); ?>" style="color:orange;"><b><u><?php echo $ShowGroup['categroupName'] ?></u></b></a></li>
                                <?php foreach ($ShowGroup['category'] as $CategoryShow): ?>
                                  <li><a href="<?php echo SITE_URL('Product/ShowProduct/'.$CategoryShow['categroupId']."/".$CategoryShow['cateId']); ?>" style="font-size:12px;">- <?php echo $CategoryShow['cateName'] ?></a></li>
                                <?php endforeach; ?>
                                <?php if (count($Title['group']) > 2): ?>
                                  <li><hr></li>
                                <?php endif; ?>
                              </ul>
                            </div>
                          <?php endif; ?>
                        <?php endforeach; ?>
                        <!-- </div> -->
                      </ul>
                    </li>
                  </ul>
                <?php endif; ?>
              <?php endforeach; ?>
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
