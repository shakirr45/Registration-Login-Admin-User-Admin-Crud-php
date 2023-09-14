<?php
include 'connect.php';
if(isset($_POST['submit_btn'])){
    $data_id = $_POST['data_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // if(!empty($data_id) && !empty($first_name) && !empty($last_name) && !empty($email) && !empty($mobile) && !empty($password) && !empty($confirm_password)){
    //     // echo "ok";
    //     if($password === $confirm_password){
    //         // echo "ok";
    //         $sql = "update `pro_table` set first_name = '$first_name',last_name = '$last_name',email= '$email',mobile = '$mobile',password = '$password',confirm_password = '$confirm_password' where id=$data_id";

    // $result = mysqli_query($conn,$sql);
    // if($result){
    //     header ('location:admin.php');
    // }


    //     }else{
    //         echo "passward not match";
    //     }

    // }
    if($password === $confirm_password){

        $sql = "update `pro_table` set first_name = '$first_name',last_name = '$last_name',email= '$email',mobile = '$mobile',password = '$password',confirm_password = '$confirm_password' where id=$data_id";
    // $sql = "update `crudtable` set name = '$name',email= '$email',address = '$address',password = '$password' where id=$data_id";
    $result = mysqli_query($conn,$sql);

    if($result){
        header ('location:admin.php');
    }

    }else{
        echo "not match";
    }
    


}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form in HTML CSS | CodingLab </title> 
    <link rel="stylesheet" href="style.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>

    <?php

    if(isset($_GET['edit'])){
        $edit_id = $_GET['edit'];
    $get_data = mysqli_query($conn,"Select * from `pro_table` where id = $edit_id");
    if(mysqli_num_rows($get_data) > 0){
        $fetch_data = mysqli_fetch_assoc($get_data);
    
    ?>

<form action="#" method= "post">
    <div class="input-box">
        <input type="hidden" placeholder="Enter your first name" required name="data_id" value = "<?php echo $fetch_data['id']?>" >
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your first name" required name="first_name" value = "<?php echo $fetch_data['first_name']?>" >
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your last name" required name="last_name" value = "<?php echo $fetch_data['last_name']?>">
      </div>
      <div class="input-box">
        <input type="email" placeholder="Enter your email" required name="email" value = "<?php echo $fetch_data['email']?>">
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your phone" required name="mobile" value = "<?php echo $fetch_data['mobile']?>">
      </div>
      <div class="input-box">
        <input type="text" placeholder="Create password" required name="password" value = "<?php echo $fetch_data['password']?>">
      </div>
      <div class="input-box">
        <input type="text" placeholder="Confirm password" required name="confirm_password" value = "<?php echo $fetch_data['confirm_password']?>">
      </div>
      <div class="input-box button">
        <input type="Submit" value="Update Now" name = "submit_btn">
      </div>
      <div class="text">
        <!-- <h3>Already have an account? <a href="login.php">Login now</a></h3> -->
      </div>
    </form>


    <?php
    }

    }
    
    ?>



  </div>
</body>
</html>