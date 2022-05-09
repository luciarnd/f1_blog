<html>
<head>
	<title>F1 Blog</title>
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand">
                <img src="http://localhost:8080/f1blog/images/nav-brand/logo-F1.png" alt="..." height="50">
            </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo ROOT_URL; ?>">Inicio</a></li>
              <?php if(isset($_SESSION['is_logged_in'])) : ?>
                  <li><a href="<?php echo ROOT_URL; ?>pilotos">Pilotos</a></li>
                  <li><a href="<?php echo ROOT_URL; ?>escuderias">Escuderías</a></li>
                  <li><a href="<?php echo ROOT_URL; ?>carreras">Carreras</a></li>
                  <li><a id="user-loged" href="<?php echo ROOT_URL; ?>"><i class="fa fa-user"></i><?php echo $_SESSION['user_data']['name']; ?></a></li>
                  <li><a href="<?php echo ROOT_URL; ?>usuarios/cerrarsesion">Cerrar Sesión</a></li>
              <?php else : ?>
                  <li><a href="<?php echo ROOT_URL; ?>usuarios/iniciarsesion">Iniciar Sesión</a></li>
                  <li><a href="<?php echo ROOT_URL; ?>usuarios/registrarse">Registrarse</a></li>
              <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>


    <?php Messages::display(); ?>
    <?php require($view); ?>

</body>
</html>