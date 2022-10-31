<?php
require_once('../../db/config.php');
$sql =" SELECT * from loaithucung";
$query = mysqli_query($connect,$sql);
?>
<!DOCTYPE html>
<?php
require_once("../header.php");
?>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Quản lý loại thú cưng</h2>
			</div>
			<div class="panel-body">

      <a href="add.php">
      <button class= "btn btn-success" style=" margin-bottom:15px; margin-top:5px;" >Thêm loại thú cưng</button>
      </a>
        <table class ="table table-bordered table-hover">
            <thead>
                <tr>
                    
                    <th style="width: 50px;">Mã loại thú cưng</th>
                    <th style="width: 100px;">Tên loại thú cưng</th>
                    <th style="width: 300px;">Chi tiết</th>
                    <th style="width: 70px;"></th>
                    <th style="width: 70px;"></th>
                    <th style="width: 70px;"></th>
                </tr>
            </thead>
            <tbody>
<?php
   
    while($row = mysqli_fetch_assoc($query)) {?>
        <tr>
            
            <td><?php echo $row['id_loaithucung']; ?></td>     
            <td><?php echo $row['TENLOAI']; ?></td>                             
            <td><?php echo $row['CHITIET']; ?></td>
            <td>
            <a href="sua.php?id=<?php echo $row['id_loaithucung']; ?>">
            <button class= "btn btn-warning" >Sửa</button>
            </a>
            </td>
            <td>
                <a href="/webdemo/admin/thucung/thucungtheoloai.php?id_loaithucung=<?php echo $row['id_loaithucung']?>"><button class="btn btn-success">Chi tiết</button></a>
            
            </td>
            <td>
            <button class="btn btn-danger" onclick="deleteBanGhi('<?php echo $row['id_loaithucung']; ?>')">Xoá</button>
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
            if(id!=5){
			var option = confirm('Bạn có chắc chắn muốn xoá loại thú cưng này không?')
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
            alert('Bạn không thể xóa loại thú cưng khác!')
        }
    }
	</script>
</body>
</html>