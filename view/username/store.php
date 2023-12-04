<?php
    require_once("c://xampp/htdocs/tarea3/controller/usernameController.php");
    $obj = new usernameController();
    $obj->guardar($_POST['nombre']);
    $obj->guardar($_POST['apellido']);
    $obj->guardar($_POST['direccion']);
    $obj->guardar($_POST['nomrepresentante']);
    $obj->guardar($_POST['telefono']);
    $obj->guardar($_POST['curso']);
    $obj->guardar($_POST['fechanacimiento']);
?>