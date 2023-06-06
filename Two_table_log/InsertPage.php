<?php
$server="localhost";
$user="root";
$password="";
$dbname="join_student";

$Id=$_POST["Id"];
$Name=$_POST["Name"];
$Email=$_POST["Email"];
$UserId=$_POST["UserId"];
$Pass=$_POST["Pass"];

$conn=mysqli_connect($server,$user,$password,$dbname);
{
    $sql1="INSERT INTO tab1_student VALUES ('$Id','$Name','$Email','$UserId','$Pass') " ;
   
    $query=mysqli_query($conn,$sql1);
}
if($query)
{   
    $sql2="INSERT INTO tab2_log VALUES ('$Email','$UserId','$Pass') " ;
    $result=mysqli_query($conn,$sql2);
    header("Location:Sign_up.html");
}
?>