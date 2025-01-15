<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Đăng Ký </title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/account.css">
</head>
<body>
<div class="section wrap_background">
            <!-- Breadcrumb Section Start -->
            <nav class="bread-crumb">
                <div class="container">
                    <ul class="breadcrumb">                 
                        <li class="home" onclick="window.location.href='header.php'">
                            <i class="material-icons">home</i>
                            <i class="material-icons">keyboard_arrow_right</i>
                        </li>
                        <li>
                            <strong><span> 
                                <?php echo "ĐĂNG KÝ TÀI KHOẢN" ?>
                            </span></strong>
                        </li>
                    </ul>
                </div>
            </nav> 

            <div class="page-content-account">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
				<div class="d-group">
					<div class="left-col">
						<div class="group-login group-log">
							<h1 class="title-module">
								Đăng ký tài khoản
							</h1>
							<form method="post" action="signup.php" id="customer_signup" accept-charset="UTF-8">
                               
							<p class="error"> </p>
							<fieldset class="form-group">
								<label>Tên Đăng Nhập <span class="required">*</span></label>
								<input type="text" class="form-control form-control-lg" value="" name="user" placeholder="Nhập tài khoản" required="" >
                            </fieldset>
                            <fieldset class="form-group">
								<label>Mật khẩu <span class="required">*</span> </label>
								<input type="password" class="form-control form-control-lg" value="" name="pass" id="password" placeholder="Mật khẩu" required="">
							</fieldset>
							<fieldset class="form-group">	
								<label>Số điện thoại <span class="required">*</span></label>
								<input placeholder="Số điện thoại" type="text" pattern="\d+" id="PhoneNumber" class="form-control form-control-comment form-control-lg" name="phone" required="">
                            </fieldset>
		
							<button class="btn-login" name= "signup" type="submit" value="Đăng ký">Đăng ký</button>
							</form>
						</div>
                        <div class="right-col">
						<a href="login.php" class="btn-register-default">Đăng nhập</a>
					</div>

					</div>
					
                </div>
			</div>
		</div>
	</div>	
</div>
            <?php 
if(isset ($_POST["signup"]))
{
    require_once "config.php";
    $user= $_POST["user"];
    $pass = md5($_POST['pass']);
    $phone = $_POST["phone"];
    if (!empty($user)&&!empty($pass)&&!empty($phone))
    {
    $sql ="Insert into user(username, password, phone) values('$user', '$pass','$phone')";
    if ($conn->query($sql)) {
        header('Location: login.php');
        exit();
    } else {
        echo "Lỗi:" . $sql. "<br>". $conn->error;
    }
}
    else {
        echo "Vui lòng nhập dữ liệu!";
    }
}
?> 				
</body>