<?php
	header('Content-Type: text/html; charset=UTF-8');
	require 'class.php';

	//code here..
    if (!isset($_POST['local_reserve'])) {
		header('Location:search_rooms.php');
		exit;
	} else {
        $NO=$_POST['local_reserve'];
        $name =  $_POST['name'];
        $num =  $_POST['num'];
        $phone =  $_POST['phone'];
        $begin_date =  trim($_POST['begin_date']);
        $leave_date =  trim($_POST['leave_date']);
        $room_type =  trim($_POST['room_type']);


        $query = "INSERT INTO wkl_order(guest_name,room_NO,type,sex,num,check_in_date,check_out_date,phone,reserve_date) VALUES ('$name','$NO','$room_type','1','$num','$begin_date','$leave_date','$phone',CURRENT_TIMESTAMP);";
        @mysql_query($query) or die('修改出错：'.mysql_error());
        menu(2,订房成功);
        }
	footer();
?>
