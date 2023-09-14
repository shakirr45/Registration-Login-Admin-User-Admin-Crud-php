
<?php
include 'connect.php';
?>
</body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <h1>admin</h1>
    <?php
session_start();

if (!empty($_SESSION['login'])){
    echo $_SESSION['login'];
}else{
    header('location:login.php');
}

// echo $_SESSION['login'];
?>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">sl No</th>
      <th scope="col">First Name / Username</th>
      <th scope="col">Last name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">User Type</th>

    </tr>
  </thead>
  <tbody>

<?php

  $display_data = mysqli_query($conn,"select * from `pro_table`");
//   $number_rows = mysqli_num_rows($display_data);
//   echo $number_rows;

if(mysqli_num_rows($display_data) > 0){
    while($row = mysqli_fetch_assoc($display_data)){
        ?>
        

        <tr>
      <th><?php echo $row['id']?></th>
      <td><?php echo $row['first_name']?></td>
      <td><?php echo $row['last_name']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['mobile']?></td>
      <td><?php echo $row['password']?></td>
      <td><?php echo $row['user_type']?></td>


      <td>
        <a href="edit.php? edit= <?php echo $row['id']?>">edit</a>
        <a href="delete.php? delete= <?php echo $row['id']?>">delete</a>


      </td>
    </tr>



        <?php
    }
}

?>

    
  </tbody>
</table>
</div>



<h3><a href="logout.php">logout</a></h3>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>