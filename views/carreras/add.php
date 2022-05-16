<div id="panel">
    <div class="panel panel-default" id="panel_piloto">
        <div class="panel-heading">
            <h3 class="panel-title">Añadir Carrera</h3>
        </div>
        <div class="panel-body" >
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Informacion</label>
                    <textarea name="informacion" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Piloto Ganador</label>
                    <select name="id_pilotoganador" class="form-control">
                        <?php foreach ($viewmodel as $option): ?>
                            <option value="<?=$option['id']?>"><?=$option['nombre'] . ' ' .$option['apellido']?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label>URL Imagen</label>
                    <input type="text" name="img_url" class="form-control"/>
                </div>
                <div id="submitButton">
                    <input class="btn btn-primary" name="submit" type="submit" value="Enviar" />
                    <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>carreras">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
