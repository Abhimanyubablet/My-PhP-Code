<?php
$server="localhost";
$user="root";
$pass="";
$dbname="showroom";

$id=$_POST["id"];
$mfg=$_POST["mfg"];
$mfg_date=$_POST["mfg_date"];
$product=$_POST["product"];
$p_model=$_POST["p_model"];
$seller=$_POST["seller"];
$customer=$_POST["customer"];
$c_id=$_POST["c_id"];
$pan=$_POST["pan"];
$p_date=$_POST["p_date"];

$conn=mysqli_connect($server,$user,$pass,$dbname);

{
    $sql="INSERT INTO carmodel VALUES('$id','$mfg','$mfg_date','$product','$p_model','$seller','$customer','$c_id',
    '$pan','$p_date')";
    $result=mysqli_query($conn,$sql);
}
if($result){
  header ("Location:Input.php");
}

?>