<?php
session_start();
// $_SESSION['LAST_ACTIVE_TIME']=time();
echo "<b> Welcome in school </b>" . $_SESSION["Name"] ." . ";
if (!isset($_SESSION['Name'])) {
  echo "Please Login again";
  echo "<a href='http://localhost/test.php/login.php'>Click Here to Login</a>";
}
else {
  $now = time(); 

  if ($now > $_SESSION['expire']) {
      session_destroy();
      echo "Your session has expired! <a href='login.php'>Login here</a>";
  }
}


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
   date_default_timezone_set('Asia/Kolkata');
  echo $_SESSION['Name'];
   echo "<a href='logout.php'> Log out.</a>" . "<br>" ;
   
   echo "Run time For Execution of session expire = " . date("h:i:sa e");
 ?>
 <br>
 
<a href="profile.php">
    <button>Update Profile</button>
</a>
</div>
  </fieldset>
</body>
</html>