<?php
session_start();
$server="localhost";
$user="root";
$password="";
$dbname="patna";

$conn=mysqli_connect($server,$user,$password,$dbname);
 if(!$conn){
    echo "Database is not connected";
 }

 if(isset($_POST['save']))
 {
    extract($_POST);
    $sql=mysqli_query($conn,"SELECT * FROM science WHERE  Email='$Email' and Pass='$Pass'");
    $row=mysqli_fetch_array($sql);
    if(is_array($row))
    {   
        $_SESSION["Id"]=$row["Id"];
        $_SESSION["Email"]=$row["Email"];
        $_SESSION["Pass"]=$row["Pass"];
        header("Location:test.php");
    }
    else{
        echo "invalid";
    }
 }
?>