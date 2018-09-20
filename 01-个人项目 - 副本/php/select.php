<?php
header("content-Type:text/html;charset=utf-8");//HTML页面的编码格式

include_once "function.php";

    // 查询
    $seltStr = "SELECT * FROM own";
    $result = mysqli_query($con,$seltStr);         
    $arr = array();
    while ($row = mysqli_fetch_array($result)) {
        $data = array();
        $data['stuID'] = $row['stuID'];
        $data['img'] = $row['img'];
        $data['title'] = $row['title'];
        array_push($arr,$data);
    }	
    $json = json_encode(array("data"=>$arr));	
    echo $json;
    mysqli_close($con);
