<?php
    include('connect.php');
    $con = connection();

    $name = $_POST['nombre'];
    $cargo = $_POST['cargo'];
    $salario = $_POST['salario'];
    $orinDate = date_create($_POST['fecha_cont']);
    $fech_cont = date_format($orinDate, 'Y-m-d');
    
    $sql = "INSERT INTO empleados (`nombre`,`cargo`,`salario`,`fecha_cont`) VALUES ('$name','$cargo','$salario','$fech_cont')";
    $query = mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>