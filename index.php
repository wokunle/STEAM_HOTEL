<?php
  if(isset($_COOKIE['name']))
  {
    header('Location:admins/welcome.php');
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>这里是STEAM HOTEL╰(*°▽°*)╯</title>
        <!--    <link rel="shortcut icon" type="image/x-icon" href="x_assets/images/logo.png"/>-->

        <link href="x_assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="x_assets/css/bootstrap-theme.min.css" rel="stylesheet">

        <link href="x_assets/css/owl.carousel.css" rel="stylesheet">
        <link href="x_assets/css/owl.theme.default.min.css" rel="stylesheet">

        <link href="x_assets/css/magnific-popup.css" rel="stylesheet">

        <link href="x_assets/css/style.css" rel="stylesheet">


        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div id="menu-item" class="menu-item hide-menu">
            <div class="container">
                <ul>
                    <a href="index.php"><li>登录</li></a>
                    <a href="#register"><li>注册</li></a>
                    <a href="#about"><li>关于STEAM HOTEL</li></a>
                    <a href="#contact"><li>联系方式</li></a>
                    <a href="#team"><li>关于我们</li></a>
                    <a href="#"><li>待定</li></a>
                    <a href="#"><li>待定</li></a>
                </ul>
            </div>
        </div>
        <div class="main">
            <header class="bg-img header">
                <nav class="navbar navbar-default navbar-vira">
                    <div class="container">
                        <div class="navigation-bar">
                            <div class="row">
                                <div class="col-xs-6">
                            <!--        <div class="logo">
                                        <a href="index.html"><span class="fa fa-viacoin"></span></a>
                                    </div>-->
                                </div>
                                <div class="col-xs-6 text-right">
                                    <div class="menu m">
                                        <a href="#"><span class="ion-navicon _ion-android-menu"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="container">
                    <div class="row">
                        <div class="intro-box">
                            <div class="intro">
                                <h3 style="color:white">欢迎来到 STEAM HOTEL</h3>
                                <h4 style="color:white">请先登录 | please log in~</h4>
                                <div class="col-sm-12">
                                    <form method="post" action="in.php">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h4 style="color:white">用户名：</h4>
                                            </div>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" name="username" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h4 style="color:white" >密　码：</h4>
                                            </div>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="password" name="password" /><br />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input class="btn vira-btn" type="submit" value="提交 | submit" name="log_in" />
                                            </div>
                                            <div class="col-sm-6">
                                                <a class="btn vira-btn" href="#register">还未注册？</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>                                                          　
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!--    <section id="about" class="about section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h2 class="title">About agency</h2>
                            <p>
                                Complimenten, bewonderend gefluit en lonkende blikken zijn enkele risico’s die The Garment Club met zich meebrengt. Onze enige missie is dat jij de best geklede man van de omgeving bent. Laat gratis een op eden box samenstellen door je personal shopper en betaal.
                            </p>
                            <img src="x_assets/images/signature.png">
                            <span>Vira Studio-ceo</span>
                        </div>
                    </div>
                </div>
            </section>-->
            <section id="register" class="purpose section">
                <div class="container">
                    <h2 class="title">新用户注册</h2>
                    <form method="post" action="register2.php">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="vira-card">
                                    <div class="vira-card-content">
                                        <h3>用户名</h3>
                                        <p>
                                            <input style="color:black" class="form-control" type="text" name="username" />
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="vira-card">
                                    <div class="vira-card-content">
                                        <h3>密码</h3>
                                        <p>
                                            <input style="color:black" class="form-control" type="password" name="password" />
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="vira-card">
                                    <div class="vira-card-content">
                                        <h3>邮箱</h3>
                                        <p>
                                            <input style="color:black" class="form-control" type="text" name="email" />
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <input class="btn vira-btn" type="submit" value="提交 | submit" name="reg" />
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <!--<section id="about" class="expert">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 bg-img">
                            <div></div>
                        </div>
                        <div class="col-sm-5 section">
                            <h2 class="title">Responsive design expert</h2>
                            <div id="expert-slider" class="owl-carousel">
                                <div class="item">
                                    <p>
                                        Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall proposition. Organically grow the holistic world view of disruptiveinnovationvia workplace diversity and empowerment.
                                    </p>
                                </div>
                                <div class="item">
                                    <p>
                                        Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <section id="about" class="vira-quote section bg-img">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <img class="quote" src="x_assets/images/quote.png">
                           <p>
                               STEAM HOTEL棒极了，这是我住过最完美的酒店~
                           </p>
                           <p class="author">来自酒店的第一位顾客——Crescent小姐</p>
                           <img src="x_assets/images/mouse.png">
                        </div>
                    </div>
                </div>
            </section>
            <section id="about" class="work section">
                <div class="container">
                    <h2 class="title">关于STEAM HOTEL酒店</h2>
                    <div id="workstation-slider" class="owl-carousel">
                        <div class="item">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                    <img class="img-responsive" src="x_assets/images/4.jpg">
                                </div>
                                <div class="vira-card-content">
                                    <h3>分店1</h3>
                                    <p>
                                        巴拉巴拉巴拉
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                    <img class="img-responsive" src="x_assets/images/5.jpg">
                                </div>
                                <div class="vira-card-content">
                                    <h3>分店2</h3>
                                    <p>
                                        巴拉巴拉巴拉
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                    <img class="img-responsive" src="x_assets/images/6.jpg">
                                </div>
                                <div class="vira-card-content">
                                    <h3>分店3</h3>
                                    <p>
                                        巴拉巴拉巴拉
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                    <img class="img-responsive" src="x_assets/images/4.jpg">
                                </div>
                                <div class="vira-card-content">
                                    <h3>分店4</h3>
                                    <p>
                                        巴拉巴拉巴拉
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                    <img class="img-responsive" src="x_assets/images/5.jpg">
                                </div>
                                <div class="vira-card-content">
                                    <h3>分店5</h3>
                                    <p>
                                        巴拉巴拉巴拉
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                    <img class="img-responsive" src="x_assets/images/6.jpg">
                                </div>
                                <div class="vira-card-content">
                                    <h3>分店6</h3>
                                    <p>
                                        巴拉巴拉巴拉
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="team" class="watch bg-img">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <span>观看视频</span>
                            <a class="popup-youtube btn" href="https://www.bilibili.com/"><span class="fa fa-play"></span></a>
                            <span>了解我们</span>
                        </div>
                    </div>
                </div>
            </section>
            <section  class="team section">
                <div class="container">
                    <h2 class="title">关于我们</h2>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                    <img class="img-responsive" src="x_assets/images/8.jpg">
                                </div>
                                <div class="vira-card-content">
                                    <h3>我困了</h3>
                                    <p>
                                       ？？？
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                    <img class="img-responsive" src="x_assets/images/9.jpg">
                                </div>
                                <div class="vira-card-content">
                                    <h3>JMH</h3>
                                    <p>
                                        。。。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                    <img class="img-responsive" src="x_assets/images/10.jpg">
                                </div>
                                <div class="vira-card-content">
                                    <h3>zyb老师</h3>
                                    <p>
                                        老师好
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="subscribe section bg-img">
                <div class="container">
                    <!--<div class="row">
                        <div class="col-sm-12">
                            <p>Subscribe to our newsletter to get update</p>
                            <form class="form-inline">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="user-email" placeholder="Write your email here....">
                                </div>
                                <button type="submit" class="btn vira-btn">Send me</button>
                            </form>
                        </div>
                    </div>-->
                </div>
            </section>
            <section id="contact" class="contact section">
                <div class="container">
                    <h2 class="title">联系我们</h2>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                        <span class="fa fa-map-o" aria-hidden="true"></span>
                                </div>
                                <div class="vira-card-content">
                                    <h3>地址</h3>
                                    <p>
                                        福建省福州市闽侯县福州大学
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                        <span class="fa fa-phone" aria-hidden="true"></span>
                                </div>
                                <div class="vira-card-content">
                                    <h3>电话</h3>
                                    <p>
                                        12345678901
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                        <span class="fa fa-paper-plane" aria-hidden="true"></span>
                                </div>
                                <div class="vira-card-content">
                                    <h3>邮箱</h3>
                                    <p>
                                        wokunle@gmail.com
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <footer class="footer">
                <div class="container">

                </div>
            </footer>
        </div>

        <script src="x_assets/js/jquery-3.1.1.js"></script>
        <script src="x_assets/js/bootstrap.min.js"></script>
        <script src="x_assets/js/owl.carousel.min.js"></script>
        <script src="https://use.fontawesome.com/55b73bf748.js"></script>
        <script src="x_assets/js/jquery.magnific-popup.js"></script>
        <script src="x_assets/js/script.js"></script>
    </body>
</html>
