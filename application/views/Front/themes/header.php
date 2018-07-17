<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Newzeno : ตัวแทนจำหน่ายวิดีโอวอล โปรเจคเตอร์ อันดับ 1 ของประเทศไทย</title>
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


  <style>
  * , span , td , p , a , label , button {
    font-family: 'Prompt', sans-serif;
    font-size: 14px;
  }
</style>

  <style>
  h1 , h2 , h3 , h4  {
    font-family: 'Prompt', sans-serif;
  }

  </style>

</head>
<body>
  <div style="background-color:#3a3f44;">
    <div class="container" >
      <div class="row" style="padding:5px;">
        <div class="pull-right">
          <!-- <a href="#" style="color:white;"><span class="">Menu 1</span></a> /
          <a href="#" style="color:white;"><span class="">Menu 2</span></a> /
          <a href="#" style="color:white;"><span class="">Menu 3</span></a> / -->
          <a href="<?php echo SITE_URL('Login');?>" style="color:white;"><span class="">Administrator</span></a>
        </div>
      </div>
    </div>
  </div>
  <div class="container" style="background-color:white; margin-top:10px; padding:10px;">
    <!-- <a href="<?php echo SITE_URL('Home');?>"><img src="<?php echo BASE_URL()?>/uploads/Logo/azza_logo.png" height="80px" width="150"/></a> -->
    <a href="<?php echo SITE_URL('Home');?>"><img src="<?php echo BASE_URL()?>/uploads/Logo/logonewzeno.png" height="100px"/></a>
    <form class="pull-right" style="margin-top:10px;">
      <input style="margin-top:10px;" class="form-control" type="text" placeholder="Products Search"/>
      <!-- <select class="form-control select2-single" style="margin-top:10px;">
        <option>-เลือกประเภท-</option>
        <option>CLOTHES </option>
        <option>FOOD AND BEVERAGES </option>
        <option>HEALTH & BEAUTY </option>
        <option>SPORTS & LEISURE </option>
        <option>BOOKS & ENTERTAINMENTS </option>
      </select>
      <select class="form-control select2-single" style="margin-top:10px;">
        <option>-เลือกยี่ห้อ-</option>
        <option>CLOTHES </option>
        <option>FOOD AND BEVERAGES </option>
        <option>HEALTH & BEAUTY </option>
        <option>SPORTS & LEISURE </option>
        <option>BOOKS & ENTERTAINMENTS </option>
      </select> -->
      <button type="submit" class="btn btn-primary">ค้นหา</button>
    </form>
  </div>


<!-- new nav -->

<div class="container">

  <ul id="topMenu" class="nav" style="height:15px">

    <ul class="nav nav-pills">


      <li class=""><a href="<?php echo SITE_URL('Contact'); ?>">ติดต่อเรา</a></li>
      <li class=""><a href="<?php echo SITE_URL('Payment'); ?>">วิธีชำระเงิน</a></li>
      <li class=""><a href="<?php echo SITE_URL('Home'); ?>">ตัวแทนจำหน่าย</a></li>
      <li class=""><a href="<?php echo SITE_URL('Home'); ?>">ผลงาน</a></li>
      <li class=""><a href="<?php echo SITE_URL('Home'); ?>">ข่าวสาร</a></li>
      <li class=""><a href="<?php echo SITE_URL('Service'); ?>">บริการ</a></li>
      <li class=""><a href="<?php echo SITE_URL('Home'); ?>">หน้าแรก</a></li>

  </ul>
</ul>
</div>

<!-- new nav -->



  <!-- Navbar ================================================== -->
  <div>
    <div style="background-color:#3a3f44;">
      <div id="logoArea" class="navbar">
        <a data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar" style="margin-top:8px; padding:5px;">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="navbar-inner" style="">

          <ul id="topMenu" class="nav">
            <li class=""><a href="#">&nbsp;</a></li>

            <ul class="nav nav-pills">

              <?php foreach ($Group as $ShowGroup): ?>

              <li class="" style="padding-right:20px;"><a href="<?php echo SITE_URL('Home/CategoryHome/'.$ShowGroup['categroupId']); ?>"><?php echo $ShowGroup['categroupName'] ?></a></li>

              <?php endforeach; ?>

        </ul>
      </div>




      <!-- <div class="container" style="background-color: #d9d9d9; height:60px; display: flex; justify-content: space-around;"> -->
      <div class="container" style="background-color: #d9d9d9; height:60px;">

        <ul id="topMenu" class="nav">
          <li class=""><a href="#">&nbsp;</a></li>
          <li class=""><a href="#">&nbsp;</a></li>


          <ul class="nav nav-pills">

            <?php foreach ($Category as $CategoryShow): ?>
              <li class="" style="padding-top:10px; padding-right:15px;"><a href="<?php echo SITE_URL('Product/ShowProduct/'.$CategoryShow['categroupId']); ?>"><font color="black" style="font-weight: bold; font-size:16px;"><?php echo $CategoryShow['cateName'] ?></font></a></li>
            <?php endforeach; ?>
      </ul>
    </div>





    </div>
  </div>
</div>
<!-- Header End====================================================================== -->
