<div id="carreras_index">
    <script>
        function openNav() {
            document.getElementById("sidenav").style.width = "350px";
            document.getElementById("main").style.marginLeft = "0px";
            document.getElementById("main").style.position = "fixed";
            document.getElementById("main").style.top = "100px";
            document.getElementById("menu").style.marginLeft = "-60px";
            document.getElementById("carreras_index").style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() {
            document.getElementById("sidenav").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
            document.getElementById("main").style.position = "relative";
            document.getElementById("main").style.top = "0";
            document.getElementById("menu").style.marginLeft = "0";
            document.getElementById("carreras_index").style.backgroundColor = "white";
        }

    </script>
    <aside id="sidenav" class="sidenav">
        <div id="cabecera_sidevar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa fa-solid fa-times fa-sm"></i></a>
            <h3>Circuitos</h3>
        </div>
        <?php foreach ($viewmodel as $item):?>
            <a href="carreras/<?php echo $item['id'];?>" id="carrera"><?php echo $item['nombre']; ?></a>
        <?php endforeach;?>
        <div id="btn-add">
            <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>carreras/add"><i class="fa fa-solid fa-plus fa-sm"></i>Añadir carrera</a>
        </div>
    </aside>

    <div id="carreras">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()" id="menu">&#9776;</span>
        <div id="main">
            <p>Hola</p>
        </div>

    </div>

</div>