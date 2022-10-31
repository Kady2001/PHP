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
	// Cấu hình tiếng việt cho Bootstrap Datepicker
$.fn.datepicker.dates['vi'] = {
    days: ["Chủ nhật", "Thứ Hai", "Thứ Ba", "Thứ Tư", "Thứ Năm", "Thứ Sáu", "Thứ Bảy"],
    daysShort: ["CN", "Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7"],
    daysMin: ["CN", "T2", "T3", "T4", "T5", "T6", "T7"],
    months: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"],
    monthsShort: ["Th 1", "Th 2", "Th 3", "Th 4", "Th 5", "Th 6", "Th 7", "Th 8", "Th 9", "Th 10", "Th 11", "Th 12"],
    today: "Hôm nay",
    clear: "Xóa",
    format: "dd/mm/yyyy",
    titleFormat: "MM yyyy", /* Cú pháp giống 'format' */
    weekStart: 0
};
	// Thiết lập datepicker
	$('.date').datepicker({
		language: 'vi',
		todayHighlight: true, // nổi bật ngày hôm nay
	   	format: 'dd-mm-yyyy', // định dạng ngày trước khi gửi
	   	autoclose: true //Tự động đóng sau khi click chọn ngày
	}); 

	$("#btnSubmit").on("click", function() {
		var $this 		    = $("#btnSubmit"); //ID nút gửi dữ liệu
        var $caption        = $this.html();// Nội dung html của nút gửi dữ liệu
        var form 			= "#form"; //Xác định #form ID
        var formData        = $(form).serializeArray(); //Cho dữ liệu vào mảng
        var route 			= $(form).attr('action'); //lấy đường dẫn gửi dữ liệu

        // Ajax config
    	$.ajax({
	        type: "POST", //Sử dụng phương thức POST để gửi duex liệu
	        url: route, // đường dẫn gửi dữ liệu
	        data: formData, // Dữ liệu theo mảng
	        beforeSend: function () {//Thêm thuộc tích disabled để chặn click nhiều lần trong khi đang gửi dữ liệu
	            $this.attr('disabled', true).html("Đang tiến hành...");
	        },
	        success: function (response) {//Khi thành công kết quả sẽ được trả về tại đây
	            $this.attr('disabled', false).html($caption);
	            // Chúng ta sẽ thực hiện hành động sau khi thành công ở đây
	            console.log(response);
	        },
	        error: function (XMLHttpRequest, textStatus, errorThrown) {
	        	// Bạn có thể thêm nội dung hiển thị báo lỗi tại đây
	        }
	    });
	});

	 
});		
	</script>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm hóa đơn bán</h2>
			</div>
			<div class="panel-body">
            <div class="form-group">
            <form method="POST">  
				<div class="form-group">
				  <label for="mancc">Mã hóa đơn bán:</label>
				  <input required="true" type="text" class="form-control" id="mancc" name="mahdb">
				</div>
				<div class="form-group">
                    <label for="">Nhân viên bán</label>
                    <select class="form-control" name="nhanvien">
                        <?php
                            while($row_NV = mysqli_fetch_assoc($query_NhanVien)){?>
                                <option value="<?php echo $row_NV['id_nv']; ?>"><?php echo $row_NV['ten_nhanvien']; ?></option>
                            <?php } ?>
                        ?>
                    </select>
                </div>
				<div class="form-group">
                    <label for="">Thú cưng bán</label>
                    <select class="form-control" name="thucung">
                        <?php
                            while($row_tc = mysqli_fetch_assoc($query_thucung)){?>
                                <option value="<?php echo $row_tc['id_thucung']; ?>"><?php echo $row_tc['TENTHUCUNG']; ?></option>
                            <?php } ?>
                        ?>
                    </select>
                </div>
				<div class="form-group">
				  <label for="chitiet">Số lượng:</label>
				  <input required="true" type="text" class="form-control" id="chitiet" name="soluong">
				</div>
				<div class="form-group">
                    <label for="">Khách hàng</label>
                    <select class="form-control" name="khachhang">
                        <?php
                            while($row_KH = mysqli_fetch_assoc($query_KH)){?>
                                <option value="<?php echo $row_KH['id_kh']; ?>"><?php echo $row_KH['ten_kh']; ?></option>
                            <?php } ?>
                        ?>
                    </select>
                </div>
				
				<div class="form-group">
			    <label for="email">Ngày lên đơn:</label>
			    <input class="date form-control" type="text" name="ngaylendon">
				</div>
                
				<div class="form-group">
				  <label for="chitiet">Tổng tiền:</label>
				  <input required="true" type="text" class="form-control" id="chitiet" name="tongtien">
				</div>
				<div class="form-group">
				  <label for="chitiet">Hình thức hanh toán:</label>
				  <select class="form-control" name="hinhthucthanhtoan">
                       
                            
                                <option value="Tiền mặt">Tiền mặt</option>
								<option value="Thanh toán thẻ">Thanh toán thẻ</option> 
								<option value="Thanh toán thu hộ (COD)">Thanh toán thu hộ(COD)</option> 
                    </select>
				</div>
				<div class="form-group">
				  <label for="trangthai">Trạng thái:</label>
				  <select class="form-control" name="trangthai">
                       
                            
                                <option value="Tiền mặt">Chờ thanh toán</option>
								<option value="Thanh toán thẻ">Đã thanh toán</option> 
                    </select>
				</div>
				<div class="form-group">
				  <label for="chitiet">Ghi chú:</label>
				  <input required="true" type="text" class="form-control" id="note" name="note">
				</div>
				<button name="sbm" type="submit" class="btn btn-success">Thêm</button>
            </form>
        </div>
		</div>
	</div>
</body>
</html>