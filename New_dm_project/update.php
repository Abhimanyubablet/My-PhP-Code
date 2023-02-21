
<?php
include_once "Connection.php";
if(count($_POST)>0){
    mysqli_query($conn,"UPDATE district SET
       Id='".$_POST["Id"]."',
       D_Name='".$_POST["D_Name"]."',
       D_Population='".$_POST["D_Population"]."',
       No_Of_Blocks='".$_POST["No_Of_Blocks"]."',
       No_Of_Panchyats='".$_POST["No_Of_Panchyats"]."',
       No_Of_Villages='".$_POST["No_Of_Villages"]."',
       User_Id='".$_POST["User_Id"]."',
      
       Pass='".$_POST["Pass"]."'

       WHERE Id='".$_GET ["Id"] ."'");

       $m=header("Location:Login.html");
}
   $result=mysqli_query($conn,"SELECT * FROM district  WHERE Id= '".$_GET["Id"] ."'");

   $row=mysqli_fetch_array($result);
?>
Image="$update_filename"

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
                <td>D_Name</td>
                <td><input name="D_Name" type="text" value="<?php echo $row["D_Name"]; ?>"></td>
                 </tr>

                 <tr>
                 <td>D_Population</td> 
                 <td><input name="D_Population" type="text" value="<?php echo $row["D_Population"]; ?>"></td>
                 </tr>

                <tr>
                <td>No_Of_Blocks</td>
                <td><input name="No_Of_Blocks" type="text" value="<?php echo $row["No_Of_Blocks"]; ?>"></td>
                </tr>

                <tr>
                <td>No_Of_Panchyats</td>
                <td><input name="No_Of_Panchyats" type="text" value="<?php echo $row["No_Of_Panchyats"]; ?>"></td>
                </tr>
                
               <tr>
               <td>No_Of_Villages</td>
               <td><input name="No_Of_Villages" type="text" value="<?php echo $row["No_Of_Villages"]; ?>"></td>
               </tr>

               <tr>
               <td>User_Id</td>
               <td><input name="User_Id" type="text" value="<?php echo $row["User_Id"]; ?>"></td>
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