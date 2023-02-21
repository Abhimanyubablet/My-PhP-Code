<?php
session_start();
include_once "new_page.php";

echo " <br> ". "<b> Welcome in school </b>" . $_SESSION["Name"] ." . ";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    
</head>
<body>
  <br>

  <fieldset style="width: 27%; ">
    <legend>User Buttton</legend>
    <div>
<h1></h1>
<?php
   date_default_timezone_set('Asia/Kolkata');
   echo $_SESSION['Name'] . "<b> you have logged in . </b>" ."<br>" ;
   
   echo "<br>" . " Your Exact login time = " . date("h:i:sa (e)");
 ?>
 <br>
 <br>
<a href="profile.php">
    <button>Update Profile</button>
</a>

<a href="logout.php">
    <button>Logout</button>
</a>
</div>
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