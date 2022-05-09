<?php
class usuarios extends Controller{
	protected function registrarse(){
		$viewmodel = new UsuariosModel();
		$this->returnView($viewmodel->registrarse(), true);
	}

	protected function iniciarsesion(){
		$viewmodel = new UsuariosModel();
		$this->returnView($viewmodel->iniciarsesion(), true);
	}

	protected function cerrarsesion(){
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_data']);
		session_destroy();

		header('Location: '.ROOT_URL);
	}
}