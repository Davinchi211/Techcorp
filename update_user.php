<?php
    session_start();
    include('connect.php');

    if(isset($_POST['updatedata'])){
    $con = connection();
    
    $id = $_POST['id'];
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