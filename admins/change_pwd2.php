<?php
	header('Content-Type: text/html; charset=UTF-8');
	require 'class.php';

	//code here..
	$name=$_COOKIE['name'];
    if (!isset($_POST['change_pwd']) || $_POST['change_pwd']!='提交') {
		header('Location:change_pwd1.php');
		exit;
	}
    $old_pwd = $_POST['old_pwd'];
	$new_pwd1 = $_POST['new_pwd1'];
	$new_pwd2 = $_POST['new_pwd2'];

    $query = "SELECT * FROM wkl_users WHERE name='$name'";
    $result = @mysql_query($query) or die('查询语句出错：'.mysql_error());
    if (!!$row = mysql_fetch_array($result)) {
            $pwd=$row['pwd'];
    }

    if(($pwd==$old_pwd)&&($new_pwd1==$new_pwd2)) {
        $query = "UPDATE wkl_users SET pwd='$new_pwd2' WHERE name='$name'";
        @mysql_query($query) or die('修改出错：'.mysql_error());
        menu(15,修改密码成功);
		footer();
    } else {
		menu(15,密码错误或前后不一致);
		footer();

	}


?>
