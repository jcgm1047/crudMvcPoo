<?php
class userNameModel
{
    private $PDO;
    public function __construct()
    {
        require_once("/xampp/htdocs/crudMvcPoo/config/db.php");
        $con = new db();
        $this->PDO = $con->conexion();
    }
    public function insertar($nombre)
    {
        $stament = $this->PDO->prepare("INSERT INTO username VALUES(null,:nombre)");
        $stament->bindParam(":nombre", $nombre);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }
    public function show ($id)
    {
        $stament = $this->PDO->prepare("SELECT * FROM username WHERE id = :id");
        $stament -> bindParam(":id", $id);
        return ($stament->execute()) ? $stament->fetch() : false; 

    }
}
