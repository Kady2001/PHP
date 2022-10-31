<?php
require_once('../../db/config.php');

if(isset($_POST['sbm'])) {
        $id=$_POST['makh'];
		$name=$_POST['tenkh'];
        $diachi=$_POST['diachi'];
        $email=$_POST['email'];
        $sdt=$_POST['sdt'];
	 	$note=$_POST['note'];
		$created_at = $updated_at = date('Y-m-d H:s:i');
		//Luu vao database
		
			
			// $sql_add = 'INSERT  into nha_cung_cap(id_ncc,ten_ncc,diachi_ncc,,email,sdt,Chi_tiet, created_at, updated_at) 
			// values ("'.$id.'", "'.$name.'", "'.$diachi.'", "'.$email.'", "'.$sdt.'","'.$detail.'","'.$created_at.'", "'.$updated_at.'")';
			$sql_add = "INSERT INTO `khach_hang`(`id_kh`, `ten_kh`, `email`,`dia_chi`, `sdt`, `note`, `CREATED_AT`, `UPDATED_AT`) 
			VALUES ('$id','$name','$diachi','$email','$sdt','$note','$created_at','$updated_at')";
            $query_add =mysqli_query($connect,$sql_add);
		//

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
				<h2 class="text-center">Thêm khách hàng</h2>
			</div>
			<div class="panel-body">
            <div class="form-group">
            <form method="POST">  
				  <label for="mancc">Mã khách hàng:</label>
				  <input required="true" type="text" class="form-control" id="mancc" name="makh">
				</div>
				<div class="form-group">
				  <label for="tenncc">Tên khách hàng:</label>
				  <input required="true" type="text" class="form-control" id="tenncc" name="tenkh">
				</div>
                <div class="form-group">
				  <label for="diachi">Địa chỉ:</label>
				  <input required="true" type="text" class="form-control" id="diachi" name="diachi">
				</div>
				<div class="form-group">
				  <label for="email">Email:</label>
				  <input required="true" type="email" class="form-control" id="email" name="email">
				</div>
				<div class="form-group">
				  <label for="sdt">Số điện thoại:</label>
				  <input required="true" type="text" class="form-control" id="sdt" name="sdt">
				</div>
                <div class="form-group">
				  <label for="chitiet">Ghi chú:</label>
				  <input required="true" type="text" class="form-control" id="chitiet" name="note">
				</div>
				
				<button name="sbm" type="submit" class="btn btn-success">Thêm</button>
            </form>
        </div>
		</div>
	</div>
</body>
</html>