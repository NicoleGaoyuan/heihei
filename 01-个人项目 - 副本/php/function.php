<?php
    header("content-Type:text/html;charset=utf-8");
    define("HOST","localhost");
    define("USERNAME","root");
    define("PWD","");
    define("DBNAME","cangku");
    define("CHARSET","utf8");//设置数据库的编码格式
    $con = mysqli_connect(HOST,USERNAME,PWD,DBNAME)or die("数据库连接失败，<span style='color:red'>".mysqli_error()."</span>");
    mysqli_set_charset($con,CHARSET);
    
    