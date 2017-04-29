<?php
    header('Content-Type: text/html; charset=UTF-8');
    $name=$_COOKIE['name'];
    setcookie('name',$name,time()-1000);
    echo "<script>alert('注销成功');</script>";
    header("refresh:0.1;url=http://fzuwise.applinzi.com/STEAM_HOTEL/index.php");
?>
