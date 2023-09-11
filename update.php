<!--MODAL 2 UPDATE-->
<div class="modal fade" id="edit_<?php echo $row['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title w-100 text-center" id="ModalUpdate">BIENVENIDo</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--FORM FOR UPDATE EMPLOYEE-->
        <div class="container-md">
        <img src="img/empleado.png" alt="employee" class="mx-auto d-block">
        <br>
            <form action="update_user.php?id=<?php echo $row['id'];?>" method="POST">
                <table class="table table-striped-columns" align="center">
                        <thead>
                            <th colspan="2"><h6>UPDATE EMPLOYEE</h6></th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><label for="" class="form-label">ID</label></td>
                                <td><input type="text" name="id" class="form-control" readonly value="<?=$row['id'];?>"></td>
                            </tr>
                        <tr>
                            <td><label for="" class="form-label">NOMBRE</label></td>
                            <td><input type="text" name="nombre" class="form-control" value="<?=$row['nombre'];?>">></td>
                        </tr>
                        <tr>
                            <td><label for="" class="form-label">CARGO</label></td>
                            <td><input type="text" name="cargo" class="form-control" value="<?=$row['cargo'];?>"></td>
                        </tr>
                        <tr>
                            <td><label for="" class="form-label">SALARIO</label></td>
                            <td>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Q</span>
                                 <input type="text" class="form-control" value="<?=$row['salario'];?>">
                                 <span class="input-group-text">.00</span>
                            </div>
                            </td>                            
                        </tr>
                        <tr>
                            <td><label for="" class="form-label">FECHA</label></td>
                            <td><input type="date" name="fecha_cont" class="form-control" value="<?=$row['fecha_cont'];?>"></td>
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