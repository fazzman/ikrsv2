<?php
  defined('__NOT_DIRECT') || define('__NOT_DIRECT',1);
  include '../cek-akses.php';

	mysql_connect(DB_HOST,DB_USER,DB_PASS);
	mysql_select_db(DB_NAME);

	$userId = $_SESSION['user_id'];
	$komak = $_POST['kode_matkul'];
	
	if(!empty($komak)){
		$sql = "DELETE FROM matakuliah WHERE kode_matkul='$komak'";
		$result = mysql_query($sql) or die(mysql_error());
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
?>