<?php
session_start();
include_once "connection.php";
echo "<b> Welcome  </b>" . $_SESSION["Email"] ." . ";
$sql=mysqli_query($conn,"SELECT * FROM user2 WHERE Id= '".$_SESSION["Id"]."' ");
?>


<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
    <link rel="stylesheet" href="test.css">
</head>
<body>
  <fieldset class="Field_style" style="width: 60%; ">
    <legend>User Buttton</legend>
    
<h1></h1>
<div class="Email_style">
<?php
  
  echo $_SESSION['Email'] ." From Aimit ";

 ?>
</div>
  
  <?php
      $i=0;
      while($row=mysqli_fetch_array($sql))
      {
        ?>
           <img class="test_img" src="<?php echo $row["Image"] ; ?>" alt="">
            
           <tr>
            <td>
              <p>For Changing some data visit <a href="update.php ?  Id= <?php echo $row["Id"] ; ?> " >update page </a> </p>
            </td>
           </tr>
        <?php
        $i=0;
      }
      ?>

 <?php
echo " For  <a href='logout.php'> Log out.</a>" . "<br>" ;
 ?>

<br>
<br>

<p>For more details visit <a href="View.php">View Page</a></p>
    </fieldset>
</body>
</html>