<?php
session_start();
// include_once "new_page.php";
echo "<b> Welcome  </b>" . $_SESSION["Name"] ." . ";
?>


<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>
  <fieldset style="width: 27%; ">
    <legend>User Buttton</legend>
    <div>
<h1></h1>
<?php
  
  echo $_SESSION['Name'] ." From Aimit ";
   echo "<a href='logout.php'> Log out.</a>" . "<br>" ;
   
   
 ?>
 <br>
 
<a href="Profile.php">
    <button>Update</button>
</a>
</div>
  </fieldset>

  <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
 } -->

</script>
</body>
</html>