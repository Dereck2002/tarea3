<?php
    class usernameModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://xampp/htdocs/tarea3/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($nombre,$apellido,$direccion,$nomrepresentante,$telefono,$curso,$fechanacimiento){
            $stament = $this->PDO->prepare("INSERT INTO `username` VALUES (null,:nombre, :apellido,:direccion,:nomrepresentante,:telefono,:curso,:fechanacimiento)");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":apellido",$apellido);
            $stament->bindParam(":direccion",$direccion);
            $stament->bindParam(":nomrepresentante",$nomrepresentante);
            $stament->bindParam(":telefono",$telefono);
            $stament->bindParam(":curso",$curso);
            $stament->bindParam(":fechanacimiento",$fechanacimiento);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM username where id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM username");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id,$nombre,$apellido,$direccion,$nomrepresentante,$telefono,$curso,$fechanacimiento){
            $stament = $this->PDO->prepare("UPDATE `username` SET `nombre`='nombre',`apellido`='apellido',`direccion`='apellido',`nomrepresentante`='nomrepresentante',`telefono`='telefono',`curso`='curso',`fechanacimiento`='fechanacimiento'");
            $stament->bindParam(":nombre",$nombre, ":apellido",$apellido, ":direccion",$direccion, ":nomrepresentante",$nomrepresentante, ":telefono",$telefono, ":curso",$curso, ":fechanacimiento",$fechanacimiento, ":id",$id);
           /* $stament->bindParam(":apellido",$apellido);
            $stament->bindParam(":direccion",$direccion);
            $stament->bindParam(":nomrepresentante",$nomrepresentante);
            $stament->bindParam(":telefono",$telefono);
            $stament->bindParam(":curso",$curso);
            $stament->bindParam(":fechanacimiento",$fechanacimiento);
            $stament->bindParam(":id",$id); */
            return ($stament->execute()) ? $id : false; 
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM username WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
    }

?>