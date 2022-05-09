<div id="panel">
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Añadir Escudería</h3>
    </div>
    <div class="panel-body">
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Nombre de la escudería</label>
                <input type="text" name="nombre" class="form-control" />
            </div>
            <div class="form-group">
                <label>Tipo de motor</label>
                <input type="text" name="tipo_motor" class="form-control">
            </div>
            <div class="form-group">
                <label>Director</label>
                <input type="text" name="nom_director" class="form-control" />
            </div>
            <div class="form-group">
                <label>URL Imagen</label>
                <input type="text" name="img_url" class="form-control" />
            </div>
            <div id="submitButton">
                <input class="btn btn-primary" name="submit" type="submit" value="Enviar" />
                <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>escuderias">Cancelar</a>
            </div>
        </form>
    </div>
</div>
</div>