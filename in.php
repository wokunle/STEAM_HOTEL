<?php
	header('Content-Type: text/html; charset=UTF-8');
	require 'mysql_config.php';

	if (!isset($_POST['log_in']) || $_POST['log_in']!='提交 | submit') {
		header('Location:index.php');
		exit;
	}

	$username = trim($_POST['username']);
	$password = $_POST['password'];

	$query = "SELECT * FROM wkl_users WHERE name='$username'";
	$result = mysql_query($query) or die('SQL语句有误：'.mysql_error());
	if (!!$row = mysql_fetch_array($result)) {
		if ($row["pwd"]!="$password") {
			echo "<script>alert('密码不正确');history.back();</script>";
			exit;
		}
	} else {
			echo "<script>alert('此用户名不存在');history.back();</script>";
			exit;
	}

	setcookie('name',$username,time()+(7*24*60*60));

	if ($row["id"]==0) {
		header('Location:guests/welcome.php');
		exit;
	} else {
		header('Location:admins/welcome.php');
		exit;
	}


?>
