<?php
require_once("c://xampp/htdocs/tarea3/view/head/head.php");
?>


<form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="text" name="nombre" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Apellido</label>
        <input type="text" name="apellido" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Direccion</label>
        <input type="text" name="direccion" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre del representante</label>
        <input type="text" name="nomrepresentante" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Telefono</label>
        <input type="int" name="telefono" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div class="mb-3">
            <label for="curso">Curso</label>
            <select name="id" id="id" class="form-control">
                <option value="1ro">1ro</option>
                <option value="2do">2ro</option>
                <option value="3ro">3ro</option>
                <option value="4to">4to</option>
                <option value="5to">5to</option>
                <option value="6to">6to</option>
                <option value="7mo">7mo</option>
                <option value="8vo">8vo</option>
                <option value="9no">9no</option>
                <option value="10mo">10mo</option>
                <option value="1bc">1"BC"</option>
                <option value="2bc">2"BC"</option>
                <option value="3bc">3"BC"</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">fecha de nacimiento</label>
            <input type="date" name="fechanacimiento" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a class="btn btn-danger" href="index.php">Cancelar</a>
</form>

<?php
require_once("c://xampp/htdocs/tarea3/view/head/footer.php");
?>