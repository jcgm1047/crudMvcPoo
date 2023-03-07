<?php
require_once("../head/header.php");
require_once("/xampp/htdocs/crudMvcPoo/controller/usernamecontroller.php");
$obj = new usernameController();
$date = $obj->show($_GET['id']);
?>

<h2 class="text-center">Detalles del registro</h2>

<div class="pb-3">

    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="index.php?id=<?= $date["id"] ?>" class="btn btn-success">Actualizar</a>

    <!-- Button trigger modal -->
    <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

    <table class="table container-fluid">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="col"><?= $date["id"]  ?></td>
                <td scope="col"><?= $date["nombre"]  ?></td>
            </tr>
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">

                    <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar este registro?</h1>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>

                <div class="modal-body">
                    Una vez eliminado no podra recuperar la informacion
                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                    <a href="delete.php?id=<?= $date["id"] ?>" class="btn btn-danger">Eliminar</a>

                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once("../head/footer.php"); ?>