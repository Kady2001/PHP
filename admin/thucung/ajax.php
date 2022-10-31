<?php
require_once ('../../db/config.php');

if (!empty($_POST)) {
	if (isset($_POST['action'])) {
		$action = $_POST['action'];

		switch ($action) {
			case 'delete':
				if (isset($_POST['id'])) {
					$id = $_POST['id'];

					$sql_delete = "DELETE from thucung where id_thucung = $id";
                    $query_delete =mysqli_query($connect,$sql_delete);
					
				}
				break;
		}
	}
}