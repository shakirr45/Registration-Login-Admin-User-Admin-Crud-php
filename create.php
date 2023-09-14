<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($mobile) && !empty($password) && !empty($confirm_password)){
        // echo "ok";
        if($password === $confirm_password){
            // echo "ok";
            $sql = "INSERT INTO pro_table (first_name,last_name,email,mobile,password,confirm_password,user_type) VALUES('$first_name','$last_name','$email','$mobile','$password','$confirm_password','user') ";
            if($conn->query($sql) == TRUE){
                // echo "user created";
                header ('location:login.php?usercreated');
            }

        }else{
            echo "passward not match";
        }

    }
}
?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form in HTML CSS | CodingLab </title> 
    <link rel="stylesheet" href="style.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Registration Table</h2>
    <form action="#" method= "post">
      <div class="input-box">
        <input type="text" placeholder="Enter your first name" required name="first_name" >
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your last name" required name="last_name">
      </div>
      <div class="input-box">
        <input type="email" placeholder="Enter your email" required name="email">
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your phone" required name="mobile">
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" required name="password">
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" required name="confirm_password">
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now" name = "submit">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>