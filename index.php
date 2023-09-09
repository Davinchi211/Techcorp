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
        <!--BANNER-->
    <div class="container">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <h1><img src="img/logo.png" alt="LOGO" width="50" height="50" class="d-inline-block align-text-top">
                EMPLEADOS</h1>
        </div>
    <!-- BTN NUEVO -->
    <div class="container-md" id="btnReg">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalRegistro">
            + NUEVO EMPLEADO </button>
    </div>
    <div class="container-lg">
        <br>
            <form action="" method="POST">
                <table class="table" align="center">
                    <tbody>
                        <thead>
                            <th colspan="2"><h6>BIENVENIDO</h6></th>
                        </thead>
                        <tr>
                            <td><label for="" class="form-label">NOMBRE</label></td>
                            <td><input type="text" class="form-control" placeholder="NAME"></td>
                        </tr>
                        <tr>
                            <td><label for="" class="form-label">CARGO</label></td>
                            <td><input type="text" class="form-control" placeholder="CARGO"></td>
                        </tr>
                        <tr>
                            <td><label for="" class="form-label">SALARIO</label></td>
                            <td><input type="number" class="form-control" placeholder="0000"></td>
                        </tr>
                        <tr>
                            <td><label for="" class="form-label">FECHA</label></td>
                            <td><input type="date" class="form-control"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
    </div>
    <!-- SHOW REGISTERS -->
    <div class="container-md">
        <table class="table">
            <thead>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">CARGO</th>
                <th scope="col">SALARIO</th>
                <th scope="col">FECHA CONTRATACIÓN</th>
            </thead>
        </table>
    </div>    
    </div>
</body>
</html>