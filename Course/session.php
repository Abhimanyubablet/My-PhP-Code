<?php
session_start();
include_once "connection.php";

if(isset($_POST["save"]))
{
    extract ($_POST);
    $Email=$_POST['Email'];
    $sql=mysqli_query($conn,"SELECT * FROM user2 WHERE  ( Email='$Email' OR UserId = '$Email') and Pass= '$Pass' ");
    
    $row=mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["Id"]=$row["Id"];
        $_SESSION["Name"]=$row["Name"];
        $_SESSION["Email"]=$row["Email"];
        // $_SESSION['IS_LOGIN']='yes';
        // $_SESSION['start'] = time();
        header("Location:test.php");
        echo "success";
    }
    else{
        echo "invalid";
    }
}
?>
