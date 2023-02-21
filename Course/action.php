<?php
  include_once 'connection.php';
   $Id=$_POST['Id'];
   $Name=$_POST['Name'];
   $Email=$_POST['Email'];
   $Pass=$_POST['Pass'];
   $Mobile=$_POST['Mobile'];
   $file=$_FILES['photo'];
   $UserId=$_POST['UserId'];



   
$fille_name=$file['name'];
$fille_tmp=$file['tmp_name'];
$pic="upload/".$fille_name;
move_uploaded_file($fille_tmp,$pic);

$sql="UPDATE `user2` SET `Name`='$Name',`Email`='$Email',`Pass`='$Pass',`Mobile`='$Mobile',`Image`='$pic',`UserId`='$UserId' WHERE `Id`='$Id'";
  
if(mysqli_query($conn,$sql)){
    echo "
    update is successful";
    header('location:Login.html');
}

else{
    echo "NOT UPDATE";
}

mysqli_close($conn);

?>