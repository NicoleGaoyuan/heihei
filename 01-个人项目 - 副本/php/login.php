<?php
header("content-Type:text/html;charset=utf-8");
$username=$_GET["userName"];
$pwd=$_GET["psws"];
include_once 'function.php';
$sqlStr1=<<<sql2
    INSERT INTO login (username,psws) values ("$username","$pwd");
sql2;
$res2=mysqli_query($con,$sqlStr1);
if (!$res2) {
    die(mysqli_error($son));
}else{
    echo "1";
}
mysqli_close($con);
