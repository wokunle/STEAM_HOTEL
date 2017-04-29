<?php
	header('Content-Type: text/html; charset=UTF-8');
	require 'mysql_config.php';

	if (!isset($_POST['reg']) || $_POST['reg']!='提交') {
		header('Location:index.php');
		exit;
	}

	$username = trim($_POST['username']);
	$password = $_POST['password'];
	$email = trim($_POST['email']);

	if (strlen($username) < 2 || strlen($username) > 10) {
		//使用JS来跳转
		echo "<script>alert('用户名不能小于两位或者大于10');history.back();</script>";
		exit;
	}
	$query = "SELECT * FROM wkl_users WHERE name='$username'";
	$result = mysql_query($query) or die('SQL语句有误：'.mysql_error());
	while (!!$row = mysql_fetch_array($result)) {
		echo "<script>alert('此用户名已被注册。。');history.back();</script>";
		exit;
	}

	if (strlen($password) < 6 || strlen($username) > 16) {
		echo "<script>alert('密码不能小于6位或大于16位');history.back();</script>";
		exit;
	}

	//验证电子邮件
	if (!preg_match('/([\w\.]{2,255})@([\w\-]{1,255}).([a-z]{2,4})/',$email)) {
		echo "<script>alert('电子邮件不合法！');history.back();</script>";
		exit;
	}
	$query = "SELECT * FROM wkl_users WHERE email='$email'";
	$result = mysql_query($query) or die('SQL语句有误：'.mysql_error());
	while (!!$row = mysql_fetch_array($result)) {
		echo "<script>alert('此邮箱已被注册。。');history.back();</script>";
		exit;
	}

	$query = "INSERT INTO wkl_users (name,email,id,pwd) VALUES ('$username','$email',0,'$password')";
	@mysql_query($query) or die('新增错误：'.mysql_error());

	echo '用户名：'.$username.'<br />';
	echo '电子邮件：'.$email.'<br />';
	echo 'registered successful';

?>
