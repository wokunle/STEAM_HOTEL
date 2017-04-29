<?php
	header('Content-Type: text/html; charset=UTF-8');
	require 'class.php';
	menu(11,VIP会员情况);
	//code here..
    echo   '<div class="col-lg-6 col-md-6">
                <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>客人姓名</th>
                                    <th>余额</th>
                                </tr>
                            </thead>
                            <tbody>';
    $query1 = "SELECT * FROM wkl_users WHERE VIP = 1 ";
    $result1 = mysql_query($query1) or die('SQL语句有误：'.mysql_error());
    $l_c=array('success','info','warming','danger');
    $i=0;
    while (!!$row1 = mysql_fetch_array($result1)) {
        echo '                  <tr class='.$l_c[$i].'>';
        echo '                      <td>'.$row1['name'].'</td>';
        echo '                      <td>'.$row1['balance'].'</td>';
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
