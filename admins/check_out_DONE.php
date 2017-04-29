<?php
	header('Content-Type: text/html; charset=UTF-8');
	require 'class.php';
	if (!isset($_POST['check_out']) || $_POST['check_out']!='登记退房') {
        header('Location:check_out.php');
        exit;
    }
	$check_out_order=$_POST['check_out_order'];
	foreach ($check_out_order as $value) {
		$query = "UPDATE wkl_order SET complete = 2 WHERE order_code ='$value' ";
		@mysql_query($query) or die('修改出错：'.mysql_error());

		$query = "SELECT * FROM wkl_order WHERE order_code ='$value'";
		$result = @mysql_query($query) or die('查询语句出错：'.mysql_error());
		$row= mysql_fetch_array($result);
		$NO=$row['room_NO'];
		$query = "UPDATE wkl_rooms SET living_stat = 0 WHERE NO ='$NO'";
		@mysql_query($query) or die('修改出错：'.mysql_error());
	}
	header("refresh:0.5;url=http://fzuwise.applinzi.com/STEAM_HOTEL/admins/check_out.php");

	menu(3,退房成功);
	//code here..

	footer();
?>
