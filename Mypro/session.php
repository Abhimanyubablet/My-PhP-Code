<?php
session_start();
include_once "connection.php";

if(isset($_POST['save']))
{
    extract($_POST);
    $sql=mysqli_query($conn,"SELECT * FROM student WHERE Email='$Email' and Pass='$Pass'") ;
    $row=mysqli_fetch_array($sql);
    if(is_array($row))
    {   
        $_SESSION["Id"]=$row["Id"];
        $_SESSION["Email"]=$row["Email"];
        $_SESSION["Pass"]=$row["Pass"];

        header("Location:Test.php");
    }
    else
    {
        echo "invalid";
    }
}
?>