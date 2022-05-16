<div id="carreras_index">
    <script>
        function openNav() {
            document.getElementById("sidenav").style.width = "350px";
            document.getElementById("main").style.marginLeft = "0px";
            document.getElementById("main").style.position = "fixed";
            document.getElementById("main").style.top = "100px";
            document.getElementById("menu").style.marginLeft = "-60px";
            document.getElementById("carreras").style.backgroundColor = "rgba(0,0,0,0.6)";
            document.getElementById("main").style.visibility = "hidden";
        }

        function closeNav() {
            document.getElementById("sidenav").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
            document.getElementById("main").style.position = "relative";
            document.getElementById("main").style.top = "0";
            document.getElementById("menu").style.marginLeft = "0";
            document.getElementById("carreras").style.backgroundColor = "rgba(0,0,0,0)";
            document.getElementById("main").style.visibility = "visible";
        }

    </script>
    <aside id="sidenav" class="sidenav">
        <div id="cabecera_sidevar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa fa-solid fa-times fa-sm"></i></a>
            <h3>Circuitos</h3>
        </div>
        <?php foreach ($viewmodel as $item):?>
        <div id="main-sidevar">
            <a href="carreras/circuito/<?php echo $item['id_carreras'];?>" id="carrera"><?php echo $item['carrera']; ?></a>
            <div id="botones_circuito">
                <?php if ($_SESSION['user_data']['rol'] == "admin") : ?>
                    <a class="btn btn-secondary" href="carreras/edit/<?php echo $item['id_carreras']?>"><i class="fa fa-solid fa-edit fa-sm"></i></a>
                    <a class="btn btn-danger" href="carreras/delete/<?php echo $item['id_carreras']?>"><i class="fa fa-solid fa-trash fa-sm"></i></a>
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach;?>
        <?php if ($_SESSION['user_data']['rol'] == "admin") : ?>
            <div id="btn-add">
                <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>carreras/add"><i class="fa fa-solid fa-plus fa-sm"></i>Añadir carrera</a>
            </div>
        <?php endif; ?>
    </aside>

    <div id="carreras">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()" id="menu">&#9776;</span>
        <div id="main">
            <h5>Aquí puedes ver todas las carreras de la temporada</h5>
        </div>
    </div>
</div>
