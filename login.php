<?php
include 'connect.php';
session_start();

if(isset($_POST['submit'])){

    $first_name = $_POST['first_name'];
    $password = $_POST['password'];

    if(!empty($first_name) && !empty($password)){
        $sql ="SELECT * FROM pro_table WHERE first_name = '$first_name' AND password = '$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        if($result->num_rows > 0 && $row ["user_type"] == "admin"){
            // echo 'found';
            $_SESSION['login'] = "login success" ;
            header ('location:admin.php');

        }elseif($result->num_rows > 0 && $row ["user_type"] == "user"){
            // echo 'found';
            $_SESSION['login'] = "login success" ;
            header ('location:welcome.php');

        }
        else{
        //   $_SESSION['login'] = "login success" ;
            echo 'not found';
            // echo $sql;


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
    <h2>Login</h2>
    <form action="#" method= "post">
      <div class="input-box">
        <input type="text" placeholder="Username" required name = "first_name">
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" required name = "password">
      </div>
      <div class="input-box button">
        <input type="Submit" value="Login" name = "submit">
      </div>
      <div class="text">
        <h3>Not have an account? <a href="create.php">Create</a></h3>
      </div>
    </form>
  </div>
</body>
</html>