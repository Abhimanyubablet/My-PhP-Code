<?php
session_start();
include_once "connection.php";

if(isset($_POST["save"]))
{
    extract ($_POST);
    $sql=mysqli_query($conn,"SELECT * FROM district WHERE  User_Id='$User_Id' and Pass= '$Pass' ");
    $row=mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["Id"]=$row["Id"];
        $_SESSION["D_Name"]=$row["D_Name"];
        $_SESSION["Pass"]=$row["Pass"];
        $_SESSION['IS_LOGIN']='yes';
        $_SESSION['start'] = time();
        header("Location:test.php");
    }
    else{
        echo "invalid";
    }
}
?>
