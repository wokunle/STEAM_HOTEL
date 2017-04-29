<?php
    header('Content-Type: text/html; charset=UTF-8');
    require '../mysql_config.php';
    if(!isset($_COOKIE['name']))
    {
      header('Location:../log_in.php');
      exit;
    }

    function menu($active,$option) {
        $name=$_COOKIE['name'];
        echo '
        <!DOCTYPE html>
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>STEAM HOTEL酒店管理系统</title>
        	<!-- BOOTSTRAP STYLES-->
            <link href="ad_assets/css/bootstrap.css" rel="stylesheet" />
            <!-- FONTAWESOME STYLES-->
            <link href="ad_assets/css/font-awesome.css" rel="stylesheet" />
            <!-- CUSTOM STYLES-->
            <link href="ad_assets/css/custom.css" rel="stylesheet" />
            <!-- GOOGLE FONTS-->
            <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
        </head>
        <body>
            <div id="wrapper">
                <div class="navbar navbar-inverse navbar-fixed-top">
                    <div class="adjust-nav">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <span class="logout-spn" >
                                    <a href="#" style="color:#fff;">欢迎回来, '.$name.'!</a>
                            </span>
                        </div>

                        <span class="logout-spn" >
                            <a href="../log_out.php" style="color:#fff;">注销</a>
                        </span>
                    </div>
                </div>
                <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
                    <div class="sidebar-collapse">
                        <ul class="nav" id="main-menu">
                            <li';if($active==1) { echo ' class="active-link" '; } echo '>
                                <a href="welcome.php" ><i class="fa fa-desktop "></i>酒店总览 <span class="badge">Included</span></a>
                            </li>
                            <li';if($active==2) { echo ' class="active-link" '; } echo '>
                                <a href="search_rooms.php"><i class="fa fa-bar-chart-o"></i>现场订房 </a>
                            </li>
                            <li';if($active==3) { echo ' class="active-link" '; } echo '>
                                <a href="check_out.php"><i class="fa fa-table "></i>今日退房 </a>
                            </li>
                            <li';if($active==4) { echo ' class="active-link" '; } echo '>
                                <a href="check_in.php"><i class="fa fa-table "></i>今日入住 </a>
                            </li>
                            <li';if($active==5) { echo ' class="active-link" '; } echo '>
                                <a href="reserved.php"><i class="fa fa-table "></i>已预约列表 </a>
                            </li>
                            <li';if($active==6) { echo ' class="active-link" '; } echo '>
                                <a href="living.php"><i class="fa fa-table "></i>居住中列表 </a>
                            </li>
                            <li';if($active==7) { echo ' class="active-link" '; } echo '>
                                <a href="repair.php"><i class="fa fa-qrcode "></i>报修情况 </a>
                            </li>
                            <li';if($active==8) { echo ' class="active-link" '; } echo '>
                                <a href="service.php"><i class="fa fa-qrcode "></i>服务情况 </a>
                            </li>
                            <li';if($active==9) { echo ' class="active-link" '; } echo '>
                                <a href="order_food.php"><i class="fa fa-qrcode "></i>订餐服务情况 </a>
                            </li>
                            <li';if($active==10) { echo ' class="active-link" '; } echo '>
                                <a href="clean.php"><i class="fa fa-qrcode "></i>房间清理状态 </a>
                            </li>
                            <li';if($active==11) { echo ' class="active-link" '; } echo '>
                                <a href="VIP_list.php"><i class="fa fa-edit "></i>VIP会员情况 </a>
                            </li>
                            <li';if($active==12) { echo ' class="active-link" '; } echo '>
                                <a href="users.php"><i class="fa fa-edit "></i>注册客人信息列表 </a>
                            </li>
                            <li';if($active==13) { echo ' class="active-link" '; } echo '>
                                <a href="rooms_list.php"><i class="fa fa-edit "></i>房间信息列表 </a>
                            </li>
                            <li';if($active==14) { echo ' class="active-link" '; } echo '>
                                <a href="data_statistics.php"><i class="fa fa-edit "></i>数据统计 </a>
                            </li>
                            <li';if($active==15) { echo ' class="active-link" '; } echo '>
                                <a href="change_pwd1.php"><i class="fa fa-edit "></i>修改密码 </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- /. NAV SIDE  -->

                <div id="page-wrapper" >
                    <div id="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>'.$option.' </h2>
                            </div>
                        </div>
                        <!-- /. ROW  -->
                        <hr />';
    }


    function footer() {
        echo '
                        <!-- /. ROW  -->
                    </div>
                    <!-- /. PAGE INNER  -->

                </div>
                <!-- /. PAGE WRAPPER  -->
            </div>
            <div class="footer">
                <div class="row">
                    <div class="col-lg-12" >

                    </div>
                </div>
            </div>
             <!-- /. WRAPPER  -->
            <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
            <!-- JQUERY SCRIPTS -->
            <script src="ad_assets/js/jquery-1.10.2.js"></script>
                <!-- BOOTSTRAP SCRIPTS -->
            <script src="ad_assets/js/bootstrap.min.js"></script>
                <!-- CUSTOM SCRIPTS -->
            <script src="ad_assets/js/custom.js"></script>
        </body>
        </html>';
    }


?>
