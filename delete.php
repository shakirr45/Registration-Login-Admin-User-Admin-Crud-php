<?php
include 'connect.php';
if(isset($_GET['delete'])){

    $delete_id = $_GET['delete'];

    $delete_data = mysqli_query($conn, "Delete from `pro_table` where id = $delete_id") or die ("query faild");
    if($delete_data){
        header ('location:admin.php');

    }else{
        header ('location:admin.php');
    }

}
?>