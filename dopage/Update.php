
<?php
include_once "collection.php";
if(count($_POST)>0){
    mysqli_query($conn,"UPDATE abhi SET
       id='".$_POST["id"]."',
       name='".$_POST["name"]."',
       email='".$_POST["email"]."',
       contact='".$_POST["contact"]."',
       adhar='".$_POST["adhar"]."',
       pan='".$_POST["pan"]."'

       WHERE id='".$_GET ["tt"] ."'");

       $m=header("Location:Input.php");
}
   $result=mysqli_query($conn,"SELECT * FROM abhi  WHERE id= '".$_GET["tt"] ."' ");

   $row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <table border="2">
        <form action="" method="post">
            <?php
            if(isset($m)){
                echo $m;
            }
            ?>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Contact</td>
                <td>Adhar</td>
                <td>Pan</td>
                
                <td>Update</td>
            </tr>
           
                 <tr>
                    <td><input name="id" type="text" value="<?php echo $row["id"]; ?>"></td>
                    <td><input name="name" type="text" value="<?php echo $row["name"]; ?>"></td>
                    <td><input name="email" type="text" value="<?php echo $row["email"]; ?>"></td>
                    <td><input name="contact" type="text" value="<?php echo $row["contact"]; ?>"></td>
                    <td><input name="adhar" type="text" value="<?php echo $row["adhar"]; ?>"></td>
                    <td><input name="pan" type="text" value="<?php echo $row["pan"]; ?>"></td>
                    <td><input type="submit"></td>
                 </tr>
                
        </form>
    </table>
</body>
</html>