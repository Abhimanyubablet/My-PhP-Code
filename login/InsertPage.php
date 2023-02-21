<?php

$server="localhost";
$user="root";
$pass="";
$dbname="college";

$user_id=$_POST["user_id"];
$password=$_POST["password"];

$conn=mysqli_connect($server,$user,$pass,$dbname);
{
    $sql="INSERT INTO student VALUES('$user_id','$password') ";
    
    $result=mysqli_query($conn,$sql);
}
if($result){
    echo "success";
}

?>