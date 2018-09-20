<?php
header("content-Type:text/html;charset=utf-8");//HTML页面的编码格式

include_once "function.php";

    // 查询
    $seltStr = "SELECT * FROM message";
    $result = mysqli_query($con,$seltStr);         
    $arr = array();
    while ($row = mysqli_fetch_array($result)) {
        $data = array();
        $data['username'] = $row['username'];
        $data['title'] = $row['title'];
        $data['youX'] = $row['youX'];
        array_push($arr,$data);
    }	
    $json = json_encode(array("data"=>$arr));	
    echo $json;
    mysqli_close($con);
