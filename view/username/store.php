<?php
require_once "./controller/usernamecontroller.php";
$obj = new userNameController();
$obj->guardar($_POST['nombre']);
?>
ß