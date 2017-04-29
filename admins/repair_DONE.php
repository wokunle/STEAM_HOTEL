<?php
	header('Content-Type: text/html; charset=UTF-8');
	require 'class.php';
	if (!isset($_POST['repair']) || $_POST['repair']!='维修完成') {
        header('Location:repair.php');
        exit;
    }
	$re_no=$_POST['repair_NO'];
    print_r($re_no);
	foreach ($re_no as $value) {
		$query = "UPDATE wkl_repair_list SET repair_DONE=1 WHERE repair_NO='$value' ";
		@mysql_query($query) or die('修改出错：'.mysql_error());
	}
	header("refresh:0.5;url=http://fzuwise.applinzi.com/STEAM_HOTEL/admins/repair.php");

	menu(7,维修情况提交成功);
	//code here..

	footer();
?>
