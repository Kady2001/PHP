<?php
require_once('../../db/config.php');

if(isset($_POST['sbm'])) {
        $id=$_POST['matk'];
		$email=$_POST['email'];
	 	$pw=$_POST['matkhau'];
		$cfpw=$_POST['xacnhanmk'];
		$name=$_POST['tentk'];
		$created_at = $updated_at = date('Y-m-d H:s:i');
		//Luu vao database
		
		if($pw==$cfpw){
			
			$sql_add = "INSERT INTO `tai_khoan`(`id_tk`, `email`, `matkhau`, `tentk`, `CREATED_AT`, `UPDATED_AT`) 
			VALUES ('$id','$email','$pw','$name','$created_at','$updated_at')";
            $query_add =mysqli_query($connect,$sql_add);
		//
	} else {
		
	}

		header('Location: index.php');
		die();
	}

?>
<!DOCTYPE html>
<?php
require_once ("../header.php");
?>
<head>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm tài khoản người dùng</h2>
			</div>
			<div class="panel-body">
            <div class="form-group">
				  <form method="POST">
                  <label for="MaLoai">Mã tài khoản:</label>
				  <input required="true" type="text" class="form-control" id="maLoai" name="matk">
				</div>
				
				
				<div class="form-group">
				  <label for="email">Email:</label>
				  <input required="true" type="email" class="form-control" id="email" name="email">
				</div>
				<div class="form-group">
				  <label for="tenLoai">Mật khẩu:</label>
				  <input required="true" type="password" class="form-control" id="tenLoai" name="matkhau">
				</div>
				<div class="form-group">
				  <label for="confirmation_pwd">Xác nhận mật khẩu:</label>
				  <input required="true" type="password" class="form-control" id="confirmation_pwd" name="xacnhanmk">
				</div>
				<div class="form-group">
				  <label for="tenLoai">Tên người dùng:</label>
				  <input required="true" type="text" class="form-control" id="tenLoai" name="tentk">
				</div>
				<button name="sbm" type="submit" class="btn btn-success">Thêm</button>
                  </form>

		<script type="text/javascript">
			window.onload = function () {
				document.getElementById("password").onchange = validatePassword;
				document.getElementById("confirmation_pwd").onchange = validatePassword;
			}
			function validatePassword(){
				var pass2=document.getElementById("confirmation_pwd").value;
				var pass1=document.getElementById("password").value;
				if(pass1!=pass2)
					document.getElementById("confirmation_pwd").setCustomValidity("Mật khẩu xác nhận không khớp!");
				else
					document.getElementById("confirmation_pwd").setCustomValidity('');	 
					//empty string means no validation error
			}
		</script>
			</div>
		</div>
	</div>
</body>
</html>