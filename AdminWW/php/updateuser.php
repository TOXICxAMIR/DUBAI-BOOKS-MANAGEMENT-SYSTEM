<?php

require_once('cons.php');

function update_user(){
  global $conn;
     $sql = "SELECT * FROM users ";
     $result = mysqli_query($conn, $sql);
     $final = mysqli_num_rows($result);
     if($final > 0){
     while ($row=mysqli_fetch_array($result)) {
       $id =  $row['id'];
       $name =  $row['name'];
       $address = $row['address'];
       $gender = $row['gender'];
       $phone_number = $row['phone_number'];
       $email = $row['email'];
       $username = $row['username'];
       
             
       echo "<tr>
      <form method='post' action='adminupdateuser.php'>
       <td><input type='text' name='id' value='$id' size='3' readonly >  </td>
      <td><input type='text' name='name' value='$name' size='3' readonly >  </td>
      <td><input type='text' name='address' value='$address'  size='7'>  </td>
      <td><input type='text' name='gender' value='$gender'  size='8'>  </td>
      <td><input type='text' name='phone_number' value='$phone_number'  size='8'>  </td>
      <td><input type='text' name='email' value='$email'  size='8'>  </td>
      <td><input type='text' name='username' value='$username'  size='8'>  </td>username
       <td><input type='submit' name='update'  class='btn btn-danger' value='Update'>  </td> 
     </form>
             
    </tr>";
     }
}else{
      echo "<script>alert('The record cant be found')</script>";
      //echo "<script>window.open('patientpanel.php', '_self')</script>";
    }
  }
?>