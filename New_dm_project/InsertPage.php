<?php
$server="localhost";
$user="root";
$password="";
$dbname="state";

$Id=$_POST["Id"];
$D_Name=$_POST["D_Name"];
$D_Population=$_POST["D_Population"];
$No_Of_Blocks=$_POST["No_Of_Blocks"];
$No_Of_Panchyats=$_POST["No_Of_Panchyats"];
$No_Of_Villages=$_POST["No_Of_Villages"];
$User_Id=$_POST["User_Id"];
$Pass=$_POST["Pass"];

$conn=mysqli_connect($server,$user,$password,$dbname);
{
    $sql="INSERT INTO district VALUES ('$Id','$D_Name','$D_Population','$No_Of_Blocks','$No_Of_Panchyats','$No_Of_Villages','$User_Id','$Pass')";
    $result=mysqli_query($conn,$sql);
}
if($result)
{
    header("Location:Sign_up.html");
}
?>