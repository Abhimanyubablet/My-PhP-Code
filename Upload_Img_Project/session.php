<?php
session_start();
include_once "connection.php";

if(isset($_POST["save"]))
{
    extract ($_POST);
    $sql=mysqli_query($conn,"SELECT * FROM mystudent WHERE  Id='$Id' and Name= '$Name' ");
    $row=mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["Id"]=$row["Id"];
        $_SESSION["Name"]=$row["Name"];
        $_SESSION['IS_LOGIN']='yes';
        $_SESSION['start'] = time();
        header("Location:test.php");
    }
    else{
        echo "invalid";
    }
}
?>
