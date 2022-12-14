<?php
require_once('../../db/config.php');

$sql_NhanVien = "SELECT * FROM nhan_vien";
$query_NhanVien = mysqli_query($connect, $sql_NhanVien);

$sql_KH = "SELECT * FROM khach_hang";
$query_KH = mysqli_query($connect, $sql_KH);

$sql_thucung = "SELECT * FROM thucung";
$query_thucung = mysqli_query($connect, $sql_thucung);

if(isset($_POST['sbm'])) {
        $id=$_POST['mahdb'];
		$nv=$_POST['nhanvien'];
		$khachhang=$_POST['khachhang'];
		$thucung=$_POST['thucung'];
		$sl=$_POST['soluong'];
		$ngaylendon=$_POST['ngaylendon'];
        $tongtien=$_POST['tongtien'];
	 	$hinhthucthanhtoan=$_POST['hinhthucthanhtoan'];
		$trangthai=$_POST['trangthai'];
		$note=$_POST['note'];
		$created_at = $updated_at = date('Y-m-d H:s:i');
		//Luu vao database
		
			
			// $sql_add = 'INSERT  into nha_cung_cap(id_ncc,ten_ncc,diachi_ncc,,email,sdt,Chi_tiet, created_at, updated_at) 
			// values ("'.$id.'", "'.$name.'", "'.$diachi.'", "'.$email.'", "'.$sdt.'","'.$detail.'","'.$created_at.'", "'.$updated_at.'")';
			$sql_add = "INSERT INTO `hoa_don_ban`(`id_hdb`, `id_nv`, `id_kh`, `date_order`, `tong_tien`, `payment`, `status`, `note_hdb`, `CREATED_AT`, `UPDATED_AT`) 
			VALUES ('$id','$nv','$khachhang','$ngaylendon','$tongtien','$hinhthucthanhtoan','$trangthai','$note','$created_at','$updated_at')";
            $query_add =mysqli_query($connect,$sql_add);
			
			$sql_add1 ="INSERT INTO `chi_tiet_hoa_don_ban`( `id_hdb`, `id_thucung`, `sl`, `CREATED_AT`, `UPDATED_AT`)
			 VALUES ('$id','$thucung','$sl','$created_at','$updated_at')";
			  $query_add1 =mysqli_query($connect,$sql_add1);
		//

		header('Location: index.php');
		die();
	}

?>
<!DOCTYPE html>
<?php
require_once("../header.php");
?>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.js"></script>
	<!-- Bootstrap Datepicker JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
	<!-- Page Script -->
	<script type="text/javascript">
$(document).ready(function() {
	// C???u h??nh ti???ng vi???t cho Bootstrap Datepicker
$.fn.datepicker.dates['vi'] = {
    days: ["Ch??? nh???t", "Th??? Hai", "Th??? Ba", "Th??? T??", "Th??? N??m", "Th??? S??u", "Th??? B???y"],
    daysShort: ["CN", "Th??? 2", "Th??? 3", "Th??? 4", "Th??? 5", "Th??? 6", "Th??? 7"],
    daysMin: ["CN", "T2", "T3", "T4", "T5", "T6", "T7"],
    months: ["Th??ng 1", "Th??ng 2", "Th??ng 3", "Th??ng 4", "Th??ng 5", "Th??ng 6", "Th??ng 7", "Th??ng 8", "Th??ng 9", "Th??ng 10", "Th??ng 11", "Th??ng 12"],
    monthsShort: ["Th 1", "Th 2", "Th 3", "Th 4", "Th 5", "Th 6", "Th 7", "Th 8", "Th 9", "Th 10", "Th 11", "Th 12"],
    today: "H??m nay",
    clear: "X??a",
    format: "dd/mm/yyyy",
    titleFormat: "MM yyyy", /* C?? ph??p gi???ng 'format' */
    weekStart: 0
};
	// Thi???t l???p datepicker
	$('.date').datepicker({
		language: 'vi',
		todayHighlight: true, // n???i b???t ng??y h??m nay
	   	format: 'dd-mm-yyyy', // ?????nh d???ng ng??y tr?????c khi g???i
	   	autoclose: true //T??? ?????ng ????ng sau khi click ch???n ng??y
	}); 

	$("#btnSubmit").on("click", function() {
		var $this 		    = $("#btnSubmit"); //ID n??t g???i d??? li???u
        var $caption        = $this.html();// N???i dung html c???a n??t g???i d??? li???u
        var form 			= "#form"; //X??c ?????nh #form ID
        var formData        = $(form).serializeArray(); //Cho d??? li???u v??o m???ng
        var route 			= $(form).attr('action'); //l???y ???????ng d???n g???i d??? li???u

        // Ajax config
    	$.ajax({
	        type: "POST", //S??? d???ng ph????ng th???c POST ????? g???i duex li???u
	        url: route, // ???????ng d???n g???i d??? li???u
	        data: formData, // D??? li???u theo m???ng
	        beforeSend: function () {//Th??m thu???c t??ch disabled ????? ch???n click nhi???u l???n trong khi ??ang g???i d??? li???u
	            $this.attr('disabled', true).html("??ang ti???n h??nh...");
	        },
	        success: function (response) {//Khi th??nh c??ng k???t qu??? s??? ???????c tr??? v??? t???i ????y
	            $this.attr('disabled', false).html($caption);
	            // Ch??ng ta s??? th???c hi???n h??nh ?????ng sau khi th??nh c??ng ??? ????y
	            console.log(response);
	        },
	        error: function (XMLHttpRequest, textStatus, errorThrown) {
	        	// B???n c?? th??? th??m n???i dung hi???n th??? b??o l???i t???i ????y
	        }
	    });
	});

	 
});		
	</script>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Th??m h??a ????n b??n</h2>
			</div>
			<div class="panel-body">
            <div class="form-group">
            <form method="POST">  
				<div class="form-group">
				  <label for="mancc">M?? h??a ????n b??n:</label>
				  <input required="true" type="text" class="form-control" id="mancc" name="mahdb">
				</div>
				<div class="form-group">
                    <label for="">Nh??n vi??n b??n</label>
                    <select class="form-control" name="nhanvien">
                        <?php
                            while($row_NV = mysqli_fetch_assoc($query_NhanVien)){?>
                                <option value="<?php echo $row_NV['id_nv']; ?>"><?php echo $row_NV['ten_nhanvien']; ?></option>
                            <?php } ?>
                        ?>
                    </select>
                </div>
				<div class="form-group">
                    <label for="">Th?? c??ng b??n</label>
                    <select class="form-control" name="thucung">
                        <?php
                            while($row_tc = mysqli_fetch_assoc($query_thucung)){?>
                                <option value="<?php echo $row_tc['id_thucung']; ?>"><?php echo $row_tc['TENTHUCUNG']; ?></option>
                            <?php } ?>
                        ?>
                    </select>
                </div>
				<div class="form-group">
				  <label for="chitiet">S??? l?????ng:</label>
				  <input required="true" type="text" class="form-control" id="chitiet" name="soluong">
				</div>
				<div class="form-group">
                    <label for="">Kh??ch h??ng</label>
                    <select class="form-control" name="khachhang">
                        <?php
                            while($row_KH = mysqli_fetch_assoc($query_KH)){?>
                                <option value="<?php echo $row_KH['id_kh']; ?>"><?php echo $row_KH['ten_kh']; ?></option>
                            <?php } ?>
                        ?>
                    </select>
                </div>
				
				<div class="form-group">
			    <label for="email">Ng??y l??n ????n:</label>
			    <input class="date form-control" type="text" name="ngaylendon">
				</div>
                
				<div class="form-group">
				  <label for="chitiet">T???ng ti???n:</label>
				  <input required="true" type="text" class="form-control" id="chitiet" name="tongtien">
				</div>
				<div class="form-group">
				  <label for="chitiet">H??nh th???c hanh to??n:</label>
				  <select class="form-control" name="hinhthucthanhtoan">
                       
                            
                                <option value="Ti???n m???t">Ti???n m???t</option>
								<option value="Thanh to??n th???">Thanh to??n th???</option> 
								<option value="Thanh to??n thu h??? (COD)">Thanh to??n thu h???(COD)</option> 
                    </select>
				</div>
				<div class="form-group">
				  <label for="trangthai">Tr???ng th??i:</label>
				  <select class="form-control" name="trangthai">
                       
                            
                                <option value="Ti???n m???t">Ch??? thanh to??n</option>
								<option value="Thanh to??n th???">???? thanh to??n</option> 
                    </select>
				</div>
				<div class="form-group">
				  <label for="chitiet">Ghi ch??:</label>
				  <input required="true" type="text" class="form-control" id="note" name="note">
				</div>
				<button name="sbm" type="submit" class="btn btn-success">Th??m</button>
            </form>
        </div>
		</div>
	</div>
</body>
</html>