<?php
$server="localhost";
$user="root";
$password="";
$dbname="patna";

$Id=$_POST["Id"];
$Name=$_POST["Name"];
$Email=$_POST["Email"];
$Pass=$_POST["Pass"];
$Contact=$_POST["Contact"];
$Address=$_POST["Address"];

$conn=mysqli_connect($server,$user,$password,$dbname);

{
    $sql="INSERT INTO science VALUES('$Id','$Name','$Email','$Pass','$Contact','$Address')";
    $result=mysqli_query($conn,$sql);
}
if($result){
    header ("Location:Login.html");
}
?>