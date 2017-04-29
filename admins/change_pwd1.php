<?php
	header('Content-Type: text/html; charset=UTF-8');
	require 'class.php';
	menu(15,修改密码);
	//code here..
?>
<div class="col-lg-6 col-md-6">
	<form method="post" action="change_pwd2.php">
		<div class="input-group">
    		<span class="input-group-addon"> 原密码 </span>
    		<input type="text" class="form-control" name="old_pwd" />
		</div>
		<br />
		<div class="input-group">
    		<span class="input-group-addon"> 新密码 </span>
    		<input type="password" class="form-control" name="new_pwd1" />
    	</div>
		<br />
    	<div class="input-group">
        	<span class="input-group-addon">再次输入</span>
    		<input type="password" class="form-control" name="new_pwd2" />
		</div>
		<br />
    	<input class="btn btn-danger btn-lg btn-block" type="submit" value="提交" name="change_pwd" />
    </form>

<?php
	footer();
?>
