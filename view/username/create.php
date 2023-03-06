<?php include_once('../head/header.php'); ?>


<div class="row">
    <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card">
            <div class="card-body">

                <form action="store.php" method="POST" autocomplete="off">

                    <div class="mb-3">

                        <label for="exampleInputEmail1" class="form-label">Nombre del usuario</label>
                        <input type="text" name="nombre" required class="form-control" id="nombre" aria-describedby="emailHelp">

                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a class="btn btn-danger" href="/index.php">Cancelar</a>

            </div>
        </div>
    </div>
</div>
</form>
<?php include_once('../head/footer.php'); ?>