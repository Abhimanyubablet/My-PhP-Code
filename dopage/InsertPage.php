<?php
$server="localhost";
$user="root";
$pass="";
$dbname="aimit";

$id=$_POST["id"];
$name=$_POST["name"];
$email=$_POST["email"];
$contact=$_POST["contact"];
$adhar=$_POST["adhar"];
$pan=$_POST["pan"];

$conn=mysqli_connect($server,$user,$pass,$dbname);

{
    $sql="INSERT INTO abhi VALUES('$id','$name','$email','$contact','$adhar','$pan')";

    $result=mysqli_query($conn,$sql);
}
if($result){
    header("Location:Input.php");
}
?>