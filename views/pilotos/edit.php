<div id="panel">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Editar Piloto</h3>
        </div>
        <div class="panel-body">
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="<?=$viewmodel['nombre']?>"/>
                </div>
                <div class="form-group">
                    <label>Apellido</label>
                    <input type="text" name="apellido" class="form-control" value="<?=$viewmodel['apellido']?>"/>
                </div>
                <div class="form-group">
                    <label>Procedencia</label>
                    <input type="text" name="procedencia" class="form-control" value="<?=$viewmodel['procedencia']?>"/>
                </div>
                <div class="form-group">
                    <label>Número de coche</label>
                    <input type="text" name="num_coche" class="form-control" value="<?=$viewmodel['num_coche']?>"/>
                </div>
                <div class="form-group">
                    <label>Escudería</label>
                    <select name="escuderia" class="form-control">
                        <?php foreach ($viewmodel as $option): ?>
                            <option value="<?=$option['escuderia_id']?>"><?=$option['escuderia_nom']?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label>URL Imagen</label>
                    <input type="text" name="img_url" class="form-control" value="<?=$viewmodel['img_url']?>"/>
                </div>
                <div id="submitButton">
                    <input class="btn btn-primary" name="submit" type="submit" value="Enviar" />
                    <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>escuderias">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
