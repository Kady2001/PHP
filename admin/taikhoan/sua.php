<?php
require_once('../../db/config.php');
$id_edit =$_GET['id'];
$sql_up =" SELECT * from tai_khoan where id_tk =$id_edit";
$query_up = mysqli_query($connect, $sql_up);
$row_up = mysqli_fetch_assoc($query_up);


if(isset($_POST['sbm'])) {
	$email=$_POST['email'];
	$pw=$_POST['matkhau'];
   $cfpw=$_POST['xacnhanmk'];
   $name=$_POST['tentk'];
	$updated_at = date('Y-m-d H:s:i');
		
		
		if($pw==$cfpw){
			$sql_edit = " UPDATE `tai_khoan` SET `email`='$email',`matkhau`='$pw',`tentk`='$name',`UPDATED_AT`='$updated_at' WHERE id_tk=$id_edit";
            $query_edit =mysqli_query($connect,$sql_edit);
	}

		header('Location: index.php');
		die();
	}

?>
<!DOCTYPE html>
<?php
require_once("../header.php");
?>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Sửa thông tin tài khoản</h2>
			</div>
			<div class="panel-body">
            <div class="form-group">
			<form method="POST">
				<div class="form-group">
                  <label for="MaLoai">Mã tài khoản: <?php echo $id_edit; ?> </label>
				  
				</div>
				
				
				<div class="form-group">
				  <label for="email">Email:</label>
				  <input required="true" type="email" class="form-control" id="email" value="<?php echo $row_up['email']; ?>" name="email">
				</div>
				<div class="form-group">
				  <label for="tenLoai">Mật khẩu:</label>
				  <input required="true" type="text" class="form-control" value="<?php echo $row_up['matkhau']; ?>" id="tenLoai" name="matkhau">
				</div>
				<div class="form-group">
				  <label for="confirmation_pwd">Xác nhận mật khẩu:</label>
				  <input required="true" type="password" class="form-control" id="confirmation_pwd" name="xacnhanmk">
				</div>
				<div class="form-group">
				  <label for="tenLoai">Tên người dùng:</label>
				  <input required="true" type="text" class="form-control" value="<?php echo $row_up['tentk']; ?>" id="tenLoai" name="tentk">
				</div>
				<button name="sbm" type="submit" class="btn btn-success">Sửa</button>
                  </form>
      
			</div>
		</div>
	</div>
</body>
</html>