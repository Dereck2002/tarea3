<?php
    require_once("c://xampp/htdocs/tarea3/controller/usernameController.php");
    $obj = new usernameController();
    $obj->update($_POST['id'],$_POST['nombre']);
    $obj->update($_POST['id'],$_POST['apellido']);
    $obj->update($_POST['id'],$_POST['direccion']);
    $obj->update($_POST['id'],$_POST['nomrepresentante']);
    $obj->update($_POST['id'],$_POST['telefono']);
    $obj->update($_POST['id'],$_POST['curso']);
    $obj->update($_POST['id'],$_POST['fechanacimiento']);

?>