<!doctype html>
<html lang="en" ng-app="App">
<head>
	<meta charset="utf-8" />
	<meta name='viewport' content='width=device-width, initial-scale=0'  />
	<link rel="icon" type="image/png" href="<?php echo BASE_URL()?>/assets/Back/img/newicon_ZV1_icon.ico">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> -->

	<title>Newzeno : Administration</title>

	<!-- Bootstrap core CSS     -->
	<link href="<?php echo BASE_URL()?>/assets/Back/css/bootstrap.min.css" rel="stylesheet" />

	<!--  Light Bootstrap Table core CSS    -->
	<link href="<?php echo BASE_URL()?>/assets/Back/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

	<!-- Animation library for notifications   -->
	<link href="<?php echo BASE_URL()?>/assets/Back/css/animate.min.css" rel="stylesheet"/>

	<!--     Fonts and icons     -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<link href="<?php echo BASE_URL()?>/assets/Back/css/pe-icon-7-stroke.css" rel="stylesheet" />

	<!-- Bootstrap Datatable -->
	<link href="<?php echo BASE_URL()?>/assets/Back/datatable-bootstrap/dataTables.bootstrap.min.css" rel="stylesheet"/>

	<!-- Select2.css -->
	<link rel="stylesheet" href="<?php echo BASE_URL()?>assets/Back/select2-4.0.6-rc.1/dist/css/select2.min.css">

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo BASE_URL()?>/assets/Back/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo BASE_URL()?>/assets/Back/css/icomoon.css">

	<!-- <link rel="stylesheet" href="assets/css/style.css"> -->
	<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">

	<!-- Summernote -->
	<link href="<?php echo BASE_URL()?>/assets/Back/summernote/summernote.css" rel="stylesheet">

	<style>
	.js .animate-box {
		opacity: 0;
	}

	* , span , td , a , label {
		font-family: 'Prompt', sans-serif;
		font-size: 14px;
	}

	h1 , h2 , h3 , h4 {
		font-family: 'Prompt', sans-serif;
	}

</style>
</head>
<body ng-controller="Ctrl">

	<div class="wrapper">
		<div class="sidebar" data-color="" data-image="<?php echo BASE_URL()?>/assets/Back/img/sidebar-2.jpg">

			<!--
			Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
			Tip 2: you can also add an image using data-image tag
		-->

		<div class="sidebar-wrapper">
			<div class="logo" style="background-color:;" >
				<a href="<?php echo SITE_URL('home');?>" class="simple-text">
					<img  src="<?php echo BASE_URL()?>/uploads/Logo/logonewzeno2.png" height="50px"/>
				</a>
			</div>

			<ul class="nav">
				<!-- <li <?php //if($this->uri->segment(1)=="home"){ echo "class='active'"; } ?>>
				<a href="<?php //echo SITE_URL('home');?>">
				<i class="pe-7s-graph2"></i>
				<p>ภาพรวม</p>
			</a>
		</li> -->
		<!-- <br>
		<b style="color:Blue"> <center><u>ข้อมูล</u></center> </b> -->

		<center >- กิจกรรม -</center>
		<li  <?php if($this->uri->segment(2)=="Dashboard"){ echo "class='active'"; } ?>>
			<a href="<?php echo SITE_URL('Admin/Dashboard');?>">
				<i class="pe-7s-graph"></i>
				<span>ภาพรวม </span>
			</a>
		</li>

		<!-- <li <?php if($this->uri->segment(2)=="Quotation"){ echo "class='active'"; } ?>>
			<a href="<?php echo SITE_URL('Admin/Quotation') ?>">
				<i class="pe-7s-note2" ></i>
				<span >ใบเสนอราคา</span>
			</a>
		</li> -->

		<div style="padding-left:20px; padding-right:20px;"><hr></div>
		<center>- ฐานข้อมูลสินค้า -</center>

		<li <?php if($this->uri->segment(2)=="Search" || $this->uri->segment(3)=="ProductDetail"){ echo "class='active'"; } ?>>
			<a href="<?php echo SITE_URL('Admin/Search')?>">
				<i class="pe-7s-search" ></i>
				<span>ค้นหาสินค้า</span>
			</a>
		</li>

		<li <?php if($this->uri->segment(3)=="ProductQuick"){ echo "class='active'"; } ?>>
			<a href="<?php echo SITE_URL('Admin/Product/ProductQuick')?>">
				<i class="pe-7s-plus" ></i>
				<span>เพิ่มสินค้า</span><span ></span>
			</a>
		</li>



		<li <?php if($_SESSION["positionId"] != 1){ echo "class='hide'"; }
							else{ if($this->uri->segment(2)=="ProductRestore"){ echo "class='active'"; }}?>>

			<a href="<?php echo SITE_URL('Admin/ProductRestore') ?>">
				<i class="pe-7s-box1" ></i>
				<span>กู้คืนสินค้า</span><span ></span>
			</a>
		</li>



		<!-- <li <?php if($this->uri->segment(2)=="Product"){ echo "class='active'"; } ?>>
			<a href="<?php echo SITE_URL('Admin/Product')?>">
				<i class="pe-7s-box2" ></i>
				<span>ข้อมูลสินค้าหลัก</span><span ></span>
			</a>
		</li> -->

		<div style="padding-left:20px; padding-right:20px;"><hr></div>
		<center >- ระเบียบสัมพันธ์สินค้า -</center>


		<!-- <br>
		<b style="color:Blue"> <center><u>สินค้า</u></center> </b> -->
		<li <?php if($this->uri->segment(2)=="TitleGroup"){ echo "class='active'"; } ?>>
			<a href="<?php echo SITE_URL('Admin/TitleGroup')?>">
				<i class="pe-7s-id" ></i>
				<span >การจัดการหัวข้อสินค้า</span>
			</a>
		</li>
		<li <?php if($this->uri->segment(2)=="Group"){ echo "class='active'"; } ?>>
			<a href="<?php echo SITE_URL('Admin/Group')?>">
				<i class="pe-7s-albums" ></i>
				<span >การจัดการกลุ่มสินค้า</span>
			</a>
		</li>
		<li <?php if($this->uri->segment(2)=="Category"){ echo "class='active'"; } ?>>
			<a href="<?php echo SITE_URL('Admin/Category')?>">
				<i class="pe-7s-keypad" ></i>
				<span >การจัดการประเภทสินค้า</span>
			</a>
		</li>
		<li <?php if($this->uri->segment(2)=="Brand"){ echo "class='active'"; } ?>>
			<a href="<?php echo SITE_URL('Admin/Brand')?>">
				<i class="pe-7s-gleam" ></i>
				<span >การจัดการแบรนด์สินค้า</span>
			</a>
		</li>


		<?php if ($_SESSION["positionId"] != 1): ?>
			<div style="padding-left:20px; padding-right:20px;" <?php echo "hidden" ?>><hr></div>
			<center <?php echo "hidden" ?>>- พนักงาน -</center>
			<?php else: ?>
				<div style="padding-left:20px; padding-right:20px;"><hr></div>
				<center>- พนักงาน -</center>
		<?php endif; ?>

		<!-- <br>
		<b style="color:Blue"> <center><u>พนักงาน</u></center> </b> -->

		<!-- <li <?php if($this->uri->segment(2)=="Employee"){ echo "class='active'"; } ?>> -->
		<li <?php if($_SESSION["positionId"] != 1){ echo "class='hide'"; }
							else{ if($this->uri->segment(2)=="Employee"){ echo "class='active'"; }}?>>
			<a href="<?php echo SITE_URL('Admin/Employee')?>">
				<i class="pe-7s-users" ></i>
				<span >การจัดการพนักงาน</span>
			</a>
		</li>
		<!-- <li <?php if($this->uri->segment(2)=="Position"){ echo "class='active'"; } ?>> -->
		<li <?php if($_SESSION["positionId"] != 1){ echo "class='hide'"; }
							else{ if($this->uri->segment(2)=="Position"){ echo "class='active'"; }}?>>
			<a href="<?php echo SITE_URL('Admin/Position')?>">
				<i class="pe-7s-id" ></i>
				<span >การจัดการตำแหน่ง</span>
			</a>
		</li>

<div style="padding-left:20px; padding-right:20px;"><hr></div>
		<center >- ตัวแทน -</center>


		<li <?php if($this->uri->segment(2)=="Agent"){ echo "class='active'"; } ?>>
			<a href="<?php echo SITE_URL('Admin/Agent'); ?>">
				<i class="pe-7s-network" ></i>
				<span >ตัวแทนจำหน่าย</span>
			</a>
		</li>

<div style="padding-left:20px; padding-right:20px;"><hr></div>
		<center >- การตั้งค่า -</center>


		<!-- <br>
		<b style="color:Blue"> <center><u>การตั้งค่า</u></center> </b> -->

		<li <?php if($this->uri->segment(2)=="Config"){ echo "class='active'"; } ?>>
				<a href="<?php echo SITE_URL('Admin/Config')?>">
					<i class="pe-7s-config" ></i>
					<span >ตั้งค่าทั่วไป</span>
				</a>
		</li>
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
					<?php if ($this->uri->segment(2)=="Admin"): ?>
						ภาพรวม
					<?php elseif ($this->uri->segment(2)=="AA"):?>
						ข่าวสารโปรโมชั่น
					<?php elseif ($this->uri->segment(2)=="Product"):?>
						การจัดการสินค้า
					<?php elseif ($this->uri->segment(2)=="Group"):?>
						การจัดการกลุ่มประเภทสินค้า
					<?php elseif ($this->uri->segment(2)=="Category"):?>
						การจัดการประเภทสินค้า
					<?php elseif ($this->uri->segment(2)=="Brand"):?>
						การจัดการแบรนด์สินค้า
					<?php elseif ($this->uri->segment(2)=="Employee"):?>
						การจัดการพนักงาน
					<?php elseif ($this->uri->segment(2)=="Position"):?>
						การจัดการตำแหน่ง
					<?php elseif ($this->uri->segment(2)=="AA"):?>
						ตัวแทนจำหน่าย
					<?php elseif ($this->uri->segment(2)=="Config"):?>
						ตั้งค่า
					<?php endif; ?>
				</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-user" style="color:red;"></i>
							เจ้าหน้าที่ : <span ><?php echo $_SESSION['adminFullname']?></span> /
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
