<div id="escuderias_index">
    <div id="cabecera_escuderia">
        <h2 id="h2_escuderias">Escuderías</h2>
        <?php if ($_SESSION['user_data']['rol'] == "admin") : ?>
            <div id="addEscuderia">
                <p>Añadir Escuderia <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>escuderias/add"><i class="fa fa-solid fa-plus fa-sm"></i></a></p>
            </div>
        <?php endif; ?>
    </div>
    <div id="escuderias" class="">
    <?php foreach ($viewmodel as $item):?>
        <div class="card">
            <div class="card-header">
                <img src="<?php echo $item['img_url']; ?>" alt="...">
            </div>
            <div class="card-body">
                <h3 class="card-title"><?php echo $item['nombre']; ?></h3>
                <p class="card-text"><i class="fa fa-car"></i><?php echo $item['tipo_motor']; ?></p>
                <p class="card-text"><i class="fa fa-user-tie"></i><?php echo $item['nom_director']; ?></p>
            </div>
            <div class="card-footer">
                <?php if ($_SESSION['user_data']['rol'] == "admin") : ?>
                    <a class="btn btn-secondary" href='escuderias/edit/<?php echo $item['id']?>'><i class="fa fa-solid fa-edit fa-sm"></i></a>
                    <a class="btn btn-danger" href="escuderias/delete/<?php echo $item['id']?>"><i class="fa fa-solid fa-trash fa-sm"></i></a>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>
