<?php
include_once "connection.php";
$sql=mysqli_query($conn,"DELETE FROM carmodel WHERE id='".$_GET["id"]."'");
if($sql){
    header("Location:Input.php");
}
?>
