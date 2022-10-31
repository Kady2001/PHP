<?php
require_once('../../db/config.php');

$sql_LoaiThuCung = "SELECT * FROM loaithucung";
$query_LoaiThuCung = mysqli_query($connect, $sql_LoaiThuCung);

$sql_NCC = "SELECT * FROM nha_cung_cap";
$query_NCC = mysqli_query($connect, $sql_NCC);

if(isset($_POST['sbm'])) {
        $id=$_POST['mathucung'];
		$loaithucung=$_POST['loaithucung'];
		$nhacungcap=$_POST['nhacungcap'];
		$name=$_POST['tenthucung'];
        $anh1=$_POST['anh1'];
		$anh2=$_POST['anh2'];
		$anh3=$_POST['anh3'];
		$anh4=$_POST['anh4'];
	 	$detail1=$_POST['chitiet1'];
		 $detail2=$_POST['chitiet2'];
		 $detail3=$_POST['chitiet3'];
		 $sl=$_POST['soluong'];
		 $gia=$_POST['gia'];
		 $giagiam=$_POST['giagiam'];
		 $chungnhan=$_POST['chungnhan'];
		$created_at = $updated_at = date('Y-m-d H:s:i');
		//Luu vao database
		
			
			// $sql_add = 'INSERT  into nha_cung_cap(id_ncc,ten_ncc,diachi_ncc,,email,sdt,Chi_tiet, created_at, updated_at) 
			// values ("'.$id.'", "'.$name.'", "'.$diachi.'", "'.$email.'", "'.$sdt.'","'.$detail.'","'.$created_at.'", "'.$updated_at.'")';
			$sql_add = "INSERT INTO `thucung`(`id_thucung`, `id_loaithucung`, `id_ncc`, `TENTHUCUNG`, `ANH_1`, `ANH_2`, `ANH_3`, `ANH_4`, `CHITIET_1`, `CHITIET_2`, `CHITIET_3`, `soluong`, `GIATHUCUNG`, `GIAMTHUCUNGGIAM`, `chungnhan`, `CREATED_AT`, `UPDATED_AT`) 
			VALUES ('$id','$loaithucung','$nhacungcap','$name','$anh1','$anh2','$anh3','$anh4','$detail1','$detail2','$detail3','$sl','$gia','$giagiam','$chungnhan','$created_at','$updated_at')";
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
				<h2 class="text-center">Thêm thú cưng</h2>
			</div>
			<div class="panel-body">
            <div class="form-group">
            <form method="POST">  
				<div class="form-group">
				  <label for="mancc">Mã thú cưng:</label>
				  <input required="true" type="text" class="form-control" id="mancc" name="mathucung">
				</div>
				<div class="form-group">
				  <label for="tenncc">Tên thú cưng:</label>
				  <input required="true" type="text" class="form-control" id="tenncc" name="tenthucung">
				</div>
				<div class="form-group">
                    <label for="">Loại thú cưng</label>
                    <select class="form-control" name="loaithucung">
                        <?php
                            while($row_Loai = mysqli_fetch_assoc($query_LoaiThuCung)){?>
                                <option value="<?php echo $row_Loai['id_loaithucung']; ?>"><?php echo $row_Loai['TENLOAI']; ?></option>
                            <?php } ?>
                        ?>
                    </select>
                </div>
				<div class="form-group">
                    <label for="">Nhà cung cấp</label>
                    <select class="form-control" name="nhacungcap">
                        <?php
                            while($row_NCC = mysqli_fetch_assoc($query_NCC)){?>
                                <option value="<?php echo $row_NCC['id_ncc']; ?>"><?php echo $row_NCC['ten_ncc']; ?></option>
                            <?php } ?>
                        ?>
                    </select>
                </div>
				<div class="form-group">
				  <label for="">Ảnh đại diện</label>
				  <input required="true" type="file" class="form-control" id="anh" name="anh1">
				</div>
				<div class="form-group">
				  <label for="">Ảnh chi tiết 1</label>
				  <input required="true" type="file" class="form-control" id="anh" name="anh2">
				</div>
				<div class="form-group">
				  <label for="">Ảnh chi tiết 2</label>
				  <input required="true" type="file" class="form-control" id="anh" name="anh3">
				</div>
				<div class="form-group">
				  <label for="">Ảnh chi tiết 3</label>
				  <input required="true" type="file" class="form-control" id="anh" name="anh4">
				</div>
				</div>
                <div class="form-group">
				  <label for="">Chi tiết 1:</label>
				  <input required="true" type="text" class="form-control" id="chitiet" name="chitiet1">
				</div>
				<div class="form-group">
				  <label for="chitiet">Chi tiết 2:</label>
				  <input required="true" type="text" class="form-control" id="chitiet" name="chitiet2">
				</div>
				<div class="form-group">
				  <label for="chitiet">Chi tiết 3:</label>
				  <input required="true" type="text" class="form-control" id="chitiet" name="chitiet3">
				</div>
				<div class="form-group">
				  <label for="chitiet">Số lượng:</label>
				  <input required="true" type="text" class="form-control" id="chitiet" name="soluong">
				</div>
				<div class="form-group">
				  <label for="chitiet">Giá:</label>
				  <input required="true" type="text" class="form-control" id="chitiet" name="gia">
				</div>
				<div class="form-group">
				  <label for="chitiet">Giá giảm:</label>
				  <input required="true" type="text" class="form-control" id="chitiet" name="giagiam">
				</div>
				<div class="form-group">
				  <label for="chitiet">Chứng nhận:</label>
				  <input required="true" type="file" class="form-control" id="chitiet" name="chungnhan">
				</div>
				<button name="sbm" type="submit" class="btn btn-success">Thêm</button>
            </form>
        </div>
		</div>
	</div>
</body>
</html>