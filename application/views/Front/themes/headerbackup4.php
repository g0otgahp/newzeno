<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Newzeno : นิวซีโน่ ตัวแทนจำหน่ายวิดีโอวอล โปรเจคเตอร์ เครื่องใช้ไฟฟ้า อันดับ 1 ของประเทศไทย</title>
  <meta name="viewport" content="width=device-width, initial-scale=0">
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
  <!-- Image Zoom -->
  <link rel="stylesheet" href="<?php echo BASE_URL()?>assets/Front/plugin/ImageZoom/css/main.css">

  <!-- Bootstrap Datatable -->
  <link href="<?php echo BASE_URL()?>/assets/Back/datatable-bootstrap/dataTables.bootstrap.min.css" rel="stylesheet"/>

  <!-- Select2.css -->
  <link rel="stylesheet" href="<?php echo BASE_URL()?>assets/Back/select2-4.0.6-rc.1/dist/css/select2.min.css">

  <!-- lightbox.css -->
  <link rel="stylesheet" href="<?php echo BASE_URL()?>assets/Front/src/css/lightbox.css">

  <!-- Multi-colum Menu.css -->
  <link rel="stylesheet" href="<?php echo BASE_URL()?>assets/Front/css/multi-colum.css">

  <!-- card.css -->
  <link rel="stylesheet" href="<?php echo BASE_URL()?>assets/Front/css/card.css">

  <!-- font-awesome.min -->
  <link href="<?php echo BASE_URL()?>/assets/Front/plugin/SlidesJS/css/font-awesome.min.css" rel="stylesheet"/>

  <!-- slippry -->
  <link href="<?php echo BASE_URL()?>/assets/Front/plugin/slippry/demo/demo.css" rel="stylesheet"/>
  <link href="<?php echo BASE_URL()?>/assets/Front/plugin/slippry/dist/slippry.css" rel="stylesheet"/>

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
            <ul class="nav nav-pills pull-right" style="color:white;">
              <a href="<?php echo SITE_URL('Home'); ?>">หน้าแรก</a> /
              <a href="<?php echo SITE_URL('Service'); ?>" >บริการ</a> /
              <a href="<?php echo SITE_URL('Payment'); ?>">วิธีชำระเงิน</a> /
              <a href="<?php echo SITE_URL('Contact'); ?>">ติดต่อเรา</a> /
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header End====================================================================== -->


  <!-- new nav -->
  <div class="container">
    <div class="row">
      <div class="col-md-1" style="padding-left:0px; padding-right:0px; padding-top:0px;">
        <a class="pull-left" href="<?php echo SITE_URL('Home');?>"><img src="<?php echo BASE_URL()?>/uploads/Logo/logo2.png" style="height:70px; margin:25px;"/></a>
      </div>
      <div class="col-md-11" style="padding-left:0px; padding-right:0px;">
        <div class="row">
          <div class="col-md-12">
            <ul class="nav nav-pills pull-left" style="margin-left:10px; margin-top:45px;">
              <a href="<?php echo SITE_URL('Home');?>"><img src="<?php echo BASE_URL()?>/uploads/Logo/textlogo.png" style="height:25px;" /></a>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div style="background-color:#3a3f44;">
    <nav class="container" role="navigation">
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <script src="//cdn.rawgit.com/tonystar/bootstrap-hover-tabs/v3.1.1/bootstrap-hover-tabs.js"></script>
      <div class="collapse navbar-collapse" style="padding:0px;">
        <ul class="nav nav-tabs">
          <?php foreach ($TitleGroup as $dropdown): ?>
            <li><a data-toggle="tab" href="#menu<?php echo $dropdown['catetitleId'] ?>"><?php echo $dropdown['catetitleName'] ?><i class="icon-chevron-down" style="padding-top:3px;"></i></a></li>
          <?php endforeach; ?>
          <li class="active pull-right"><a data-toggle="tab" href="#search"><i class="icon-search" style="padding-top:3px;"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="container">
      <div class="card" >
        <div class="tab-content" style="margin-bottom:0px;">
          <div id="search" class="tab-pane fade active in" style="margin-top:20px;">
            <div class="">
              <?php echo form_open('Search'); ?>
              <div class="col-md-3" align="right" style="margin-top:5px;">
              <b>ค้นหาสินค้าทั้งหมด : </b>
            </div>
            <div class="col-md-6">
              <input class="form-control" style="padding:15px;" type="text" name="keyword">
            </div>
              <div class="col-md-3" align-left>
              <button type="submit" class="btn btn-primary btn-sm">ค้นหา</button>
            </div>

              <?php echo form_close(); ?>
            </div>
          </div>
          <?php $i=1; foreach ($TitleGroup as $title): ?>
            <div id="menu<?php echo $title['catetitleId'] ?>" class="tab-pane fade in" style=" margin-top:20px;">
              <?php foreach ($title['group'] as $group): ?>
                <div class="col-md-3">
                  <ul class="multi-column-dropdown">
                    <li class="btn btn-block"><a href="<?php echo SITE_URL('Home/CategoryHome/'.$group['categroupId']); ?>#productlist" style="color:orange;"><b><u><?php echo $group['categroupName'] ?></u></b></a></li>
                    <?php foreach ($group['category'] as $category): ?>
                      <li><a href="<?php echo SITE_URL('Product/ShowProduct/'.$category['categroupId']."/".$category['cateId']); ?>#productlist" style="font-size:14px;">- <?php echo $category['cateName'] ?></a></li>
                    <?php endforeach; ?>
                    <hr>
                  </ul>
                </div>
              <?php endforeach; ?>
            </div>
          <?php $i++; endforeach; ?>
        </div>
      </div>
      <hr>

    </div>
  </div>
</div>
</nav>

<!-- Header End====================================================================== -->
