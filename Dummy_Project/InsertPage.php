<?php
$server="localhost";
$user="root";
$pass="";
$dbname="school";

$Id=$_POST["Id"];
$Name=$_POST["Name"];
$Email=$_POST["Email"];
$Adhar=$_POST["Adhar"];
$Contact=$_POST["Contact"];

$conn=mysqli_connect($server,$user,$pass,$dbname);
{
    $sql="INSERT INTO student_details VALUES ('$Id','$Name','$Email','$Adhar','$Contact')";
    $result=mysqli_query($conn,$sql);
}
if($result){
   header("Location:Home.html");
}
?>