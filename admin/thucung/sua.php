<?php
require_once('../../db/config.php');

$sql_LoaiThuCung = "SELECT * FROM loaithucung";
$query_LoaiThuCung = mysqli_query($connect, $sql_LoaiThuCung);

$sql_NCC = "SELECT * FROM nha_cung_cap";
$query_NCC = mysqli_query($connect, $sql_NCC);

$id_edit =$_GET['id'];
$sql_up =" SELECT * from thucung where id_thucung =$id_edit";
$query_up = mysqli_query($connect, $sql_up);
$row_up = mysqli_fetch_assoc($query_up);

if(isset($_POST['sbm'])) {
        
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
		$updated_at = date('Y-m-d H:s:i');
		//Luu vao database
		
			
			// $sql_add = 'INSERT  into nha_cung_cap(id_ncc,ten_ncc,diachi_ncc,,email,sdt,Chi_tiet, created_at, updated_at) 
			// values ("'.$id.'", "'.$name.'", "'.$diachi.'", "'.$email.'", "'.$sdt.'","'.$detail.'","'.$created_at.'", "'.$updated_at.'")';
			$sql_edit = "UPDATE `thucung` set `id_loaithucung`='$loaithucung',`id_ncc`='$nhacungcap', `TENTHUCUNG`='$name',`ANH_1`='$anh1',`ANH_2`='$anh2',`ANH_3`='$anh3',`ANH_4`='$anh4',`CHITIET_1`='$detail1',`CHITIET_2`='$detail2',`CHITIET_3`='$detail3',`soluong`='$sl',`GIATHUCUNG`='$gia',`GIAMTHUCUNGGIAM`='$giagiam',`chungnhan`='$chungnhan',`UPDATED_AT`='$updated_at' WHERE id_thucung=$id_edit";
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
				<h2 class="text-center">Sửa thông tin thú cưng</h2>
			</div>
			<div class="panel-body">
            <div class="form-group">
            <form method="POST">  
				<div class="form-group">
				  <label for="mancc">Mã thú cưng: <?php echo $id_edit ?> </label>
				  
				</div>
				<div class="form-group">
				  <label for="tenncc">Tên thú cưng:</label>
				  <input required="true" type="text" class="form-control" value="<?php echo $row_up['TENTHUCUNG']; ?>" id="tenncc" name="tenthucung">
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
				  <input required="false" type="file" class="form-control" value="<?php echo $row_up['ANH_1']; ?>" id="anh" name="anh1">
				</div>
				<div class="form-group">
				  <label for="">Ảnh chi tiết 1</label>
				  <input required="false" type="file" class="form-control" value="<?php echo $row_up['ANH_2']; ?>" id="anh" name="anh2">
				</div>
				<div class="form-group">
				  <label for="">Ảnh chi tiết 2</label>
				  <input required="false" type="file" class="form-control" value="<?php echo $row_up['ANH_3']; ?>" id="anh" name="anh3">
				</div>
				<div class="form-group">
				  <label for="">Ảnh chi tiết 3</label>
				  <input required="false" type="file" class="form-control" value="<?php echo $row_up['ANH_4']; ?>" id="anh" name="anh4">
				</div>
				</div>
                <div class="form-group">
				  <label for="">Chi tiết 1:</label>
				  <input required="true" type="text" class="form-control" value="<?php echo $row_up['CHITIET_1']; ?>" id="chitiet" name="chitiet1">
				</div>
				<div class="form-group">
				  <label for="chitiet">Chi tiết 2:</label>
				  <input required="true" type="text" class="form-control" value="<?php echo $row_up['CHITIET_2']; ?>" id="chitiet" name="chitiet2">
				</div>
				<div class="form-group">
				  <label for="chitiet">Chi tiết 3:</label>
				  <input required="true" type="text" class="form-control" value="<?php echo $row_up['CHITIET_3']; ?>" id="chitiet" name="chitiet3">
				</div>
				<div class="form-group">
				  <label for="chitiet">Số lượng:</label>
				  <input required="true" type="text" class="form-control" value="<?php echo $row_up['soluong']; ?>" id="chitiet" name="soluong">
				</div>
				<div class="form-group">
				  <label for="chitiet">Giá:</label>
				  <input required="true" type="text" class="form-control" value="<?php echo $row_up['GIATHUCUNG']; ?>" id="chitiet" name="gia">
				</div>
				<div class="form-group">
				  <label for="chitiet">Giá giảm:</label>
				  <input required="true" type="text" class="form-control" value="<?php echo $row_up['GIAMTHUCUNGGIAM']; ?>" id="chitiet" name="giagiam">
				</div>
				<div class="form-group">
				  <label for="chitiet">Chứng nhận:</label>
				  <input required="true" type="file" class="form-control" value="<?php echo $row_up['chungnhan']; ?>" id="chitiet" name="chungnhan">
				</div>
				<button name="sbm" type="submit" class="btn btn-success">Sửa</button>
            </form>
        </div>
		</div>
	</div>
</body>
</html>