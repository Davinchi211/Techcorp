<?php
    include('connect.php');
    $con = connection();
    $sl = "SELECT * FROM empleados";
    $query = mysqli_query($con,$sl);
    $num_rows = mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechCorp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="icon" href="img/techo1.png" style="color: white;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">    </script>
</head>
<body class="container">
        <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">
                <img src="img/techo.png" alt="LOGO" class="d-inline-block align-text-top bg-light">
                TechCORP
            </a>
        </div>
        </nav>
        <br>
        <!--CONTAINER2-->
    <div class="container-md">
        <div class="card text-bg-secondary mb-3 border-0 rounded-3" >
                <h1><img src="img/logo.png" alt="LOGO" width="50" height="50" class="d-inline-block align-text-top">
                EMPLEADOS</h1>
        </div>
            
    <!-- BTN NEW REGISTER-->
    <div class="container-md text-center" id="btnReg">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalRegistro">
            <img src="img/duplicar.png" alt="AGREGAR" width="25" height="25" style="margin-right:10px">NUEVO EMPLEADO </button>
    </div>
    <br>
    <!--MODAL FOR REGISTER EMPLOYEE-->
    <div class="modal fade" id="ModalRegistro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title w-100 text-center" id="ModalRegistro">BIENVENIDO</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--FORM FOR INSERT EMPLOYEE-->
        <div class="container-md">
        <img src="img/empleado.png" alt="employee" class="mx-auto d-block">
        <br>
            <form action="insertar.php" method="POST">
                <table class="table table-striped-columns" align="center">
                        <thead>
                            <th colspan="2"><h6>INSERT EMPLOYEE</h6></th>
                        </thead>
                        <tbody>
                        <tr>
                            <td><label for="" class="form-label">NOMBRE</label></td>
                            <td><input type="text" name="nombre" class="form-control" placeholder="NAME"></td>
                        </tr>
                        <tr>
                            <td><label for="" class="form-label">CARGO</label></td>
                            <td><input type="text" name="cargo" class="form-control" placeholder="CARGO"></td>
                        </tr>
                        <tr>
                            <td><label for="" class="form-label">SALARIO</label></td>
                            <td>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Q</span>
                                 <input type="text" class="form-control" name="salario">
                                 <span class="input-group-text">.00</span>
                            </div>
                            </td>                            
                        </tr>
                        <tr>
                            <td><label for="" class="form-label">FECHA</label></td>
                            <td><input type="date" name="fecha_cont" class="form-control"></td>
                        </tr>
                    </tbody>
                </table>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" value="Save Changes"></button>
        </form>
      </div>
    </div>
  </div>
</div>
    <br>
    <!-- SHOW REGISTERS -->
    <div class="table-wrapper-scroll-y scrollm">
        <table class="table table-dark table-striped table-hover" width="200px">
            <thead>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">CARGO</th>
                <th scope="col">SALARIO</th>
                <th scope="col">FECHA CONTRATACIÓN</th>
                <th scope="col" colspan="3">OPERACIÓN</th>
            </thead>
            <tbody>
               <script>
                    function Delete(){
                        alert('EMPLEADO ELIMINADO');
                    }
                </script>
                <?php
                    while($row= mysqli_fetch_array($query)):
                    ?>
                    <tr>
                        <td><?=$row['id'];?></td>
                        <td><?=$row['nombre'];?></td>
                        <td><?=$row['cargo'];?></td>
                        <td><?=$row['salario'];?></td>
                        <td><?=$row['fecha_cont'];?></td>
                        <td><a href="#edit_<?php echo $row['id'];?>" class="btn btn-outline-primary" data-toggle="modal" data-target="#edit">UPDATE</a></td>
                        <td><a href="delete.php?id=<?=$row['id'];?>" class="btn btn-outline-danger" role="button" onclick="Delete()">DELETE</a></td>
                    </tr>
                    <?php endwhile?>
                <tr>
                <td colspan="8" align="center"><b><i><?php echo "USUARIOS REGISTRADOS: ".$num_rows.""?></b></i></td>
                </tr>
                <?php //include('update.php');?>
                
            </tbody>
        </table>

    </div>    
    <br>
    
    </div>
    </body>
</html>