<?php
require_once ('../db/config.php');
session_start();
if (!empty($_POST)) {
	// $sl_card=$_POST['hoten'];
	$namekh=$_POST['hoten'];
    $diachi=$_POST['diachi'];
    $email=$_POST['email'];
    $sdt=$_POST['sdt'];
	$note_kh=$_POST['note'];
	$created_at = $updated_at = date('Y-m-d H:s:i');

		$sql_add = "INSERT INTO `khach_hang`( `ten_kh`, `email`,`dia_chi`, `sdt`, `note`, `CREATED_AT`, `UPDATED_AT`) 
			VALUES ('$namekh','$diachi','$email','$sdt','$note_kh','$created_at','$updated_at')";
            $query_add =mysqli_query($connect,$sql_add);
   			 $id_thucungban=$_SESSION['id_thucung_ban'];
			$sl=$_SESSION['soluong_thucungban'];

			$sql_idkh="SELECT * FROM khach_hang where CREATED_AT='$created_at'";
			$query_kh = mysqli_query($connect, $sql_idkh);
				$row_kh = mysqli_fetch_assoc($query_kh);

	
		$nv=1;
		$khachhang=$row_kh['id_kh'];
		$thucung=$_SESSION['id_thucung_ban'];
		$sl=$_SESSION['soluong_thucungban'];
		$ngaylendon=date('Y-m-d');
        $tongtien=$_SESSION['thanhtien'];
	 	$hinhthucthanhtoan='Chuyển khoản';
		$trangthai='Chờ thanh toán';
		$note='Chờ xác nhận';
		$created_at_hdb = $updated_at_hdb = date('Y-m-d H:s:i');
		
		//Luu vao database
		
			
			// $sql_add = 'INSERT  into nha_cung_cap(id_ncc,ten_ncc,diachi_ncc,,email,sdt,Chi_tiet, created_at, updated_at) 
			// values ("'.$id.'", "'.$name.'", "'.$diachi.'", "'.$email.'", "'.$sdt.'","'.$detail.'","'.$created_at.'", "'.$updated_at.'")';
			$sql_add2 = "INSERT INTO `hoa_don_ban`( `id_nv`, `id_kh`, `date_order`, `tong_tien`, `payment`, `status`, `note_hdb`, `CREATED_AT`, `UPDATED_AT`) 
			VALUES ('$nv','$khachhang','$ngaylendon','$tongtien','$hinhthucthanhtoan','$trangthai','$note','$created_at_hdb','$updated_at_hdb')";
            $query_add2 =mysqli_query($connect,$sql_add2);

			$sql_hdb="SELECT * FROM hoa_don_ban where CREATED_AT='$created_at_hdb'";
			$query_hdb = mysqli_query($connect, $sql_hdb);
				$row_hdb = mysqli_fetch_assoc($query_hdb);

			$hdb=$row_hdb['id_hdb'];
			$sql_add1 ="INSERT INTO `chi_tiet_hoa_don_ban`( `id_hdb`, `id_thucung`, `sl`, `CREATED_AT`, `UPDATED_AT`)
			 VALUES ('$hdb','$thucung','$sl','$created_at','$updated_at')";
			  $query_add1 =mysqli_query($connect,$sql_add1);

			  header('Location: index.php');
			die();
			 
}else{
	echo "<script type='text/javascript'>confirm('Bạn chưa chọn mua thú cưng nào!');</script>";
		
		header('Location: index.php');
}