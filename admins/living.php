<?php
	header('Content-Type: text/html; charset=UTF-8');
	require 'class.php';
	menu(6,正在居住的客人信息);
	//code here..
    echo   '<div class="col-lg-10 col-md-10">
                <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>房间ID</th>
                                    <th>姓名</th>
                                    <th>性别</th>
                                    <th>电话号码</th>
									<th>人数</th>
									<th>房间类型</th>
									<th>入住时间</th>
									<th>退房时间</th>
                                </tr>
                            </thead>
                            <tbody>';
    $query1 = "SELECT * FROM wkl_order WHERE complete = 1";
    $result1 = mysql_query($query1) or die('SQL语句有误：'.mysql_error());
    $l_c=array('success','info','warming','danger');
    $i=0;
    while (!!$row1 = mysql_fetch_array($result1)) {
        echo '                  <tr class='.$l_c[$i].'>';
        echo '                      <td>'.$row1['room_NO'].'</td>';
        echo '                      <td>'.$row1['guest_name'].'</td>';
        echo '                      <td>'.$row1['sex'].'</td>';
        echo '                      <td>'.$row1['phone'].'</td>';
		echo '                      <td>'.$row1['num'].'</td>';
		echo '                      <td>'.$row1['type'].'</td>';
		echo '                      <td>'.$row1['check_in_date'].'</td>';
		echo '                      <td>'.$row1['check_out_date'].'</td>';
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
