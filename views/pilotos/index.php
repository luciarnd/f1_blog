<div id="pilotos_index">
    <div id="cabecera_piloto">
        <h2 id="h2_pilotos">Pilotos</h2>
        <?php if ($_SESSION['user_data']['rol'] == "admin") : ?>
            <div id="addPiloto">
                <p>Añadir Piloto<a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>pilotos/add"><i class="fa fa-solid fa-plus fa-sm"></i></a></p>
            </div>
        <?php endif; ?>
    </div>
    <div id="pilotos" class="container-fluid">
    <?php foreach ($viewmodel as $item):?>
        <div class="card">
            <div class="card-header">
                <img src="<?php echo $item['img_url']; ?>" alt="...">
            </div>
            <div class="card-body">
                <h3 class="card-title"><?php echo $item['nombre'] . ' ' . $item['apellido']; ?></h3>
                <p class="card-text"><i class="fa-solid fa-location-dot"></i><?php echo $item['procedencia']; ?></p>
                <p class="card-text"><i class="fa-solid fa-car"></i><strong>Nº coche: </strong><?php echo $item['num_coche']; ?></p>
                <p class="card-text"><i class="fa-solid fa-wrench"></i><?php echo $item['escuderia']; ?></p>
            </div>
            <div class="card-footer">
                <?php if ($_SESSION['user_data']['rol'] == "admin") : ?>
                    <a class="btn btn-secondary" href="pilotos/edit/<?php echo $item['id']?>"><i class="fa fa-solid fa-edit fa-sm"></i></a>
                    <a class="btn btn-danger" href="pilotos/delete/<?php echo $item['id']?>"><i class="fa fa-solid fa-trash fa-sm"></i></a>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>