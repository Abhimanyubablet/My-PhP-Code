<?php
include_once "Connection.php";

$Id=$_POST["Id"];
$Name=$_POST["Name"];
$files=$_FILES['Photo'];

$filename=$files['name'];
$filetmp=$files['tmp_name'];


    $destinationfile='image/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);

    $sql=mysqli_query($conn,"INSERT INTO student VALUES ('$Id','$Name','$destinationfile')");
    
    if($sql){
        header("Location:View.Php");
        // echo "success";
    }
    


?>