<?php
  include_once 'db_connect.php';
  if(isset($_POST['submit'])){
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

   

    $sql="INSERT INTO user( u_name, address, age, gender, mobile_number, email_id, password,image)
         VALUES ('$u_name','$address','$age','$gender','$mobile_number','$email_id','$password','$pic')";
     if(mysqli_query($conn,$sql)){
        echo "data is inert";
     } 
     else{
        echo "error";
     }   
  }
  mysqli_close($conn);
?>