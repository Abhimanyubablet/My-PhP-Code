<?php
  include_once 'db_connect.php';
   $u_id=$_POST['u_id'];
   $u_name=$_POST['u_name'];
   $address=$_POST['address'];
   $age=$_POST['age'];
   $gender=$_POST['gender'];
   $mobile_number=$_POST['mobile_number'];
   $email_id=$_POST['email_id'];
   $password=$_POST['password'];

   $file=$_FILES['photo'];



$fille_name=$file['name'];
$fille_size=$file['size'];
$fille_tmp=$file['tmp_name'];
$fille_type=$file['type'];
$pic="image/".$fille_name;
move_uploaded_file($fille_tmp,$pic);

$sql="UPDATE `user` SET `u_name`='$u_name',`address`='$address',`age`='$age',`gender`='$gender',`mobile_number`='$mobile_number',`email_id`='$email_id',`password`='$password',`image`='$pic' WHERE `u_id`='$u_id'";
  
if(mysqli_query($conn,$sql)){
    echo "
    update is successful";
    header('location:user_view.php');
}

else{
    echo "NOT UPDATE";
}
mysqli_close($conn);

?>