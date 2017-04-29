<?php
    require 'class.php';
    menu(7,报修情况);
    echo   '<div class="col-lg-6 col-md-6">
                <h5>客人报修列表：</h5>
                <div class="table-responsive">
                    <form method="post" action="repair_DONE.php">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>房间ID</th>
                                    <th>客人姓名</th>
                                    <th>报修时间</th>
                                    <th>损坏物品</th>
                                </tr>
                            </thead>
                            <tbody>';
    $query1 = "SELECT * FROM wkl_repair_list WHERE repair_DONE = 0 ";
    $result1 = mysql_query($query1) or die('SQL语句有误：'.mysql_error());
    $l_c=array('success','info','warming','danger');
    $i=0;
    while (!!$row1 = mysql_fetch_array($result1)) {
        echo '                  <tr class='.$l_c[$i].'>';
        echo '                      <td><input type="checkbox"  name="repair_NO[]" value='.$row1['repair_NO'].'></td>';
        echo '                      <td>'.$row1['room_NO'].'</td>';
        echo '                      <td>'.$row1['real_name'].'</td>';
        echo '                      <td>'.$row1['submit_time'].'</td>';
        echo '                      <td>'.$row1['broken_thing'].'</td>';
        echo '                  </tr>';
        $i++;
        if($i>3) {$i=0;}
    }
    echo '                  </tbody>
                        </table>
                        <br>
                        <input class="btn btn-primary" type="submit" value="维修完成" name="repair" />
                    </div>
                </form>
            </div>';
    footer();
?>
