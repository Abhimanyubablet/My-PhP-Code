<?php
  include_once 'db_connect.php';
  $sql="SELECT * FROM user";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
     echo "<table border='10px'> 
     
       <tr>
       <th>USER ID</th>
       <th>USER NAME</th>
       <th>USER ADDRESS</th>
       <th>USER AGE</th>
       <th>USER GENDER</th>
       <th>USER MOBILE NUMBER</th>
       <th>USER EMAIL ID</th>
       <th>USER PASSWORD</th>
       <th>USER IMAGE</th>
       <th>DELETE</th>
       <th>UPDATE</th>
       </tr>";
   while($row=mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" .$row['u_id'] . "</td>";
    echo "<td>" .$row['u_name'] . "</td>";
    echo "<td>" .$row['address'] . "</td>";
    echo "<td>" .$row['age'] . "</td>";
    echo "<td>" .$row['gender'] . "</td>";
    echo "<td>" .$row['mobile_number'] . "</td>";
    echo "<td>" .$row['email_id'] . "</td>";
    echo "<td>" .$row['password'] . "</td>";
    echo "<td><img src='" . $row['image'] . "'height='100px' width='100px'></td>";
    echo "<td><a href='user_delete.php?u_id=" .$row['u_id'] ."'>DELETE</a></td>";
    // echo "<td><a href='DELETE.PHP?id=" .$row['id'] . "'>DELETE</a></td>";
    echo "<td><a href='user_update_form.php?u_id=" .$row['u_id'] ."'>UPDATE</a></td>";
   } }
 else{
    echo "Error";
 }
 mysqli_close($conn);


?>