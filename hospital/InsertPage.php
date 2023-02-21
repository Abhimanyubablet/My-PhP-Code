<?php
$server="localhost";
$user="root";
$pass="";
$dbname="hospital";

$id=$_POST["id"];
$name=$_POST["name"];
$f_name=$_POST["f_name"];
$pin=$_POST["pin"];

$conn=mysqli_connect($server,$user,$pass,$dbname);
{
   $sql="INSERT INTO pasient VALUES ('$id','$name','$f_name','$pin') ";

   $result=mysqli_query($conn,$sql);
}
if($result){
    header("Location:Input.php");
}
?>