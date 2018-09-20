<?php  

$id = $_GET['id'];

include_once "function.php";

$sql = "SELECT * FROM own WHERE id = $id";

$result = mysqli_query($con,$sql);
// var_dump($result);//Object of class mysqli_result could not be converted to string in 

while ($row = mysqli_fetch_array($result)) {
    $data = array();
    $data['stuID'] = $row['stuID'];
    $data['img'] = $row['img'];
    $data['title'] = $row['title'];
}


$json = json_encode($data);

echo $json;

mysqli_close($con);