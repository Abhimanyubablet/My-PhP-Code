
<?php
include_once "Connection.php";
if(count($_POST)>0){
    mysqli_query($conn,"UPDATE health_data SET
       Id='".$_POST["Id"]."',
       Name='".$_POST["Name"]."',
       Mobile='".$_POST["Mobile"]."',
       Adhar='".$_POST["Adhar"]."',
       Age='".$_POST["Age"]."',
       Email='".$_POST["Email"]."',
       Address='".$_POST["Address"]."',
       Health_problem='".$_POST["Health_problem"]."',
       Pass='".$_POST["Pass"]."'

       WHERE Id='".$_GET ["Id"] ."'");

       $m=header("Location:Login.html");
}
   $result=mysqli_query($conn,"SELECT * FROM health_data  WHERE Id= '".$_GET["Id"] ."'");

   $row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html >
<head>
    
    <title>Document</title>
</head>
<body> 
      
    <table style="width: 18%; margin: auto; margin-top: 100px;" border="2">
    
        <form  action="" method="post">
            <?php
            if(isset($m)){
                echo $m;
            }
            ?> 


                <tr>
                <td>Id</td>
                <td><input name="Id" type="text" value="<?php echo $row["Id"]; ?>"></td>
                </tr>

                <tr>
                <td>Name</td>
                <td><input name="Name" type="text" value="<?php echo $row["Name"]; ?>"></td>
                 </tr>

                 <tr>
                 <td>Mobile</td> 
                 <td><input name="Mobile" type="text" value="<?php echo $row["Mobile"]; ?>"></td>
                 </tr>

                <tr>
                <td>Adhar</td>
                <td><input name="Adhar" type="text" value="<?php echo $row["Adhar"]; ?>"></td>
                </tr>

                <tr>
                <td>Age</td>
                <td><input name="Age" type="text" value="<?php echo $row["Age"]; ?>"></td>
                </tr>
                
               <tr>
               <td>Email</td>
               <td><input name="Email" type="text" value="<?php echo $row["Email"]; ?>"></td>
               </tr>

               <tr>
               <td>Address</td>
               <td><input name="Address" type="text" value="<?php echo $row["Address"]; ?>"></td>
               </tr>

                <tr>
                <td>Health_problem</td>
                <td><input name="Health_problem" type="text" value="<?php echo $row["Health_problem"]; ?>"></td>
                </tr>

                <tr>
                <td>Password</td>
                <td><input name="Pass" type="text" value="<?php echo $row["Pass"]; ?>"></td> 
                </tr>
               
                <tr>
                <td>Update</td> 
                <td><input type="submit"></td>
                </tr>
                
        </form>
    </table>
</body>
</html>