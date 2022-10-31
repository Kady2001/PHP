<?php
require_once('../../db/config.php');
$id_edit =$_GET['id'];
$sql_up =" SELECT * from nha_cung_cap where id_ncc =$id_edit";
$query_up = mysqli_query($connect, $sql_up);
$row_up = mysqli_fetch_assoc($query_up);


if(isset($_POST['sbm'])) {
       
    $name=$_POST['tenncc'];
    $diachi=$_POST['diachi'];
    $email=$_POST['email'];
    $sdt=$_POST['sdt'];
    $detail=$_POST['chitiet'];
    $created_at = $updated_at = date('Y-m-d H:s:i');
		//Luu vao database
		
			$sql_edit = " UPDATE `nha_cung_cap` SET `ten_ncc`='$detail',`diachi_ncc`='$diachi',`email`='$email',`sdt`='$sdt',`Chi_tiet`='$detail',`UPDATED_AT`='$updated_at' WHERE id_ncc= $id_edit";
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
				<h2 class="text-center">Sửa nhà cung cấp</h2>
			</div>
			<div class="panel-body">
            <div class="form-group">
            <form method="POST">  
				  <label for="mancc">Mã nhà cung cấp: <?php echo $id_edit; ?></label>
				 
				<div class="form-group">
				  <label for="tenncc">Tên nhà cung cấp:</label>
				  <input required="true" type="text" class="form-control" id="tenncc" value="<?php echo $row_up['ten_ncc']; ?>" name="tenncc">
				</div>
                <div class="form-group">
				  <label for="diachi">Địa chỉ:</label>
				  <input required="true" type="text" class="form-control" id="diachi" value="<?php echo $row_up['diachi_ncc']; ?>" name="diachi">
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
				  <label for="chitiet">Chi tiết:</label>
				  <input required="true" type="text" class="form-control" id="chitiet" value="<?php echo $row_up['Chi_tiet']; ?>" name="chitiet">
				</div>
				
				<button name="sbm" type="submit" class="btn btn-success">Sửa</button>
            </form>
      
			</div>
		</div>
	</div>
</body>
</html>