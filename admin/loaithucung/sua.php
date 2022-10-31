<?php
require_once('../../db/config.php');
$id_edit =$_GET['id'];
$sql_up =" SELECT * from loaithucung where id_loaithucung =$id_edit";
$query_up = mysqli_query($connect, $sql_up);
$row_up = mysqli_fetch_assoc($query_up);


if(isset($_POST['sbm'])) {
       
		$name=$_POST['tenLoai'];
	 	$detail=$_POST['chiTiet'];
		$updated_at = date('Y-m-d H:s:i');
		//Luu vao database
		
			$sql_edit = " UPDATE loaithucung  set TENLOAI = '$name', CHITIET= '$detail', UPDATED_AT ='$updated_at' where id_loaithucung = $id_edit";
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
				<h2 class="text-center">Sửa loại thú cưng</h2>
			</div>
			<div class="panel-body">
            <div class="form-group">
				  <form method="POST">
                  <label for="MaLoai">Mã loại thú cưng: <?php echo $id_edit; ?></label>
				 
				
				<div class="form-group">
				  <label for="tenLoai">Tên loại thú cưng:</label>
				  <input required="true" type="text" class="form-control" id="tenLoai" value="<?php echo $row_up['TENLOAI']; ?>" name="tenLoai">
				</div>
				
				<div class="form-group">
				  <label for="chiTiet">Chi tiết:</label>
				  <input required="true" type="text" class="form-control" id="chiTiet" value="<?php echo $row_up['CHITIET']; ?>" name="chiTiet">
				</div>
				<button name="sbm" type="submit" class="btn btn-success">Sửa</button>
                  </form>
      
			</div>
		</div>
	</div>
</body>
</html>