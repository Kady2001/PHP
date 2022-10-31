<?php
require_once('../../db/config.php');
$sql ="SELECT * from hoa_don_ban";
$query = mysqli_query($connect,$sql);

$id_edit =$_GET['id'];
$sql_up =" SELECT * from hoa_don_ban inner join chi_tiet_hoa_don_ban  on hoa_don_ban.id_hdb = chi_tiet_hoa_don_ban.id_hdb 
 join thucung on thucung.id_thucung=chi_tiet_hoa_don_ban.id_thucung
where hoa_don_ban.id_hdb =$id_edit";
$query_up = mysqli_query($connect, $sql_up);
$row = mysqli_fetch_assoc($query_up);
?>
<!DOCTYPE html>
<?php
require_once("../header.php");
?>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Chi tiết hóa đơn bán</h2>
			</div>
    
			<div class="panel-body">
	
        <table class ="table table-bordered table-hover">
            <thead>
                <tr>
                    <th  style="width: 50px;">Mã hóa chi tiết đơn bán</th>
                    <th  style="width: 50px;">Mã hóa đơn bán</th>
                    <th  style="width: 100px;">Tên thú cưng</th>
					<th  style="width: 100px;">Số lượng</th>
                    <!-- <th style="width: 100px;"></th> -->
                    
                </tr>
            </thead>
            <tbody>
<?php
    
    {?>
        <tr>
        <td><?php echo $row['id_cthdb']; ?></td>    
            <td><?php echo $row['id_hdb']; ?></td> 
                                     
            <td><?php echo $row['TENTHUCUNG']; ?></td>

			<td><?php echo $row['sl']; ?></td>
            
            <!-- <td>
			<a href="sua.php?id=<?php //echo $row['id_cthdb']; ?>">
            <button class= "btn btn-warning" >Sửa</button>
            </a>
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