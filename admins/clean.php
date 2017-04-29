<?php
	header('Content-Type: text/html; charset=UTF-8');
	require 'class.php';
	menu(10,房间清理状态);
	//code here..
    $today=date("y-m-d");
    $query = "SELECT * FROM wkl_rooms WHERE cleaning_date<'$today'";
    $result1 = @mysql_query($query) or die('查询语句出错：'.mysql_error());
    if(!$row1 = mysql_fetch_array($result1)) {
        echo '暂无房间需清理';
    } else {
		$result2 = @mysql_query($query) or die('查询语句出错：'.mysql_error());
		echo   '<div class="col-lg-6 col-md-6">
	                <div class="table-responsive">
	                    <form method="post" action="clean_DONE.php">
	                        <table class="table">
	                            <thead>
	                                <tr>
	                                    <th>#</th>
	                                    <th>房间ID</th>
	                                    <th>上次清理日期</th>
	                                    <th>是否有人居住</th>
	                                </tr>
	                            </thead>
	                            <tbody>';
	    $l_c=array('success','info','warming','danger');
	    $i=0;
	    while (!!$row2 = mysql_fetch_array($result2)) {
	        echo '                  <tr class='.$l_c[$i].'>';
	        echo '                      <td><input type="checkbox"  name="room_NO[]" value='.$row2['NO'].'></td>';
	        echo '                      <td>'.$row2['NO'].'</td>';
	        echo '                      <td>'.$row2['cleaning_date'].'</td>';
	        echo '                      <td>'.$row2['living_stat'].'</td>';
	        echo '                  </tr>';
	        $i++;
	        if($i>3) {$i=0;}
	    }
	    echo '                  </tbody>
	                        </table>
	                        <br>
	                        <input class="btn btn-primary" type="submit" value="房间清理完成" name="clean_DONE" />
						</form>
	            	</div>
	            </div>';
	footer();
    }
?>
