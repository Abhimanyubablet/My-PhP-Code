<?php
include_once "connection.php";
if(count($_POST)>0){
    mysqli_query($conn,"UPDATE carmodel SET
    id='".$_POST['id']."',
    mfg='".$_POST["mfg"]."',
    mfg_date='".$_POST['mfg_date']."',
    product='".$_POST['product']."',
    p_model='".$_POST['p_model']."',
    seller='".$_POST['seller']."',
    customer='".$_POST['customer']."',
    c_id='".$_POST['c_id']."',
    pan='".$_POST['pan']."',
    p_date='".$_POST['p_date']."' 

    WHERE id='".$_GET['id']."'");

    $m=header("Location:Input.php");
}

$result = mysqli_query($conn, "SELECT * FROM carmodel WHERE id='".$_GET['id']."'");

$row= mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <table border="2">
        <form method="post" action="">
            <?php
            if(isset($m)){
                echo $m;
            }
            ?>
            <tr>
                <td>Id</td>
                <td>Mfg</td>
                <td>Mfg_Date</td>
                <td>Product</td>
                <td>P_model</td>
                <td>Seller</td>
                <td>Customer</td>
                <td>C_id</td>
                <td>Pan</td>
                <td>P_date</td>
                <td>Update</td>
            </tr>
            
                   <tr>
                    <td><input name="id" type="text" value="<?php echo $row['id']; ?>" ></td>
                    <td><input name="mfg" type="text" value="<?php echo $row['mfg'];?>" ></td>
                    <td><input name="mfg_date" type="text" value="<?php echo $row['mfg_date'];?>" ></td>
                    <td><input name="product" type="text" value="<?php echo $row['product'];?>" ></td>
                    <td><input name="p_model" type="text" value="<?php echo $row['p_model']; ?>" ></td>
                    <td><input name="seller" type="text" value="<?php echo $row['seller'];?>" ></td>
                    <td><input name="customer" type="text" value="<?php echo $row['customer']; ?>" ></td>
                    <td><input name="c_id" type="text" value="<?php echo $row['c_id'];?>" ></td>
                    <td><input name="pan" type="text" value="<?php echo $row['pan'];?>" ></td>
                    <td><input name="p_date" type="text" value="<?php echo $row['p_date'];?>" ></td>
                    <td><input type="submit"></td>


                   </tr>
                
        </form>
    </table>
</body>
</html>