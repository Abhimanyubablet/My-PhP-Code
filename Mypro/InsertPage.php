<?php
$server="localhost";
$user="root";
$password="";
$dbname="school";

$Id=$_POST["Id"];
$Name=$_POST["Name"];
$Email=$_POST["Email"];
$Pass=$_POST["Pass"];

$conn=mysqli_connect($server,$user,$password,$dbname);

{
    $sql="INSERT INTO student VALUES ('$Id','$Name','$Email','$Pass')";
    $result=mysqli_query($conn,$sql);
}
if($result){
    echo "success";
}
?>