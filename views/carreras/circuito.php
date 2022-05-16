
<div id="cabecera_circuito">
    <a href="<?php echo ROOT_PATH; ?>carreras" id="atras"><i class="fa-solid fa-md fa-arrow-left-long"></i><h2 id="h2_circuito"><?=$viewmodel['carrera']?></h2></a>
</div>
<div id="main_circuito">
    <p><?=nl2br($viewmodel['informacion'])?></p>
    <p><strong> El piloto ganador de este GP fue: <?php echo $viewmodel['nombre'] . ' ' . $viewmodel['apellido'];?> </strong></p>
    <img src="<?php echo $viewmodel['img_url'];?>" alt="...">
</div>
