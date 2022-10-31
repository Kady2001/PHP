<?php
session_start();
require_once('../db/config.php');

if(isset($_POST['btn-login'])){
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $sql ="SELECT * from tai_khoan where email='$email' and matkhau='$pass'" ;
    $query = mysqli_query($connect,$sql);

    // admin email admin@gmail.com pass 123456
    if($email=="admin@gmail.com" && $pass="123456")
    {
        header('Location: ../admin/loaithucung/');
		session_destroy();
    die();
    }else if(mysqli_num_rows($query)){
		session_reset();
		$row_tentk=mysqli_fetch_assoc($query);
		$tentk=$row_tentk['tentk'];
		$_SESSION['tentk']=$tentk;
		$_SESSION['ktra']=1;
		header('Location: ../font_end/');
        //  header("Location: ../font_end/index.php?name=<?php echo $query['tentk']; 
    }else{
        echo '<script>alert("Email hoặc mật khẩu sai !")</script>';
		$_SESSION['ktra']=0;
    }   
}
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dăng nhập</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="POST" class="login100-form validate-form" >
					<span class="login100-form-title p-b-26">
						MTP SHOP
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Định dạng email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Mật khẩu"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="btn-login">
								Đăng nhập
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Bạn chưa có tài khoản
						</span>

						<a class="txt2" href="../dangky/">
							Đăng ký
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>