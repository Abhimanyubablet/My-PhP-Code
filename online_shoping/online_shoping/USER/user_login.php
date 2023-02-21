<?php
 include_once 'db_connect.php';
 $u_name=$_POST['u_name'];
 $password=$_POST['password'];
 $sql="SELECT * FROM user WHERE u_name='$u_name' AND password='$password'";
 $result =mysqli_query($conn,$sql);
 $num=mysqli_num_rows($result);
 if($num==1){
    $row=mysqli_fetch_assoc($result);
    $login=true;
    session_start();
    $_SESSION['u_name']=$u_name;
    $_SESSION['password']=$password;
    $_SESSION['image']=$pic;
    header('location:online_shoping.php');
 }
 else{
    echo "error";
 }


?>