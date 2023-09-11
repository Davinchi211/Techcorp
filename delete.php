<?php
    include('connect.php');
    $con = connection();

    $id = $_GET['id'];
    $sql = "DELETE FROM empleados WHERE id='$id'";
    $query = mysqli_query($con,$sql);
    if($query){
        Header("Location: index.php");
    }
?>