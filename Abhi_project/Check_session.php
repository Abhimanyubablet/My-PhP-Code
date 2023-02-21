<?php
session_start();
include_once "Connection.php";

if(isset($_POST["save"]))
{
    extract ($_POST);
    $sql=mysqli_query($conn,"SELECT * FROM health_data WHERE  Name='$Name' and Pass= '$Pass' ");
    $row=mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["Id"]=$row["Id"];
        $_SESSION["Name"]=$row["Name"];
        $_SESSION["Pass"]=$row["Pass"];
        $_SESSION['IS_LOGIN']='yes';
        $_SESSION['start'] = time();
        header("Location:test_dashboard.php");
    }
    else{
        echo "invalid";
    } 
}
?>