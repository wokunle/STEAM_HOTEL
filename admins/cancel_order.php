<?php
	header('Content-Type: text/html; charset=UTF-8');
	require 'class.php';
	if (!isset($_POST['cancel']) || $_POST['cancel']!='取消订单') {
        header('Location:reserved.php');
        exit;
    }
	$cancel_order=$_POST['cancel_order'];
	foreach ($cancel_order as $value) {
		$query = "UPDATE wkl_order SET complete = 3 WHERE order_code ='$value' ";
		@mysql_query($query) or die('修改出错：'.mysql_error());
	}
	header("refresh:5;url=http://fzuwise.applinzi.com/STEAM_HOTEL/admins/reserved.php");

	menu(5,取消订单成功);
	//code here..
    print_r($cancel_order);
	footer();
?>
