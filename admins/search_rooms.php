<?php
	header('Content-Type: text/html; charset=UTF-8');
	require 'class.php';
	menu(2,现场订房);
	//code here..
?>
    <div class="col-lg4 col-md-4">
        <form method="post" action="search_rooms_result.php">
            <div class="input-group">
                <span class="input-group-addon">房间类型</span>
            <!--    <input type="text" class="form-control" placeholder="room_type" />-->
				<select class="form-control" name="room_type">
				<?php
				$query = "SELECT * FROM wkl_roomtype";
				$result = @mysql_query($query) or die('查询语句出错：'.mysql_error());
				while (!!$row= mysql_fetch_array($result)) {
			    	echo '<option value="'.$row['type'].'">'.$row['room_type'].'</option>';
			    }
			//	<option value="volvo">Volvo</option>
				?>
				</select>
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon">到达日期</span>
                <input type="date" class="form-control" name="begin_date" />
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon">退房日期</span>
                <input type="date" class="form-control" name="leave_date" />
            </div>
            <br>
            <input class="btn btn-primary" type="submit" value="提交" name="search_rooms" />
        </form>
    </div>

<?php
	footer();
?>
