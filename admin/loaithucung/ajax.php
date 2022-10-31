<?php
require_once ('../../db/config.php');



if (!empty($_POST)) {
	if (isset($_POST['action'])) {
		$action = $_POST['action'];

		switch ($action) {
			case 'delete':
				if (isset($_POST['id'])) {
					$id = $_POST['id'];
					
					

   			if ($id != 5) {
    $sanPhamById = "SELECT * FROM thucung WHERE id_loaithucung = $id";
    $resultSP = mysqli_query($connect, $sanPhamById);
    while ($row = mysqli_fetch_array($resultSP)) :
        $maSPSua = $row['id_thucung'];
        $queryUpdateSP = "UPDATE thucung SET id_loaithucung = 5 WHERE id_thucung = '$maSPSua'";
        mysqli_query($connect, $queryUpdateSP);
    endwhile;

					$sql_delete = "DELETE from loaithucung where id_loaithucung = $id";
                    $query_delete =mysqli_query($connect,$sql_delete);
					
				}
				break;
		}
	}
}
}