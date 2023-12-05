<?php
    require_once("c://xampp/htdocs/tarea3/controller/usernameController.php");
    $obj = new usernameController();
    $obj->guardar($_POST['nombre'], $_POST['apellido'], $_POST['direccion'], $_POST['nomrepresentante'], $_POST['telefono'], $_POST['curso'], $_POST['fechanacimiento']);

?>