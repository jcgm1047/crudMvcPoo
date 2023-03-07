<?php
require_once "/xampp/htdocs/crudMvcPoo/controller/usernamecontroller.php";
$obj = new userNameController();
$obj->guardar($_POST['nombre']);
?>