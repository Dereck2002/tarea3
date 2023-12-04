<?php
    require_once("c://xampp/htdocs/tarea3/view/head/head.php");
    require_once("c://xampp/htdocs/tarea3/controller/usernameController.php");
    $obj = new usernameController();
    $date = $obj->show($_GET['id']);
?>
<h2 class="text-center">Detalles del registro</h2>
<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?id=<?= $date[0]?>" class="btn btn-success">Actualizar</a>


    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-7" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Una vez eliminado no se podra recuperar el registro
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
            <a href="delete.php?id=<?= $date[0]?>" class="btn btn-danger">Eliminar</a>

        </div>
        </div>
    </div>
    </div>
</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Direccion</th>
            <th scope="col">Nombre del Representante</th>
            <th scope="col">Telefono</th>
            <th scope="col">Curso</th>
            <th scope="col">Fecha de nacimiento</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date["id"]?></td>
            <td scope="col"><?= $date["nombre"]?></td>
            <td scope="col"><?= $date["apellido"]?></td>
            <td scope="col"><?= $date["direccion"]?></td>
            <td scope="col"><?= $date["nomrepresentante"]?></td>
            <td scope="col"><?= $date["telefono"]?></td>
            <td scope="col"><?= $date["curso"]?></td>
            <td scope="col"><?= $date["fechanacimiento"]?></td>
        </tr>
    </tbody>
</table>



<?php
    require_once("c://xampp/htdocs/tarea3/view/head/footer.php");
?>