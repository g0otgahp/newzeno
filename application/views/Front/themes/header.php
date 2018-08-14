<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Newzeno : ตัวแทนจำหน่ายวิดีโอวอล โปรเจคเตอร์ เครื่องใช้ไฟฟ้า อันดับ 1 ของประเทศไทย</title>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=0"> -->
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

  p {
    margin:auto;
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
      <div class="container">
        <div class="row" style="padding:10px; margin-top:1px; margin-left:3px;">
          <div>
            <span style="color:white;"><img width="20" height="20" src="<?php echo BASE_URL()?>/assets/Front/themes/images/phone.png"> เบอร์ติดต่อ : 02-497-0500</span>
            <a class="pull-right" href="<?php echo SITE_URL('Login');?>" style="color:white; margin-right:4px;"><span>Administrator</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header End====================================================================== -->


  <!-- new nav -->
  <div class="container">
    <div class="row">
      <div class="col-md-1" style="padding-left:0px; padding-right:0px;">
        <a class="pull-left" href="<?php echo SITE_URL('Home');?>"><img src="<?php echo BASE_URL()?>/uploads/Logo/logo2.png" style="height:73px; margin:25px;"/></a>
      </div>

      <div class="col-md-11" style="padding-left:0px; padding-right:0px;">
        <div class="row">
          <div class="col-md-12">
            <ul class="nav nav-pills pull-right">
              <?php echo form_open('Search','class="pull-right" style="margin:0px; margin-right:15px;"'); ?>
              <b>ค้นหาสินค้า : </b><input style="margin-top:10px; padding:15px;" type="text" name="keyword" placeholder="ชื่อสินค้า/ยี่ห้อ/รุ่น/สเปค ฯลฯ">
              <button type="submit" class="btn btn-primary btn-sm">ค้นหา</button>
              <?php echo form_close(); ?>
            </ul>
          </div>

          <div class="col-md-12">
            <ul class="nav nav-pills pull-left" style="margin-left:10px;">
              <a href="<?php echo SITE_URL('Home');?>"><img src="<?php echo BASE_URL()?>/uploads/Logo/textlogo.png" style="height:25px;" /></a>
            </ul>
          </div>

          <div class="col-md-12" style="margin-top:15px;">
            <ul class="nav nav-pills pull-right">
              <li ><a href="<?php echo SITE_URL('Home'); ?>" class="colorTagA">หน้าแรก</a></li>
              <li ><a href="<?php echo SITE_URL('Service'); ?>" class="colorTagA">บริการ</a></li>
              <li ><a href="<?php echo SITE_URL('Payment'); ?>" class="colorTagA">วิธีชำระเงิน</a></li>
              <li ><a href="<?php echo SITE_URL('Contact'); ?>" class="colorTagA">ติดต่อเรา</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <!-- <div class="row">
    <div class="col-md-12">
    <a class="pull-left" href="<?php echo SITE_URL('Home');?>"><img src="<?php echo BASE_URL()?>/uploads/Logo/logonewzenoOld.png" style="height:75px;"/></a>
  </div>
</div> -->
</div>

<!-- <div class="container">
<div class="row">
<div class="col-md-12">
<ul class="nav nav-pills pull-right">
<li style="font-size:12px;"><a href="<?php echo SITE_URL('Home'); ?>" class="colorTagA">หน้าแรก</a></li>
<li ><a href="<?php echo SITE_URL('Service'); ?>" class="colorTagA">บริการ</a></li>
<li ><a href="<?php echo SITE_URL('Payment'); ?>" class="colorTagA">วิธีชำระเงิน</a></li>
<li ><a href="<?php echo SITE_URL('Contact'); ?>" class="colorTagA">ติดต่อเรา</a></li>
</ul>
</div>
</div>
</div> -->


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
      <a href="#" class="dropdown-toggle dropbtn" data-toggle="dropdown">Infomation Display From 1<i class="icon-chevron-down" style="padding-top:3px;"></i></a>
      <ul class="dropdown-menu multi-column columns dropdown-content">
        <div class="row">
          <div class="col-md-12">
            <ul class="multi-column-dropdown">
              <li><a href="#" style="color:orange;"><b><u>Digital Signage</u></b></a></li>
              <li><a href="#" style="font-size:12px;">- Standard</a></li>
              <li><a href="#" style="font-size:12px;">- Video Wall</a></li>
              <li><a href="#" style="font-size:12px;">- Ultra Stretch</a></li>
              <li><a href="#" style="font-size:12px;">- High Brightness</a></li>
              <li><a href="#" style="font-size:12px;">- Interactive</a></li>
              <li><a href="#" style="font-size:12px;">- Mirror</a></li>
              <li><a href="#" style="font-size:12px;">- Transparent</a></li>
              <li><a href="#" style="font-size:12px;">- Accessories</a></li>
              <li><hr></li>
              <li><a href="#" style="color:orange;"><b><u>Commercial TV</u></b></a></li>
              <li><a href="#" style="font-size:12px;">- Hotel TV</a></li>
              <li><a href="#" style="font-size:12px;">- TV Signage</a></li>
              <li><a href="#" style="font-size:12px;">- Special</a></li>
              <li><a href="#" style="font-size:12px;">- Accessories</a></li>
              <li><hr></li>
              <li><a href="#" style="color:orange;"><b><u>OLED Signage</u></b></a></li>
              <li><a href="#" style="font-size:12px;">- In-glass Wallpaper</a></li>
              <li><a href="#" style="font-size:12px;">- Video Wall</a></li>
              <li><a href="#" style="font-size:12px;">- Wallpaper</a></li>
              <li><a href="#" style="font-size:12px;">- Open Frame</a></li>
              <li><a href="#" style="font-size:12px;">- Dual-view Curved Tiling</a></li>
              <li><a href="#" style="font-size:12px;">- Dual-View Flat</a></li>
              <li><hr></li>
              <li><a href="#" style="color:orange;"><b><u>LED Signage</u></b></a></li>
              <li><a href="#" style="font-size:12px;">- Indoor</a></li>
              <li><a href="#" style="font-size:12px;">- Outdoor</a></li>
              <li><hr></li>
            </ul>
          </div>
        </div>
      </ul>
    </li>
  </ul>

  <ul class="nav navbar-nav" >
    <li class="dropdown">
      <a href="#" class="dropdown-toggle dropbtn" data-toggle="dropdown">Infomation Display From 2<i class="icon-chevron-down" style="padding-top:3px;"></i></a>
      <ul class="dropdown-menu multi-column columns-2 dropdown-content">

        <div class="row">
          <div class="col-md-6">
            <ul class="multi-column-dropdown">
              <li><a href="#" style="color:orange;"><b><u>Digital Signage</u></b></a></li>
              <li><a href="#" style="font-size:12px;">- Standard</a></li>
              <li><a href="#" style="font-size:12px;">- Video Wall</a></li>
              <li><a href="#" style="font-size:12px;">- Ultra Stretch</a></li>
              <li><a href="#" style="font-size:12px;">- High Brightness</a></li>
              <li><a href="#" style="font-size:12px;">- Interactive</a></li>
              <li><a href="#" style="font-size:12px;">- Mirror</a></li>
              <li><a href="#" style="font-size:12px;">- Transparent</a></li>
              <li><a href="#" style="font-size:12px;">- Accessories</a></li>
              <li><hr><li>
                <li><a href="#" style="color:orange;"><b><u>Commercial TV</u></b></a></li>
                <li><a href="#" style="font-size:12px;">- Hotel TV</a></li>
                <li><a href="#" style="font-size:12px;">- TV Signage</a></li>
                <li><a href="#" style="font-size:12px;">- Special</a></li>
                <li><a href="#" style="font-size:12px;">- Accessories</a></li>
              </ul>
            </div>

            <div class="col-md-6">
              <ul class="multi-column-dropdown">
                <li><a href="#" style="color:orange;"><b><u>OLED Signage</u></b></a></li>
                <li><a href="#" style="font-size:12px;">- In-glass Wallpaper</a></li>
                <li><a href="#" style="font-size:12px;">- Video Wall</a></li>
                <li><a href="#" style="font-size:12px;">- Wallpaper</a></li>
                <li><a href="#" style="font-size:12px;">- Open Frame</a></li>
                <li><a href="#" style="font-size:12px;">- Dual-view Curved Tiling</a></li>
                <li><a href="#" style="font-size:12px;">- Dual-View Flat</a></li>
                <li><hr><li>
                  <li><a href="#" style="color:orange;"><b><u>LED Signage</u></b></a></li>
                  <li><a href="#" style="font-size:12px;">- Indoor</a></li>
                  <li><a href="#" style="font-size:12px;">- Outdoor</a></li>
                </ul>
              </div>
            </div>
          </ul>
        </li>
      </ul>


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
          <!-- Header End====================================================================== -->
