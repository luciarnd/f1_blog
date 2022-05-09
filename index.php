<?php

session_start();

require('config.php');

require('classes/Messages.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

require('controllers/home.php');
require('controllers/carreras.php');
require('controllers/usuarios.php');
require ('controllers/escuderias.php');
require ('controllers/pilotos.php');

require('models/home.php');
require('models/usuarios.php');
require('models/carreras.php');
require('models/escuderias.php');
require('models/pilotos.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
	$controller->executeAction();
}