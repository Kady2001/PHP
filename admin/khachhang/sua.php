<?php
require_once('../../db/config.php');
$id_edit =$_GET['id'];
$sql_up =" SELECT * from khach_hang where id_kh =$id_edit";
$query_up = mysqli_query($connect, $sql_up);
$row_up = mysqli_fetch_assoc($query_up);


if(isset($_POST['sbm'])) {
       
	$name=$_POST['tenkh'];
	$diachi=$_POST['diachi'];
	$email=$_POST['email'];
	$sdt=$_POST['sdt'];
	 $note=$_POST['note'];
	$created_at = $updated_at = date('Y-m-d H:s:i');
		//Luu vao database
		
			$sql_edit = " UPDATE `khach_hang` SET `ten_kh`='$name',`dia_chi`='$diachi',`email`='$email',`sdt`='$sdt',`note`='$note',`UPDATED_AT`='$updated_at' WHERE id_kh= $id_edit";
            $query_edit =mysqli_query($connect,$sql_edit);
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
				<h2 class="text-center">Sửa thông tin khách hàng</h2>
			</div>
			<div class="panel-body">
            <div class="form-group">
            <form method="POST">  
				  <label for="mancc">Mã khách hàng: <?php echo $id_edit; ?></label>
				 
				<div class="form-group">
				  <label for="tenncc">Tên khách hàng:</label>
				  <input required="true" type="text" class="form-control" id="tenncc" value="<?php echo $row_up['ten_kh']; ?>" name="tenkh">
				</div>
                <div class="form-group">
				  <label for="diachi">Địa chỉ:</label>
				  <input required="true" type="text" class="form-control" id="diachi" value="<?php echo $row_up['dia_chi']; ?>" name="diachi">
				</div>
				<div class="form-group">
				  <label for="email">Email:</label>
				  <input required="true" type="email" class="form-control" id="email" value="<?php echo $row_up['email']; ?>" name="email">
				</div>
				<div class="form-group">
				  <label for="sdt">Số điện thoại:</label>
				  <input required="true" type="text" class="form-control" id="sdt" value="<?php echo $row_up['sdt']; ?>" name="sdt">
				</div>
                <div class="form-group">
				  <label for="chitiet">Ghi chú:</label>
				  <input required="true" type="text" class="form-control" id="chitiet" value="<?php echo $row_up['note']; ?>" name="note">
				</div>
				
				<button name="sbm" type="submit" class="btn btn-success">Sửa</button>
            </form>
      
			</div>
		</div>
	</div>
</body>
</html>