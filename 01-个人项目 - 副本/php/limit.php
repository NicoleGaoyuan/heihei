<?php
$id=$_GET['p'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'cangku');
mysqli_query($con,'set names utf8');
$sql="SELECT * FROM own order by id asc limit $id,10";

$arr=array();
$result=mysqli_query($con,$sql);


while ($row = mysqli_fetch_array($result)) {
    $data=array();
    $data['stuID'] = $row['stuID'];
    $data['img'] = $row['img'];
    $data['title'] = $row['title'];
    array_push($arr,$data);
}
$json = json_encode(array('data' => $arr));

echo $json;
mysqli_close($con);
