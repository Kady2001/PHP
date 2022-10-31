<?php
require_once('../../db/config.php');
$sql ="SELECT * from hoa_don_ban INNER join nhan_vien on nhan_vien.id_nv=hoa_don_ban.id_nv join khach_hang on khach_hang.id_kh=hoa_don_ban.id_kh group by id_hdb";
$query = mysqli_query($connect,$sql);

?>
<!DOCTYPE html>
<?php
require_once("../header.php");
?>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Quản lý hóa đơn bán</h2>
			</div>
      <a href="add.php">
      <button class= "btn btn-success" style=" margin-bottom:15px; margin-top:5px;" >Thêm hóa đơn bán</button>
      </a>
			<div class="panel-body">
	
        <table class ="table table-bordered table-hover">
            <thead>
                <tr>
                    <th  style="width: 50px;">Mã hóa đơn bán</th>
                    <th  style="width: 10px;">Nhân viên</th>
                    <th  style="width: 10px;">Khách hàng</th>
					<th  style="width: 100px;">Ngày lên đơn</th>
					<th  style="width: 100px;">Tổng tiền</th>
                    <th  style="width: 100px;">Hình thức thanh toán</th>
                    <th  style="width: 100px;">Trạng thái</th>
                    <th  style="width: 100px;">Ghi chú</th>
                    <th style="width: 70px;"></th>
                    <th style="width: 70px;"></th>
                    
                </tr>
            </thead>
            <tbody>
<?php
    
    while($row = mysqli_fetch_assoc($query)) {?>
        <tr>
            <td><?php echo $row['id_hdb']; ?></td> 
            <td><?php echo $row['ten_nhanvien']; ?></td>                             
            <td><?php echo $row['ten_kh']; ?></td>
			<td><?php echo $row['date_order']; ?></td>
            <td><?php echo $row['tong_tien']; ?></td>
			<td><?php echo $row['payment']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td><?php echo $row['note_hdb']; ?></td>
            <td>
			<a href="sua.php?id=<?php echo $row['id_hdb']; ?>">
            <button class= "btn btn-warning" >Sửa</button>
            </a>
            </td>
            <td>
                <a href="../chitiethoadonban/index.php?id=<?php echo $row['id_hdb'];?>"><button class="btn btn-success">Chi tiết</button></a>
            
            </td>
            

        </tr>
    
<?php }  ?>

            </tbody>
        </table>
			</div>
		</div>
	</div>
  <script type="text/javascript">
		function deleteBanGhi(id) {
			var option = confirm('Bạn có chắc chắn muốn xoá hóa đơn bán này không?')
			if(!option) {
				return;
			}

			console.log(id)
			//ajax - lenh post
			$.post('ajax.php', {
				'id': id,
				'action': 'delete'
			}, function(data) {
				location.reload()
			})
		}
	</script>
</body>
</html>