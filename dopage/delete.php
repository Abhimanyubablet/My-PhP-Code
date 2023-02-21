<?php
include_once "collection.php";

$sql=mysqli_query($conn,"DELETE FROM abhi WHERE id='".$_GET["id"]."'");
if($sql){
    header("Location:Input.php");
}
?>