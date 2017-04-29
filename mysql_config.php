<?php
	header('Content-Type:text/html;charset=utf-8');

	define('DB_HOST','w.rdc.sae.sina.com.cn');
	define('DB_USER','m54lw01mnn');
	define('DB_PWD','01jiz301m0w5hh032xh21xy3j42kmwh5ihxk3042');
	define('DB_NAME','app_fzuwise');

	//第一步，连接MYSQL服务器
	$conn = @mysql_connect(DB_HOST,DB_USER,DB_PWD) or die('数据库连接失败，错误信息：'.mysql_error());

	//第二步，选择指定的数据库，设置字符集
	mysql_select_db(DB_NAME) or die('数据库错误，错误信息：'.mysql_error());
	mysql_query('SET NAMES UTF8') or die('字符集设置错误'.mysql_error());

?>
