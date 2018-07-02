<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="<?php echo BASE_URL()?>/assets/Back/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Newzeno : Administration</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />


	<!-- Bootstrap core CSS     -->
	<link href="<?php echo BASE_URL()?>/assets/Back/css/bootstrap.min.css" rel="stylesheet" />

	<!--  Light Bootstrap Table core CSS    -->
	<link href="<?php echo BASE_URL()?>/assets/Back/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

	<!-- Animation library for notifications   -->
	<link href="<?php echo BASE_URL()?>/assets/Back/css/animate.min.css" rel="stylesheet"/>

	<!--     Fonts and icons     -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<link href="<?php echo BASE_URL()?>/assets/Back/css/pe-icon-7-stroke.css" rel="stylesheet" />

	<!-- Bootstrap Datatable -->
	<link href="<?php echo BASE_URL()?>/assets/Back/datatable-bootstrap/dataTables.bootstrap.min.css" rel="stylesheet"/>

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo BASE_URL()?>/assets/Back/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo BASE_URL()?>/assets/Back/css/icomoon.css">

	<!-- <link rel="stylesheet" href="assets/css/style.css"> -->

	<style>
	.js .animate-box {
		opacity: 0;
	}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
  <style>

  * , span , td , p , a , label , h1 , h2 , h3 , h4 {
    font-family: 'Prompt', sans-serif;
		font-size: 14px;
  }

</style>
</head>
<body>

	<div class="wrapper">
		<div class="sidebar" data-color="" data-image="<?php echo BASE_URL()?>/assets/Back/img/sidebar-4.jpg">

			<!--
			Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
			Tip 2: you can also add an image using data-image tag
		-->

		<div class="sidebar-wrapper">
			<div class="logo">
				<a href="<?php echo SITE_URL('home');?>" class="simple-text">
					<img src="<?php echo BASE_URL()?>/uploads/logo/logonewzeno2.png" height="50px"/>
				</a>
			</div>

			<ul class="nav">
		<!-- <li <?php //if($this->uri->segment(1)=="home"){ echo "class='active'"; } ?>>
				<a href="<?php //echo SITE_URL('home');?>">
				<i class="pe-7s-graph2"></i>
				<p>ภาพรวม</p>
			</a>
		</li> -->
		<li <?php if($this->uri->segment(2)=="Dashboard"){ echo "class='active'"; } ?>>
			<a href="<?php echo SITE_URL('Admin/Dashboard');?>">
				<i class="pe-7s-graph" style="color:black;"></i>
				<span style="color:red;">ภาพรวม </span><span style="color:black;">(ทำที่หลังสุด)</span>
			</a>
		</li>
		<li <?php if($this->uri->segment(2)=="Product"){ echo "class='active'"; } ?>>
			<a href="<?php echo SITE_URL('Admin/Product')?>">
				<i class="pe-7s-box2" style="color:black;"></i>
				<span style="color:red;">การจัดการสินค้า</span><span style="color:black;">(ทำที่หลังสุด)</span>
			</a>
		</li>
		<li <?php if($this->uri->segment(2)=="Category"){ echo "class='active'"; } ?>>
			<a href="<?php echo SITE_URL('Admin/Category')?>">
				<i class="pe-7s-keypad" style="color:black;"></i>
				<span style="color:red;">การจัดการประเภทสินค้า</span>
			</a>
		</li>
		<li <?php if($this->uri->segment(2)=="Brand"){ echo "class='active'"; } ?>>
			<a href="<?php echo SITE_URL('Admin/Brand')?>">
				<i class="pe-7s-gleam" style="color:black;"></i>
				<span style="color:black;">การจัดการแบรนด์สินค้า</span>
			</a>
		</li>
		<li <?php if($this->uri->segment(2)=="Employee"){ echo "class='active'"; } ?>>
			<a href="<?php echo SITE_URL('Admin/Employee')?>">
				<i class="pe-7s-users" style="color:black;"></i>
				<span style="color:black;">การจัดการพนักงาน</span>
			</a>
		</li>
		<li <?php if($this->uri->segment(2)=="Admin/Position"){ echo "class='active'"; } ?>>
			<a href="<?php echo SITE_URL('Admin/Position')?>">
				<i class="pe-7s-id" style="color:black;"></i>
				<span style="color:black;">การจัดการตำแหน่ง</span>
			</a>
		</li>
		<!-- <li <?php //if($this->uri->segment(2)=="config"){ echo "class='active'"; } ?>>
			<a href="<?php //echo SITE_URL('config')?>">
				<i class="pe-7s-config"></i>
				<p>ตั้งค่า</p>
			</a>
		</li> -->
	</ul>
</div>
</div>

<div class="main-panel">
	<nav class="navbar navbar-default navbar-fixed">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					<?php if ($this->uri->segment(1)=="home"): ?>
						ภาพรวม
					<?php elseif ($this->uri->segment(1)=="history"):?>
						บันทึกรายการ
					<?php elseif ($this->uri->segment(1)=="product"):?>
						การจัดการสินค้า
					<?php elseif ($this->uri->segment(1)=="customer"):?>
						การจัดการลูกค้า
					<?php elseif ($this->uri->segment(1)=="employee"):?>
						การจัดการพนักงาน
					<?php elseif ($this->uri->segment(1)=="config"):?>
						ตั้งค่า
					<?php endif; ?>
				</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-user" style="color:red;"></i>
							เจ้าหน้าที่ : <span style="color:black;"><?php echo $_SESSION['adminFullname']?></span> /
							ตำแหน่ง : <span style="color:blue;"><?php echo $_SESSION['positionName']?></span>
						</a>
					</li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="<?php echo SITE_URL('Logout')?>">
							<i class="pe-7s-power"></i>
							ออกจากระบบ
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
