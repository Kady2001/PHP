<?php
require_once('../../db/config.php');

if(isset($_POST['sbm'])) {
        $id=$_POST['manv'];
		$name=$_POST['tennv'];
        $gt=$_POST['gioitinh'];
        $ns =$_POST['ngaysinh'];
        $que=$_POST['quequan'];
        $email=$_POST['email'];
        $sdt=$_POST['sdt'];
	 	$capbac=$_POST['capbac'];
		$created_at = $updated_at = date('Y-m-d H:s:i');
		//Luu vao database
		
			
			// $sql_add = 'INSERT  into nha_cung_cap(id_ncc,ten_ncc,diachi_ncc,,email,sdt,Chi_tiet, created_at, updated_at) 
			// values ("'.$id.'", "'.$name.'", "'.$diachi.'", "'.$email.'", "'.$sdt.'","'.$detail.'","'.$created_at.'", "'.$updated_at.'")';
			$sql_add = "INSERT INTO `nhan_vien`(`id_nv`, `ten_nhanvien`, `gioitinh`, `ngaysinh`, `quequan`, `sdt`, `email`, `capbac`, `CREATED_AT`, `UPDATED_AT`) 
            VALUES ('$id','$name','$gt','$ns','$que','$sdt','$email','$capbac','$created_at','$updated_at')";
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
				<h2 class="text-center">Thêm nhân viên</h2>
			</div>
			<div class="panel-body">
            <div class="form-group">
            <form method="POST">  
				<div>
				  <label for="mancc">Mã nhân viên:</label>
				  <input required="true" type="text" class="form-control" id="mancc" name="manv">
				</div>
				<div class="form-group">
				  <label for="tenncc">Tên nhân viên:</label>
				  <input required="true" type="text" class="form-control" id="tenncc" name="tennv">
				</div>
                <div class="form-group">
			    <label for="email">Ngày sinh:</label>
			    <input class="date form-control" type="text" name="ngaysinh">
				</div>
                <div class="form-group">
				  <label for="sdt">Quê quán:</label>
				  <input required="true" type="text" class="form-control" id="quequan" name="quequan">
				</div>
                <div class="form-group">
				  <label for="sdt">Giới tính:</label>
				  <input required="true" type="text" class="form-control" id="gioitinh" name="gioitinh">
				</div>
		  	    </div>
                <div class="form-group">
				  <label for="sdt">Só điện thoại:</label>
				  <input required="true" type="text" class="form-control" id="sdt" name="sdt">
				</div>
				<div class="form-group">
				  <label for="email">Email:</label>
				  <input required="true" type="email" class="form-control" id="email" name="email">
				</div>
                <div class="form-group">
				  <label for="capbac">Cấp bậc:</label>
				  <input required="true" type="text" class="form-control" id="sdt" name="capbac">
				</div>
				
				<button name="sbm" type="submit" class="btn btn-success">Thêm</button>
            </form>
        </div>
		</div>
	</div>
</body>
</html>