<?php
require_once('../../db/config.php');
$sql ="SELECT * from thucung";
$query = mysqli_query($connect,$sql);

?>
<!DOCTYPE html>
<?php
require_once("../header.php");
?>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Quản lý thú cưng</h2>
			</div>
      <a href="add.php">
      <button class= "btn btn-success" style=" margin-bottom:15px; margin-top:5px;" >Thêm thú cưng</button>
      </a>
			<div class="panel-body">
	
        <table class ="table table-bordered table-hover">
            <thead>
                <tr>
                    <th  style="width: 50px;">Mã thú cưng</th>
                    <th  style="width: 50px;">Mã loại thú cưng</th>
                    <th  style="width: 50px;">Mã nhà cung cấp</th>
					<th  style="width: 200px;">Tên thú cưng</th>
					<th  style="width: 200px;">Ảnh</th>
                    <th  style="width: 100px;">Chi tiết 1</th>
                    <th  style="width: 100px;">Chi tiết 2</th>
                    <th  style="width: 100px;">Chi tiết 3</th>
                    <th  style="width: 100px;">Số lượng</th>
                    <th  style="width: 100px;">Giá</th>
                    <th  style="width: 100px;">Giá giảm</th>
                    <th  style="width: 100px;">Chứng nhận</th>
                    <th style="width: 100px;"></th>
                    <!-- <th style="width: 100px;"></th> -->
                </tr>
            </thead>
            <tbody>
<?php
    
    while($row = mysqli_fetch_assoc($query)) {?>
        <tr>
            <td><?php echo $row['id_thucung']; ?></td> 
            <td><?php echo $row['id_loaithucung']; ?></td>                             
            <td><?php echo $row['id_ncc']; ?></td>
			<td><?php echo $row['TENTHUCUNG']; ?></td>
			<td>
            <img style= "width: 100px" src="/webdemo/image/thucung/<?php echo $row['ANH_1']?>" alt="">
            <img style= "width: 100px ;Padding-top: 10px" src="/webdemo/image/thucung/<?php echo $row['ANH_2']?>" alt="">
            <img style= "width: 100px ;Padding-top: 10px" src="/webdemo/image/thucung/<?php echo $row['ANH_3']?>" alt="">
            <img style= "width: 100px ;Padding-top: 10px" src="/webdemo/image/thucung/<?php echo $row['ANH_4']?>" alt="">
            </td>
            <td><?php echo $row['CHITIET_1']; ?></td>
			<td><?php echo $row['CHITIET_2']; ?></td>
            <td><?php echo $row['CHITIET_3']; ?></td>
            <td><?php echo $row['soluong']; ?></td>
            <td><?php echo $row['GIATHUCUNG']; ?></td>
            <td><?php echo $row['GIAMTHUCUNGGIAM']; ?></td>
            <td>
            <img style= "width: 100px" src="/webdemo/image/chungnhan/<?php echo $row['chungnhan']?>" alt="">
            </td>
            <td>
			<a href="sua.php?id=<?php echo $row['id_thucung']; ?>">
            <button class= "btn btn-warning" >Sửa</button>
            </a>
            </td>
            <!-- <td>
            <button class="btn btn-danger" onclick="deleteBanGhi('<?php echo $row['id_thucung']; ?>')">Xoá</button>
            </td> -->
        </tr>
    
<?php }  ?>

            </tbody>
        </table>
			</div>
		</div>
	</div>
  <script type="text/javascript">
		function deleteBanGhi(id) {
			var option = confirm('Bạn có chắc chắn muốn xoá thú cưng này không?')
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