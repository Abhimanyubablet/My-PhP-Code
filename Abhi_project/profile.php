<?php
session_start();
include_once "connection.php";
include_once "new_page.php";
$sql=mysqli_query($conn,"SELECT * FROM health_data WHERE Id= '".$_SESSION["Id"]."' ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>
<fieldset  style="width: 20%; margin: auto; margin-top: 70px;">
    <form  action="" method="post">
     Tap here for
      <?php
      $i=0;
      while($row=mysqli_fetch_array($sql))
      {
        ?>
           <tr>
            <td><a href="update.php ?  Id= <?php echo $row["Id"] ; ?> " >update </a></td>
           </tr>
        <?php
        $i=0;
      }
      ?>.
    </form>
    </fieldset>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
    setInterval(function(){
   check_user();
   },2000);

  function check_user(){
 jQuery.ajax({
  url:'new_page.php',
  type:'post',
  data:'type=ajax',
  success:function(result){
    if(result=='logout'){window.location.href='logout.php';}}});
 }
</script>
</body>
</html>