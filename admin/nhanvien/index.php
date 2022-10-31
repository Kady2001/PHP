
<?php
require_once('../../db/config.php');
$sql ="SELECT * from nhan_vien";
$query = mysqli_query($connect,$sql);

?>
<!DOCTYPE html>
<html>
<?php
require_once("../header.php");
?>
 <body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Quản lý nhân viên</h2>
			</div>
      <a href="add.php">
      <button class= "btn btn-success" style=" margin-bottom:15px; margin-top:5px;" >Thêm nhân viên</button>
      </a>
			<div class="panel-body">
	
        <table class ="table table-bordered table-hover">
            <thead>
                <tr>
                    <th  style="width: 100px;">Mã nhân viên</th>
                    <th  style="width: 100px;">Tên nhân viên</th>
                    <th  style="width: 100px;">Giới tính</th>
                    <th  style="width: 100px;">Ngày sinh</th>
                    <th  style="width: 100px;">Quê quán</th>
                    <th  style="width: 150px;">SĐT</th>
                    
					<th  style="width:200px;">Email</th>
					<th  style="width: 200px;">Cấp bậc</th>
					
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
<?php
    
    while($row = mysqli_fetch_assoc($query)) {?>
        <tr>
            <td><?php echo $row['id_nv']; ?></td> 
            <td><?php echo $row['ten_nhanvien']; ?></td>                             
            <td><?php echo $row['gioitinh']; ?></td>
            <td><?php echo $row['ngaysinh']; ?></td>
            <td><?php echo $row['quequan']; ?></td>
            <td><?php echo $row['sdt']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['capbac']; ?></td>
            <td>
			<a href="sua.php?id=<?php echo $row['id_nv']; ?>">
            <button class= "btn btn-warning" >Sửa</button>
            </a>
            </td>
            <td>
            <button class="btn btn-danger" onclick="deleteBanGhi('<?php echo $row['id_nv']; ?>')">Xoá</button>
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
            if(id!=1){
			var option = confirm('Bạn có chắc chắn muốn xóa nhân viên này không?')
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
		}else {
            alert('Bạn không thể xóa nhân viên chính này!')
        }
    }
	</script>
</body>
</html>