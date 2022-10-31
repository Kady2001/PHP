<?php
require_once('../../db/config.php');


$id = $name = $detail = '';
if(isset($_POST['sbm'])) {
        $id=$_POST['maLoai'];
		$name=$_POST['tenLoai'];
	 	$detail=$_POST['chiTiet'];
		$created_at = $updated_at = date('Y-m-d H:s:i');
		//Luu vao database
		
			// $sql_add = " INSERT  into loaithucung(id_loaithucung,tenloai,chitiet, CREATE_AT, UPDATE_AT) 
			// values ('.$id.', '".$name."', '".$detail."', '".$created_at."','".$updated_at."')";
			$sql_add = 'INSERT  into loaithucung(id_loaithucung,tenloai,chitiet, created_at, updated_at) 
			values ("'.$id.'", "'.$name.'", "'.$detail.'","'.$created_at.'", "'.$updated_at.'")';
            $query_add =mysqli_query($connect,$sql_add);
		//

		header('Location: index.php');
		die();
	}

?>
<!DOCTYPE html>
<?php
require_once ("../header.php");
?>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm loại thú cưng</h2>
			</div>
			<div class="panel-body">
            <div class="form-group">
				  <form method="POST">
                  <label for="MaLoai">Mã loại thú cưng:</label>
				  <input required="true" type="text" class="form-control" id="maLoai" name="maLoai">
				</div>
				<div class="form-group">
				  <label for="tenLoai">Tên loại thú cưng:</label>
				  <input required="true" type="text" class="form-control" id="tenLoai" name="tenLoai">
				</div>
				
				<div class="form-group">
				  <label for="chiTiet">Chi tiết:</label>
				  <input required="true" type="text" class="form-control" id="chiTiet" name="chiTiet">
				</div>
				<button name="sbm" type="submit" class="btn btn-success">Thêm</button>
                  </form>
      
			</div>
		</div>
	</div>
</body>
</html>