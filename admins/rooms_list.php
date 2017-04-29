<?php
	header('Content-Type: text/html; charset=UTF-8');
	require 'class.php';
	menu(13,房间信息列表);
	//code here..
  $query = "SELECT * FROM wkl_rooms";
  $result = @mysql_query($query) or die('查询语句出错：'.mysql_error());

  echo '<div class="col-lg-10 col-md-10">
			  <div class="table-responsive">
  		<table border="1">
        <tr>
        <td>NO</td>
        <td>room_type</td>
        <td>living_stat</td>
        <td>cleaning_date</td>

        </tr>';

  while (!!$row= mysql_fetch_array($result))
  {
    echo '<tr>';
    echo '<td>'.$row['NO'].'</td>';
    echo '<td>'.$row['type'].'</td>';
    echo '<td>'.$row['living_stat'].'</td>';
    echo '<td>'.$row['cleaning_date'].'</td>';

    echo '</tr>';
  }
  echo'</table>
  </div>
</div>';

  footer();
?>
