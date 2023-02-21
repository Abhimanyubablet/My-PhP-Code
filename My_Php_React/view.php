<?php

header('Access-Control-Allow-Origin: * ');
header('Access-Control-Allow-Methods : GET,POST ');
header('Access-Control-Allow-Headers : X-Requested-With ');


include_once "connection.php";
$sql=mysqli_query($conn,"SELECT * FROM student");

$mysqli=mysqli_query($conn,$sql);

$json_data=array();

while($row=mysqli_fetch_assoc($mysqli))
{
    $json_data[]=$row;
}
echo json_encode(['result'=>$json_data]);
?>

