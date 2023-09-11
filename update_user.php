<?php
    session_start();
    include('connect.php');

    if(isset($_POST['update'])){
    $con = connection();
    
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $cargo = $_POST['cargo'];
    $salario = $_POST['salario'];
    $fecha_cont = $_POST['fecha_cont'];

    $sql = "UPDATE empleados SET nombre='$nombre' WHERE id='$id'";
    $query = mysqli_query($con,$query);
    if($query){
        Header("Location: index.php");
    }
}
?>