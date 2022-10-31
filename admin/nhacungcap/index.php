<?php
require_once('../../db/config.php');
$sql ="SELECT * from nha_cung_cap";
$query = mysqli_query($connect,$sql);

?>
<!DOCTYPE html>
<?php
require_once("../header.php");
?>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Quản lý nhà cung cấp</h2>
			</div>
      <a href="add.php">
      <button class= "btn btn-success" style=" margin-bottom:15px; margin-top:5px;" >Thêm nhà cung cấp</button>
      </a>
			<div class="panel-body">
	
        <table class ="table table-bordered table-hover">
            <thead>
                <tr>
                    <th  style="width: 100px;">Mã nhà cung cấp</th>
                    <th  style="width: 100px;">Tên nhà cung cấp</th>
                    <th  style="width: 200px;">Địa chỉ</th>
					<th  style="width:200px;">Email</th>
					<th  style="width: 150px;">SĐT</th>
					<th  style="width: 250px;">Chi tiết</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
<?php
    
    while($row = mysqli_fetch_assoc($query)) {?>
        <tr>
            <td><?php echo $row['id_ncc']; ?></td> 
            <td><?php echo $row['ten_ncc']; ?></td>                             
            <td><?php echo $row['diachi_ncc']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['sdt']; ?></td>
			<td><?php echo $row['Chi_tiet']; ?></td>
            <td>
			<a href="sua.php?id=<?php echo $row['id_ncc']; ?>">
            <button class= "btn btn-warning" >Sửa</button>
            </a>
            </td>
            <td>
            <button class="btn btn-danger" onclick="deleteBanGhi('<?php echo $row['id_ncc']; ?>')">Xoá</button>
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
			var option = confirm('Bạn có chắc chắn muốn xoá nhà cung cấp này không?')
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