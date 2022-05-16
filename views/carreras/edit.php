<div id="panel" xmlns="http://www.w3.org/1999/html">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Editar Carrera</h3>
        </div>
        <div class="panel-body">
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="<?=$viewmodel[0]['nombre']?>"/>
                </div>
                <div class="form-group">
                    <label>Informacion</label>
                    <textarea name="informacion" class="form-control" /><?=$viewmodel[0]['informacion']?></textarea>
                </div>
                <div class="form-group">
                    <label>Piloto Ganador</label>
                    <select name="id_pilotoganador" class="form-control">
                        <?php foreach ($viewmodel[1] as $option): ?>
                            <option value="<?=$option['id']?>"><?=$option['nombre'] . ' ' . $option['apellido']?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label>URL Imagen</label>
                    <input type="text" name="img_url" class="form-control" value="<?=$viewmodel[0]['img_url']?>"/>
                </div>
                <div id="submitButton">
                    <input class="btn btn-primary" name="submit" type="submit" value="Enviar" />
                    <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>pilotos">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>

