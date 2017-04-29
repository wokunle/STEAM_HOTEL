<?php
header('Content-Type: text/html; charset=UTF-8');
require 'class.php';
menu(2,现场订房);

	if (!isset($_POST['search_rooms']) || $_POST['search_rooms']!='提交') {
		header('Location:search_rooms.php');
		exit;
	}

	$room_type =  trim($_POST['room_type']);
  	$begin_date = trim($_POST['begin_date']);
  	$leave_date = trim($_POST['leave_date']);
	$query1 = "SELECT * FROM wkl_rooms WHERE type='$room_type'";
	$result1 = mysql_query($query1) or die('SQL语句有误：'.mysql_error());
	while (!!$row1 = mysql_fetch_array($result1)) {
		$temp=1;
		$room_NO=$row1['NO'];
    	$query2 = "SELECT * FROM wkl_order WHERE room_NO='$room_NO'";
    	$result2 = mysql_query($query2) or die('SQL语句有误：'.mysql_error());
    	while (!!$row2 = mysql_fetch_array($result2)) {
			if((!!$row2["check_in_date"]) && (strtotime($leave_date)>strtotime($row2["check_in_date"])) && (strtotime($begin_date)<strtotime($row2["check_out_date"]))) {
				$temp=0;
			}
		}
		if($temp==1) {
			$room_result[]=$room_NO;
		}
	}

	if(!!$room_result) {
		echo "可预定的房间：<br>";
		echo '	<form method="post" action="local_reserve.php">';
		echo '	<input type="hidden" name="room_type" value='.$room_type.'/>';
		echo '	<input type="hidden" name="begin_date" value='.$begin_date.'/>';
		echo '	<input type="hidden" name="leave_date" value='.$leave_date.'/>';
		echo '	<div class="col-lg6 col-md-6">
					<div class="input-group">
						<span class="input-group-addon">姓名</span>
						<input class="form-control" name="name" type="text" />
					</div>
					<div class="input-group">
						<span class="input-group-addon">人数</span>
						<input class="form-control" name="num" type="text" />
                	</div>
					<div class="input-group">
					   <span class="input-group-addon">手机号</span>
					   <input class="form-control" name="phone" type="text" />
				    </div>
				</div>';
		foreach ($room_result as $value) {
			echo '<input class="btn btn-success" type="submit" value='.$value.' name="local_reserve" />';
		}
	} else {
		echo "<script>alert('查询无结果');history.back();</script>";
	}
	footer();
?>
