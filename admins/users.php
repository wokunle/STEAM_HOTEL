<?php
	header('Content-Type: text/html; charset=UTF-8');
	require 'class.php';
	menu(12,注册客人信息列表);

  	$query = "SELECT * FROM wkl_users";
  	$result = @mysql_query($query) or die('查询语句出错：'.mysql_error());
  	echo   '<div class="col-lg-6 col-md-6">
  			<div class="table-responsive">
  					<table class="table">
  						<thead>
  							<tr>
  								<th>编号</th>
  								<th>用户名</th>
								<th>邮箱</th>
								<th>权限</th>
								<th>密码</th>
  							</tr>
  						</thead>
  						<tbody>';
	$l_c=array('success','info','warming','danger');
  	$i=0;
  	while (!!$row = mysql_fetch_array($result)) {
  		echo '                  <tr class='.$l_c[$i].'>';
		echo '						<td>'.$row['NO'].'</td>';
    	echo '						<td>'.$row['name'].'</td>';
    	echo '						<td>'.$row['email'].'</td>';
		if($row['id']==0) {echo '<td> 客户 </td>';}
		else {echo '<td> 管理员 </td>';}
    	echo '						<td>'.$row['pwd'].'</td>';
  		echo '                  </tr>';
  		$i++;
  		if($i>3) {$i=0;}
  	}
  	echo '                  </tbody>
  					</table>
  					<br>
  			</div>
  		</div>';
  	footer();
?>
