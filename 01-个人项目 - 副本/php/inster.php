<?php
header("content-Type:text/html;charset=utf-8");//HTML页面的编码格式

$stuID = $_GET['stuID'];
$img = $_GET['img'];
$title = $_GET['title'];

include_once "function.php";

$sqlStr1=<<<sql2
INSERT INTO own (stuID,img,title) VALUES ($stuID,"$img","$title");
sql2;
$res2 = mysqli_query($con,$sqlStr1);

if($res2){
    echo "插入成功";
}
else{
    die();
}
mysqli_close($con);