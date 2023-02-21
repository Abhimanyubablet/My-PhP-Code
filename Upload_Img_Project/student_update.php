<?php
  include_once 'connection.php';
   $Id=$_POST['Id'];
   $Name=$_POST['Name'];
   $file=$_FILES['photo'];



   
$fille_name=$file['name'];
$fille_size=$file['size'];
$fille_tmp=$file['tmp_name'];
$fille_type=$file['type'];
$pic="upload/".$fille_name;
move_uploaded_file($fille_tmp,$pic);

$sql="UPDATE `mystudent` SET `Name`='$Name',`Image`='$pic' WHERE `Id`='$Id'";
  
if(mysqli_query($conn,$sql)){
    echo "
    update is successful";
    header('location:Home.php');
}

else{
    echo "NOT UPDATE";
}

mysqli_close($conn);

?>