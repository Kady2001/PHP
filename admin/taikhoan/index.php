<?php
require_once('../../db/config.php');
$sql ="SELECT * from tai_khoan";
$query = mysqli_query($connect,$sql);

?>
<!DOCTYPE html>
<?php
require_once("../header.php");
?>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Quản lý tài khoản người dùng</h2>
			</div>
      <a href="add.php">
      <button class= "btn btn-success" style=" margin-bottom:15px; margin-top:5px;" >Thêm tài khoản</button>
      </a>
			<div class="panel-body">
	
        <table class ="table table-bordered table-hover">
            <thead>
                <tr>
                    <th  style="width: 150px;">Mã tài khoản</th>
                    <th  style="width: 300px;">Email</th>
                    <th  style="width: 200px;">Mật khẩu</th>
					<th  style="width:200px;">Tên</th>
					
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
<?php
    
    while($row = mysqli_fetch_assoc($query)) {?>
        <tr>
            <td><?php echo $row['id_tk']; ?></td> 
            <td><?php echo $row['email']; ?></td>                             
            <td><?php echo $row['matkhau']; ?></td>
			<td><?php echo $row['tentk']; ?></td>
            <td>
			<a href="sua.php?id=<?php echo $row['id_tk']; ?>">
            <button class= "btn btn-warning" >Sửa</button>
            </a>
            </td>
            <td>
            <button class="btn btn-danger" onclick="deleteBanGhi('<?php echo $row['id_tk']; ?>')">Xoá</button>
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
			var option = confirm('Bạn có chắc chắn muốn xoá tài khoản này không?')
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