<!DOCTYPE html>
<html>
<head>
	<meta http-equiv=Content-Type content="text/html; charset=utf-8">
	<title>Newzeno : Administrator</title>
</head>
<link rel="icon" type="image/png" href="<?php echo BASE_URL()?>/assets/Back/img/newicon_ZV1_icon.ico">
<link href="<?php echo BASE_URL()?>/assets/Back/css/bootstrap.min.css" rel="stylesheet" />


<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
	width: 360px;
	padding: 8% 0 0;
	margin: auto;
}
.form {
	position: relative;
	z-index: 1;
	background: #FFFFFF;
	max-width: 360px;
	margin: 0 auto 100px;
	padding: 45px;
	text-align: center;
	box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
	font-family: "Roboto", sans-serif;
	outline: 0;
	background: #f2f2f2;
	width: 100%;
	border: 0;
	margin: 0 0 15px;
	padding: 15px;
	box-sizing: border-box;
	font-size: 14px;
}
.form button {
	font-family: "Roboto", sans-serif;
	text-transform: uppercase;
	outline: 0;
	background: #4CAF50;
	width: 100%;
	border: 0;
	padding: 15px;
	color: #FFFFFF;
	font-size: 14px;
	-webkit-transition: all 0.3 ease;
	transition: all 0.3 ease;
	cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
	background: #43A047;
}
.form .message {
	margin: 15px 0 0;
	color: #b3b3b3;
	font-size: 12px;
}
.form .message a {
	color: #4CAF50;
	text-decoration: none;
}
.form .register-form {
	display: none;
}
/* .container {
	position: relative;
	z-index: 1;
	max-width: 300px;
	margin: 0 auto;
}
.container:before, .container:after {
	content: "";
	display: block;
	clear: both;
}
.container .info {
	margin: 50px auto;
	text-align: center;
}
.container .info h1 {
	margin: 0 0 15px;
	padding: 0;
	font-size: 36px;
	font-weight: 300;
	color: #1a1a1a;
}
.container .info span {
	color: #4d4d4d;
	font-size: 12px;
}
.container .info span a {
	color: #000000;
	text-decoration: none;
}
.container .info span .fa {
	color: #EF3B3A;
} */
body {
	background: #76b852; /* fallback for old browsers */
	background: -webkit-linear-gradient(right, #1069A4, #2844AE);
	background: -moz-linear-gradient(right, #1069A4, #2844AE);
	background: -o-linear-gradient(right, #1069A4, #2844AE);
	background: linear-gradient(to left, #1069A4, #2844AE);
	font-family: "Roboto", sans-serif;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.flex-center {
  height: 100%;
  width: 100%;
	position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: row;
      flex-direction: row;
  -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
  -ms-flex-align: center;
      align-items: center;
  -ms-flex-pack: center;
      justify-content: center; }

</style>

<body>
	<div class="content">
		<div class="container-fluid">
			<div class="flex-center">
					<!-- <div class="login-page"> -->
						<div class="form" style="margin-top:8%;">
						<img src="<?php echo BASE_URL()?>/assets/Back/img/logo.jpg" height="150" style="margin-bottom:10%;">
							<!-- <form class="register-form">
							<input type="text" placeholder="name"/>
							<input type="password" placeholder="password"/>
							<input type="text" placeholder="email address"/>
							<button>create</button>
							<p class="message">Already registered? <a href="#">Sign In</a></p>
						</form> -->
						<?php echo form_open('Login/CheckLogin','class="login-form"'); ?>
						<!-- <h3>คลังสินค้า : อ้อมน้อย</h3> -->
						<input type="text" name="userName" autocomplete="off" placeholder="กรอก รหัสบัญชี" required/>
						<input type="password" name="userPassword" placeholder="กรอก รหัสผ่าน" required/>
						<button type="submit">เข้าสู่ระบบ</button>
						<!-- <p class="message">Not registered? <a href="#">Create an account</a></p> -->
						<?php echo form_close(); ?>
				</div>
		</div>
		</div>
</div>

</body>

</html>
