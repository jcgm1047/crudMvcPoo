<?php
class userNameModel
{
    private $PDO;
    public function __construct()
    {
        require_once("../config/db.php");
        $con = new db();
        $this->PDO = $con->conexion();
    }
    public function insertar($nombre)
    {
        $stament = $this->PDO->prepare("INSERT INTO usename VALUES(null,:nombre)");
        $stament->bindParam(":nombre", $nombre);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }
}
