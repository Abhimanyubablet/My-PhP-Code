<?php
$server="localhost";
$user="root";
$password="";
$dbname="health";

$Id=$_POST["Id"];
$Name=$_POST["Name"];
$Mobile=$_POST["Mobile"];
$Adhar=$_POST["Adhar"];
$Age=$_POST["Age"];
$Email=$_POST["Email"];
$Address=$_POST["Address"];
$Health_problem=$_POST["Health_problem"];
$Pass=$_POST["Pass"];

$conn=mysqli_connect($server,$user,$password,$dbname);
{
    $sql="INSERT INTO health_data VALUES ('$Id','$Name','$Mobile','$Adhar','$Age','$Email','$Address','$Health_problem','$Pass')";
    $result=mysqli_query($conn,$sql);
}
if($result)
{
    header("Location:SignUp.html");
}
?>