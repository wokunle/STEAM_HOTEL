<?php
	header('Content-Type: text/html; charset=UTF-8');
	require 'class.php';
	if (!isset($_POST['clean_DONE']) || $_POST['clean_DONE']!='房间清理完成') {
		header('Location:clean.php');
		exit;
	}
	$today=date("y-m-d");
	$name=$_POST['room_NO'];
	foreach ($name as $value) {
		$query = "UPDATE wkl_rooms SET cleaning_date='$today' WHERE NO='$value'";
		@mysql_query($query) or die('修改出错：'.mysql_error());
	}
	header("refresh:0.5;url=http://fzuwise.applinzi.com/STEAM_HOTEL/admins/clean.php");
	menu(10,清理数据提交成功);
	footer();
?>
